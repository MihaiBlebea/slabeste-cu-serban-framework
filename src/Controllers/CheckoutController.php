<?php

namespace App\Controllers;

use Framework\Alias\Template;
use Framework\Router\Request;
use App\Models\Program;
use App\Models\User;
use App\Models\Account;
use App\Models\Transaction;
use App\Models\Offer;
use Framework\Alias\Payment;
use App\Autoresponder\Autoresponder;
use Framework\Factory\EventFactory;
use Framework\Factory\ListenerFactory;
use App\Managers\CreateAccountManager;
use Carbon\Carbon;

class CheckoutController
{
    public function index(Program $program, Request $request = null, $error = null)
    {
        if($request !== null)
        {
            $error = ($request->out("error") !== null) ? true : false;
        } else {
            $error = false;
        }
        // Set discount equal to false
        $discount = false;

        // Check if discount code expists and is the correct one
        if($request !== null)
        {
            $code = $request->out("discount");

            // Check discount code in the database
            $offer = new Offer();
            $offer = $offer->where("code", "=", $code)
                           ->where("program_tag", "=", $program->program_tag)
                           ->selectOne();

            // If offer is found in the database, then set discount true and pass the discounted price
            if($offer && $offer->expire > Carbon::now()->toDateTimeString())
            {
                $discount = true;
                $discountPrice = $offer->price;
                $discountProcent = round(($discountPrice / $program->program_price) * 100, 0);
            }
        }

        $token = Payment::generateToken();

        Template::setAssign([
            "program"         => $program,
            "discount"        => $discount,
            "discountPrice"   => isset($discountPrice) ? $discountPrice : $program->program_price,
            "discountProcent" => isset($discountProcent) ? $discountProcent : 0,
            "braintree_token" => $token,
            "error"           => $error
        ])->setDisplay("checkout/index.tpl");
    }

    public function pay(Request $request)
    {
        // Get program information
        $program = new Program();
        $program = $program->where('program_tag', '=', $request->out("programTag"))->selectOne();

        // Generate unique password and username for the user
        $user = new User();
        $username = $user->generateUsername($request->out("firstName"), $request->out("lastName"));
        $password = $user->generatePassword(8);
        // Hash the password
        $hashPassword = $user->hashPassword($password);

        if($program->program_type == 'simple')
        {
            // Create a simple payment
            $transactionID = Payment::simplePay([
                "price"        => $request->out("program_price"),
                "paymentNonce" => $request->out("payment_method_nonce"),
                "firstName"    => $request->out("firstName"),
                "lastName"     => $request->out("lastName"),
                "phone"        => $request->out("phone"),
                "email"        => $request->out("email")
            ]);
        } elseif ($program->program_type == 'subscription') {

            // Create a recursive payment
            $transactionID = Payment::recursivePay([
                "productId"    => $program->program_tag,
                "username"     => $username,
                "price"        => $program->program_price,
                "paymentNonce" => $request->out("payment_method_nonce"),
                "firstName"    => $request->out("firstName"),
                "lastName"     => $request->out("lastName"),
                "phone"        => $request->out("phone"),
                "email"        => $request->out("email")
            ]);
        } else {
            throw new \Exception("Program type should be 'subscription' or 'simple'", 1);
        }

        // Payment is done, now it's time to process the user and accounts
        if ($transactionID !== false)
        {
            // Check if client is already in the database and if not add him
            $checkUser = $user->where('email', '=', $request->out("email"))->selectOne();
            if($checkUser !== false)
            {
                $username = $checkUser->username;
                $password = 'parola initiala';

                // Save the new account, but under the same client
                $manager = new CreateAccountManager();
                $manager->run([
                    "username"    => $checkUser->username,
                    "password"    => $password,
                    "program_tag" => $program->program_tag
                ]);

            } else {
                // Create new client
                $user->create([
                    'first_name' => $request->out("firstName"),
                    'last_name'  => $request->out("lastName"),
                    'username'   => $username,
                    'password'   => $hashPassword,
                    'email'      => $request->out("email")
                ]);

                // Add new accounts, under the new created client
                $manager = new CreateAccountManager();
                $manager->run([
                    "username"    => $username,
                    "password"    => $password,
                    "program_tag" => $program->program_tag
                ]);
            }

            // Create a new transaction
            $transaction = new Transaction();
            $transaction->create([
                'username'       => $username,
                'program_name'   => $program->program_name,
                'program_tag'    => $program->program_tag,
                'value'          => $request->out("program_price"),
                'transaction_id' => $transactionID,
            ]);

            // Add new user to the active campaign list (ASCENSION)
            $ac = new Autoresponder();

            // Add user to list
            $list = $ac->addToList(5, $request->out("firstName"), $request->out("email"));

            // Add user to the automation
            if($list && $program->active_campaign_tag !== '')
            {
                $contact_id = $list->subscriber_id;
                $result = $ac->addTags($contact_id, [$program->active_campaign_tag]);
            }

        } else {
            // Add tempalte for payment not processed, and send back to Checkout page
            $redirect = $_SERVER["HTTP_REFERER"];
            if(strpos($redirect, "?") !== false)
            {
                $redirect .= '&error=true';
            } else {
                $redirect .= '?error=true';
            }
            header($redirect);
        }

        // Set up the event payload that's going to be sent to the user and to the admin
        $eventPayload = [
            "username"     => $username,
            "password"     => $password,
            "email"        => $request->out("email"),
            "firstName"    => $request->out("firstName"),
            "lastName"     => $request->out("lastName"),
            "programName"  => $program->program_name,
            "programPrice" => $request->out("program_price")
        ];

        // Call events to send email to admin and to the client
        $event = EventFactory::build("NewClient");
        $listenerEmailAdmin = ListenerFactory::build("NewClientEmailToAdmin");
        $listenerEmailClient = ListenerFactory::build("NewClientEmailToClient");
        $event->attach($listenerEmailAdmin)->attach($listenerEmailClient)->trigger($eventPayload);

        Template::setAssign([
            'username'     => $username,
            'password'     => $password,
            'email'        => $request->out("email"),
            'first_name'   => $request->out("firstName"),
            'last_name'    => $request->out("lastName"),
            'programImage' => $program->program_image,
            'program_name' => $program->program_name,
            'mainPage'     => $program->main_page
        ])->setDisplay('confirmation/index.tpl');
    }
}
