<?php

namespace InstaRouter\Controllers;

use InstaRouter\Controllers\Controller;
use Braintree\ClientToken;
use Braintree\Transaction;
use Braintree\Customer;
use Braintree\Subscription;
use InstaRouter\Router\Request;
use InstaRouter\Model\Program;
use InstaRouter\Model\User;
use InstaRouter\Model\Account;
use InstaRouter\Model\Transaction as TransactionModel;
use InstaRouter\Event;

class CheckoutController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        global $app;
        $app->bootstrapBraintree();
    }

    public function index($id)
    {
        $clientToken = ClientToken::generate();

        $program = new Program();
        $program = $program->where('program_tag', '=', $id)->select();

        $this->smarty->assign(['program' => $program]);
        $this->smarty->assign(['braintree_token' => $clientToken]);
        $this->smarty->display("checkout/index.tpl");
    }

    public function payment(Request $request)
    {
        $program = new Program();
        $program = $program->where('program_tag', '=', $request->retrive("programTag"))->select();

        $user = new User();
        $username = $user->generateUsername(strtolower($request->retrive("firstName")), strtolower($request->retrive("lastName")));
        $password = $user->generatePassword(8);

        if($program['program_type'] == 'simple')
        {
            $transactionID = $this->simplePayment($request, $program);
        } elseif ($program['program_type'] == 'subscription') {
            $transactionID = $this->subscriptionPayment($request, $program, $username);
        }

        // Payment is done, now it's time to process the user and accounts
        if ($transactionID !== false)
        {
            // Check if client is already in the database
            $checkUser = $user->where('email', '=', $request->retrive("email"))->select();
            if($checkUser !== false)
            {
                $username = $checkUser['username'];
                $password = 'parola initiala';
            } else {
                $user->create([
                    'first_name' => $request->retrive("firstName"),
                    'last_name'  => $request->retrive("lastName"),
                    'username'   => $username,
                    'password'   => $password,
                    'email'      => $request->retrive("email")
                ]);
            }

            $account = new Account();
            $account->create([
                'username' => $username,
                'password' => $password,
                'program_tag' => $program['program_tag']
            ]);

            $transaction = new TransactionModel();
            $transaction->create([
                'username'       => $username,
                'program_name'   => $program['program_name'],
                'program_tag'    => $program['program_tag'],
                'value'          => $program['program_price'],
                'transaction_id' => $transactionID,
            ]);
        } else {
            dd('Plata nu a fost efectuata');
        }

        // Send email with event listeners
        Event::event('NewClientEvent', [
            'userEmail'     => $request->retrive("email"),
            'firstName'     => $request->retrive("firstName"),
            'username'      => $username,
            'password'      => $password,
            'program_tag'   => $program['program_tag'],
            'program_price' => $program['program_price']
        ]);

        $this->smarty->assign([
            'username'     => $username,
            'password'     => $password,
            'programImage' => $program['program_image'],
            'mainPage'     => $program['main_page'],
        ]);
        $this->smarty->display('confirmation/index.tpl');
    }

    public function simplePayment($request, $program)
    {
        $result = Transaction::sale([
            'amount'             => $program['program_price'],
            'paymentMethodNonce' => $request->retrive("payment_method_nonce"),
            'options'            => ['submitForSettlement' => true],
            'customer'           => [
                'firstName' => $request->retrive("firstName"),
                'lastName'  => $request->retrive("lastName"),
                'phone'     => $request->retrive("phone"),
                'email'     => $request->retrive("email")
            ]
        ]);

        if($result->success)
        {
            return $result->transaction->id;
        }
        return false;
    }

    public function subscriptionPayment($request, $program, $username)
    {
        global $app;

        $customer = Customer::create([
            'customFields'       => ['username' => $username,
                                     'plan_tag' => $program['program_tag']
                                    ],
            'firstName'          => $request->retrive("firstName"),
            'lastName'           => $request->retrive("lastName"),
            'phone'              => $request->retrive("phone"),
            'email'              => $request->retrive("email"),
            'paymentMethodNonce' => $request->retrive("payment_method_nonce")
        ]);

        if ($customer->success)
        {
            $payment_token = $customer->customer->paymentMethods[0]->token;
        } else {
            foreach($customer->errors->deepAll() AS $error)
            {
                echo($error->code . ": " . $error->message . "\n");
            }
        }

        $result = Subscription::create([
            'paymentMethodToken' => $payment_token,
            'planId'             => $program['plan_id'],
            'merchantAccountId'  => $app->config['braintree']['merchantAccountId']
        ]);

        if($result->success)
        {
            return $result->subscription->transactions[0]->id;
        }
        return false;
    }
}
