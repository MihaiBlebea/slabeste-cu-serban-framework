<?php

namespace App\Controllers;

use Framework\Router\Request;
use Braintree\WebhookNotification;
use Braintree\Configuration;
use Braintree\Customer;
use Framework\Factory\EmailFactory;
use App\Models\Account;
use App\Models\Transaction;
use App\Log\WebhookLogger;

class WebhookController
{
    public function webhookBraintree(Request $request)
    {
        $webhook = WebhookNotification::parse($request->out('bt_signature'),
                                              $request->out('bt_payload'));

        $notification_type = $webhook->kind;

        if($notification_type == "subscription_charged_successfully")
        {
            $customer_id   = $webhook->subscription;
            $customer_id   = $webhook->subscription->transactions[0]->customerDetails->id;
            $billing_cycle = $webhookNotification->subscription->currentBillingCycle;
            $client_email  = $webhookNotification->subscription->transactions[0]->customerDetails->email;
            $price         = $webhookNotification->subscription->transactions[0]->amount;
            $plan_id       = $webhookNotification->subscription->planId;
            $user_info     = $this->getUserFromSubscription($customer_id);

            $program_name = "Fit si Supla 1";
            $program_tag  = "fit-si-supla-1";
            $value        = $price;

            if($user_info["tag"] == "fit-si-supla-1")
            {
                if($billing_cycle == "2")
                {
                    $program_name = "Fit si Supla 2";
                    $program_tag  = "fit-si-supla-2";
                } elseif($billing_cycle == "3") {
                    $program_name = "Fit si Supla 3";
                    $program_tag  = "fit-si-supla-3";
                } else {

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
        WebhookLogger::log(["message" => "The webhook type was " . $notification_type]);
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

    public function webhookActiveCampaign(Request $request)
    {
        WebhookLogger::log(["message" => "The AC webhook type was " . json_encode($request->getAllPayload())]);
    }
}
