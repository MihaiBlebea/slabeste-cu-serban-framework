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

    public function getContactDetails($contactId)
    {
        return $response = $this->ac->api("contact/view?id=" . $contactId);
    }

    public function addToList(string $list, $name, $email)
    {
        $contact = array(
    		"email"                 => $email,
    		"first_name"            => $name,
    		"p[" . $list . "]"      => $list,
    		"status[" . $list . "]" => 1
    	);

    	$response = $this->ac->api("contact/sync", $contact);
        if($response->result_code == 1)
        {
            return $response;
        } else {
            return false;
        }
    }

    public function addToAutomation($contactId, string $automation)
    {
        $post_data = array(
            "contact_id" => $contactId, // include this or contact_id
            "automation" => $automation, // one or more
        );
        return $this->ac->api("automation/contact/add", $post_data);
    }

    public function addTags($contactId, array $tags)
    {
        $schema = "";
        foreach($tags as $index => $tag)
        {
            $schema .= '"tags[' . $index . ']": "' . $tag . '"';
        }
        $data = get_object_vars(json_decode('{"id": "' . $contactId . '", ' . $schema . '}'));
        $response = $this->ac->api("contact/tag/add", $data);
        return $this->checkResponse($response);
    }

    public function removeTags($contactId, array $tags)
    {
        $schema = $this->buildTagSchema($tags);
        $data = get_object_vars(json_decode('{"id": "' . $contactId . '", ' . $schema . '}'));
        $response = $this->ac->api("contact/tag/remove", $data);
        return $this->checkResponse($response);
    }

    private function buildTagSchema($tags)
    {
        $schema = "";
        foreach($tags as $index => $tag)
        {
            $schema .= '"tags[' . $index . ']": "' . $tag . '"';
        }
        return $schema;
    }

    private function checkResponse($response)
    {
        if($response->result_code == 1)
        {
            return $response;
        } else {
            return false;
        }
    }

}
