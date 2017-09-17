<?php

namespace InstaRouter\Controllers;

use InstaRouter\Controllers\Controller;
use InstaRouter\Router\Request;
use Braintree\WebhookNotification;
use Braintree\Configuration;

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

        if($notification_type == "subscription_charged_successfully")
        {
            $customer_id = $webhookNotification->subscription->transactions[0]->customerDetails->id;
            $this->getUserFromSubscription($customer_id);
        }

        if($notification_type == "subscription_charged_unsuccessfully")
        {
            
        }

        file_put_contents("webhook.txt", $notification_type, FILE_APPEND);
    }

    private function getUserFromSubscription($customer_id)
    {
        $customer = Customer::find($customer_id);

        $username = $customer->customFields['username'];
        $tag = $customer->customFields['plan_tag'];
    }

}
