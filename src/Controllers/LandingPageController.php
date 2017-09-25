<?php

namespace App\Controllers;

use Framework\Alias\Template;
use App\Models\Program;
use App\Models\Landing;
use App\Models\Action;
use Framework\Router\Request;
use App\Autoresponder\Autoresponder;
use Framework\Alias\Router;

class LandingPageController
{
    public function landing(Program $program, Landing $landing)
    {
        Template::setAssign([
            "landing" => $landing
        ])->setDisplay($landing->template);
    }

    public function notFound()
    {
        Template::setDisplay("misc/error.tpl");
    }

    // Admin pages from here
    public function landings()
    {
        $landing = new Landing();
        $landings = $landing->selectAll();

        Template::setAssign([
            "error"    => false,
            "landings" => $landings
        ])->setDisplay("admin/landings.tpl");
    }

    public function getUpdate(Landing $landing)
    {
        $program = new Program();
        $programs = $program->selectAll();

        $templates = $landing->getTemplate("../views/templates/" . $landing->landingPath);
        $result = array();

        foreach($templates as $index => $template)
        {
            $result[$index] = ["path" => $landing->landingPath . "/" . $template, "name" => $template];
        }

        Template::setAssign([
            "landing"   => $landing,
            "programs"  => $programs,
            "templates" => $result,
            "mode"      => "create",
        ])->setDisplay("admin/edit_landing.tpl");
    }

    public function postUpdate(Request $request)
    {
        $landing = new Landing();
        $result = $landing->where("id", "=", $request->out("id"))->update([
            "program_tag"              => $request->out("program_tag"),
            "name"                     => $request->out("name"),
            "code"                     => $request->out("code"),
            "count"                    => 0,
            "link"                     => $request->out("link"),
            "template"                 => $request->out("template"),
            "autoresponder_list"       => $request->out("autoresponder_list"),
            "tags"                     => $request->out("tags"),
            "lead_count"               => 0,
            "autoresponder_automation" => $request->out("autoresponder_automation")
        ]);

        return $this->landings();
    }

    public function getCreate()
    {
        $program = new Program();
        $programs = $program->selectAll();

        $landing = new Landing();
        $templates = $landing->getTemplate("../views/templates/" . $landing->landingPath);
        $result = array();

        foreach($templates as $index => $template)
        {
            $result[$index] = ["path" => $landing->landingPath . "/" . $template, "name" => $template];
        }

        Template::setAssign([
            "templates" => $result,
            "programs" => $programs
        ])->setDisplay("admin/create_landing.tpl");
    }

    public function postCreate(Request $request)
    {
        $landing = new Landing();
        $result = $landing->create([
            "program_tag"              => $request->out("program_tag"),
            "name"                     => $request->out("name"),
            "code"                     => $request->out("code"),
            "count"                    => 0,
            "link"                     => $request->out("link"),
            "template"                 => $request->out("template"),
            "autoresponder_list"       => $request->out("autoresponder_list"),
            "tags"                     => $request->out("tags"),
            "lead_count"               => 0,
            "autoresponder_automation" => $request->out("autoresponder_automation")
        ]);

        $this->landings();
    }

    public function delete(Landing $landing)
    {
        $landing->delete();
        return $this->landings();
    }

    public function search($id, $mode)
    {
        $landing = new Landing();
        $landings = $landing->where($mode, "=", $id)->select();

        Template::setAssign([
            "error"    => false,
            "landings" => $landings
        ])->setDisplay("admin/landings.tpl");
    }

    public function reset(Landing $landing)
    {
        $landing->update([
            "count" => 0
        ]);
        return $this->landings();
    }

    // Send the tracking request payload to this link and method
    public function receive(Request $request)
    {
        $landing = new Landing();
        $landing = $landing->where("code", "=", $request->out("pageCode"))->selectOne();
        if($landing !== false)
        {
            $counter = $landing->count + 1;
            $landing->update([
                "count" => $counter
            ]);
            return true;
        }
        return false;
    }

    // Catch the data from autoresponder that come from the landing page
    public function autoresponder(Request $request)
    {
        // Get the landing page that called the autoresponder
        $landing = new Landing();
        $landing = $landing->where("code", "=", $request->out("page_code"))->selectOne();

        // Store the new autoresponder client
        $autoresponder = new Autoresponder();
        $contactId = $autoresponder->addToList($landing->autoresponder_list, $request->out("name"), $request->out("email"));
        if($contactId !== false)
        {
            // Add new user to an automation
            $result_code = $autoresponder->addToAutomation($contactId, $landing->autoresponder_automation);
            if($result_code->result_code == 0)
            {
                // If automation fails then return to the landing page
                Router::goToUrl("landing/" . $landing->program_tag . "/" . $landing->code);
            } else {
                // Update lead counter
                $leadCount = $landing->lead_count + 1;
                $landing->update([
                    "lead_count" => $leadCount
                ]);
                // If automation is successful then go to the database link
                Router::goToUrl("landing/" . $landing->link);
            }
        }
        // If contact adding fails then go back to the landing page
        Router::goToUrl("landing/" . $landing->program_tag . "/" . $landing->code);
    }
}
