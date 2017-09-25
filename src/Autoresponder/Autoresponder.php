<?php

namespace App\Autoresponder;

use Framework\Injectables\Injector;

class Autoresponder
{
    private $ac;

    private $config;

    public function __construct()
    {
        $config = Injector::resolve("Config");
        $this->config = $config->getConfig("email");

        $this->ac = new \ActiveCampaign($this->config["active_campaign_api_url"], $this->config["active_campaign_api_key"]);
    }

    public function addToList(string $list, $name, $email)
    {
        $contact = array(
    		"email"                 => $email,
    		"first_name"            => $name,
    		// "last_name"          => "Test",
    		"p[" . $list . "]"      => $list,
    		"status[" . $list . "]" => 1
    	);

    	$contact_sync = $this->ac->api("contact/sync", $contact);

    	if (!(int)$contact_sync->success)
        {
            dd($contact_sync->error);
    		// request failed
    		// echo "<p>Syncing contact failed. Error returned: " . $contact_sync->error . "</p>";
    		return false;
    	}

        // successful request
        return (int)$contact_sync->subscriber_id;
    }

    public function addToAutomation($contactId, string $automation)
    {
        $post_data = array(
            "contact_id" => $contactId, // include this or contact_id
            "automation" => $automation, // one or more
        );
        $response = $this->ac->api("automation/contact/add", $post_data);
        return $response;
    }

}
