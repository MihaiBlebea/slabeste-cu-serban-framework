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

class CheckoutController
{
    public function index(Program $program, Request $request = null, $error = null)
    {
        // Set discount equal to false
        $discount = false;

        // Check if discount code expists and is the correct one
        if($request !== null)
        {
            $discount = $request->out("discount");

            // Check discount code in the database
            $offer = new Offer();
            $offer = $offer->where("code", "=", $discount)
                           ->where("program_tag", "=", $program->program_tag)
                           ->selectOne();

            // If offer is found in the database, then set discount true and pass the discounted price
            if($offer)
            {
                $discount = true;
                $discountPrice = $offer->price;
            }
        }

        $token = Payment::generateToken();

        Template::setAssign([
            "program"         => $program,
            "discount"        => $discount,
            "discountPrice"   => isset($discountPrice) ? $discountPrice : $program->program_price,
            "braintree_token" => $token
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
                $account = new Account();
                $account->create([
                    'username'    => $checkUser->username,
                    'password'    => $password,
                    'program_tag' => $program->program_tag
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
                $account = new Account();
                $account->create([
                    'username'    => $username,
                    'password'    => $password,
                    'program_tag' => $program->program_tag
                ]);
            }

            // Create a new transaction
            $transaction = new Transaction();
            $transaction->create([
                'username'       => $username,
                'program_name'   => $program->program_name,
                'program_tag'    => $program->program_tag,
                'value'          => $program->program_price,
                'transaction_id' => $transactionID,
            ]);

            // Add new user to the active campaign list (ASCENSION)
            $ac = new Autoresponder();

            // Add user to list
            $list = $ac->addToList(5, $request->out("firstName"), $request->out("email"));

            // Add user to the automation
            if($list->success == 1)
            {
                $automation = $ac->addToAutomation($list->subscriber_id, "47");

                // Add tag to exclude from automations
                // if($automation->success == 1)
                // {
                //     $tag = "cumparat-" . $program->program_tag;
                //     $result = $ac->addTags($list->subscriber_id, [$tag]);
                //     dd($result);
                // }
            }

        } else {
            // Add tempalte for payment not processed, and send back to Checkout page
            dd('Plata nu a fost efectuata');
        }

        // Set up the event payload that's going to be sent to the user and to the admin
        $eventPayload = [
            "username"     => $username,
            "password"     => $password,
            "email"        => $request->out("email"),
            "firstName"    => $request->out("firstName"),
            "lastName"     => $request->out("lastName"),
            "programName"  => $program->program_name,
            "programPrice" => $program->program_price
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
