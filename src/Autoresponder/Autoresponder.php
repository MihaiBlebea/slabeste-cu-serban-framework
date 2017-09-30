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

    private function getIdFromConfig($type, $name)
    {
        return $this->config[$type][$name];
    }

    // Get get contact details
    public function getContactDetails($contactId)
    {
        return $response = $ac->api("contact/view?id=" . $contactId);
    }

    // Get active lists with details

    // Get automations

    // Get subsribers today
    private function getLeadsForDate()
    {
        $response = $ac->api("contact/list?ids=all&sort=datetime&sort_direction=DESC&page=1");
        return count($response);
    }


    public function addToList(string $list, $name, $email)
    {
        // $listId = getIdFromConfig("lists_ID", $list);

        $contact = array(
    		"email"                 => $email,
    		"first_name"            => $name,
    		"p[" . $list . "]"      => $list,
    		"status[" . $list . "]" => 1
    	);

    	return $contact_sync = $this->ac->api("contact/sync", $contact);
    }

    public function addToAutomation($contactId, string $automation)
    {
        // $automationId = getIdFromConfig("automations_ID", $automation);

        $post_data = array(
            "contact_id" => $contactId, // include this or contact_id
            "automation" => $automation, // one or more
        );
        return $response = $this->ac->api("automation/contact/add", $post_data);
    }

    public function addTags($contactId, array $tags)
    {
        $schema = "";
        foreach($tags as $index => $tag)
        {
            $schema .= "tags[" . $index . "]": $tag,
        }

        $data = get_object_vars(json_decode('{"id": "' . $contactId . '", ' . $schema . '}'));

        return $response = $ac->api("contact/tag/add", $data);
    }

}
