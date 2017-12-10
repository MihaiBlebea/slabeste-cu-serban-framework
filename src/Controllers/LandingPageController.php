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
    public function landing(Program $program, Request $request)
    {
        $lp = $request->out("lp");
        if($lp)
        {
            $landing = new Landing();
            $landing = $landing->where("code", "=", $lp)->where("program_tag", "=", $program->program_tag)->selectOne();
            if($landing)
            {
                return Template::setAssign([
                    "landing" => $landing
                ])->setDisplay($landing->template);
            }
        }
        return $this->notFound();
    }

    public function notFound()
    {
        Template::setDisplay("misc/error.tpl");
    }

    // Admin pages from here
    public function landings(Request $request = null)
    {
        if($request !== null && $request->out("page") !== null)
        {
            $page = $request->out("page") - 1;
        } else {
            $page = 0;
        }

        // Process pagination
        $landing = new Landing();
        $count = $landing->count();
        $limit = 10;

        $pages = $count / $limit;
        if(is_float($pages))
        {
            $pages = intval($pages) + 1;
        }

        // Get the paginated landign pages
        $landings = $landing->sortBy('reg_date', 'DESC')->limitBy($limit, $limit * $page)->selectAll();

        foreach($landings as $index => $landing)
        {
            $landing->index = ($page * $limit) + $index + 1;
        }

        Template::setAssign([
            "error"         => false,
            "landings"      => $landings,
            "paginateCount" => $pages,
            "previousPage"  => $page,
            "nextPage"      => $page + 2,
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

    public function search($id, $mode, Request $request = null)
    {
        if($request !== null && $request->out("page") !== null)
        {
            $page = $request->out("page") - 1;
        } else {
            $page = 0;
        }

        // Process pagination
        $landing = new Landing();
        $count = $landing->count();
        $limit = 10;

        $pages = $count / $limit;
        if(is_float($pages))
        {
            $pages = intval($pages) + 1;
        }

        // Get the paginated landign pages
        $landings = $landing->where($mode, "=", $id)->sortBy('reg_date', 'DESC')->limitBy($limit, $limit * $page)->select();

        foreach($landings as $index => $landing)
        {
            $landing->index = ($page * $limit) + $index + 1;
        }

        foreach($landings as $index => $landing)
        {
            $landing->index = ($page * $limit) + $index + 1;
        }

        Template::setAssign([
            "error"    => false,
            "landings" => $landings,
            "paginateCount" => $pages,
            "previousPage"  => $page,
            "nextPage"      => $page + 2,
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
        $name = $request->out("name");
        $email = $request->out("email");
        $redirect = $request->out("redirect");
        $code = $request->out("code");
        $program_tag = $request->out("program_tag");

        // Get the landing page that called the autoresponder
        $landing = new Landing();
        $landing = $landing->where("code", "=", $code)->where("program_tag", "=", $program_tag)->selectOne();

        // Store the new autoresponder client

        $autoresponder = new Autoresponder();
        $contactId = $autoresponder->addToList($landing->autoresponder_list, $name, $email);
        if($contactId !== false)
        {
            // Add new user to an automation
            $result_code = $autoresponder->addToAutomation($contactId, $landing->autoresponder_automation);
            if($result_code->result_code == 0)
            {
                // If automation fails then return to the landing page
                header('Location: ' . $_SERVER["HTTP_REFERER"]);
            } else {
                // Update lead counter
                $leadCount = $landing->lead_count + 1;
                $landing->update([
                    "lead_count" => $leadCount
                ]);
                // If automation is successful then go to the database link
                if($redirect == 'false')
                {
                    // Go to path specified in the database
                    Router::goToUrl("landing/" . $landing->link);
                } else {
                    // Go to specific page specified in the form
                    header('Location: ' . $redirect);
                }
            }
        }
        // If contact adding fails then go back to the landing page
        header('Location: ' . $_SERVER["HTTP_REFERER"]);
    }
}
