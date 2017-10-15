<?php

namespace InstaRouter\Controllers;

use InstaRouter\Controllers\Controller;
use InstaRouter\Router\Request;
use Braintree\WebhookNotification;
use Braintree\Configuration;
use Framework\Factory\EmailFactory;
use App\Models\Account;
use App\Models\Transaction;

class WebhookController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        global $app;
        $app->bootstrapBraintree();
    }

    public function getRequest(Request $request)
    {
        global $app;
        $webhook = WebhookNotification::parse($request->retrive('bt_signature'),
                                              $request->retrive('bt_payload'));

        $notification_type = $webhook->kind;

        $customer_id   = $webhookNotification->subscription->transactions[0]->customerDetails->id;
        $billing_cycle = $webhookNotification->subscription->currentBillingCycle;
        $client_email  = $webhookNotification->subscription->transactions[0]->customerDetails->email;
        $price         = $webhookNotification->subscription->transactions[0]->amount;
        $plan_id       = $webhookNotification->subscription->planId;
        $user_info     = $this->getUserFromSubscription($customer_id);

        if($notification_type == "subscription_charged_successfully")
        {
            if($user_info["tag"] == "fit-si-supla-1")
            {
                if($billing_cycle == "2")
                {
                    $program_name = "Fit si Supla 2"
                    $program_tag  = "fit-si-supla-2";
                    $value        = $price;
                } elseif($billing_cycle == "3") {
                    $program_name = "Fit si Supla 3"
                    $program_tag  = "fit-si-supla-3";
                    $value        = $price;
                }
            }

            // Add the new account to the database
            $account = new Account();
            $account->create([
                "username"    => $user_info["username"],
                "password"    => "parola initiala",
                "program_tag" => $program_tag
            ]);

            // Add the transaction to the database
            $transaction = new Transaction();
            $transaction->create([
                'username'       => $user_info["username"],
                'program_name'   => $program_name,
                'program_tag'    => $program_tag,
                'value'          => $value,
                'transaction_id' => $customer_id,
            ]);

            // Send email to the ADMIN
            $email = EmailFactory::build("SubscriptionSuccess");
            $email->send([
                "customer_id" => $customer_id,
                "username"    => $user_info["username"],
                "tag"         => $user_info["tag"]
            ]);
        }

        if($notification_type == "subscription_charged_unsuccessfully")
        {
            $email = EmailFactory::build("SubscriptionFail");
            $email->send([
                "customer_id"  => $customer_id,
                "username"     => $user_info["username"],
                "tag"          => $user_info["tag"],
                "billig_cycle" => $billing_cycle
            ]);
        }

        file_put_contents("webhook.txt", $notification_type, FILE_APPEND);
    }

    private function getUserFromSubscription($customer_id)
    {
        $customer = Customer::find($customer_id);

        $username = $customer->customFields['username'];
        $tag = $customer->customFields['plan_tag'];

        return [
            "username" => $username,
            "tag"      => $tag
        ];

    }

}
