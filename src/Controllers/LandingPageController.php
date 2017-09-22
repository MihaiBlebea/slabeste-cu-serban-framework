<?php

namespace App\Controllers;

use Framework\Alias\Template;
use App\Models\Program;
use App\Models\Landing;
use App\Models\Action;
use Framework\Router\Request;

class LandingPageController
{
    public function landing(Program $program, Landing $code)
    {
        Template::setDisplay($code->template);
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
            "program_tag" => $request->out("program_tag"),
            "name"        => $request->out("name"),
            "code"        => $request->out("code"),
            "count"       => 0,
            "link"        => $request->out("link"),
            "template"    => $request->out("template")
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
            "program_tag" => $request->out("program_tag"),
            "name"        => $request->out("name"),
            "code"        => $request->out("code"),
            "count"       => 0,
            "link"        => $request->out("link"),
            "template"    => $request->out("template")
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
}
