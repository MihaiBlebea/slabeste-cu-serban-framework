<?php

namespace App\Controllers;

use Framework\Alias\Template;
use App\Models\Program;
use App\Models\Landing;
use App\Models\Action;

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

    public function editPage(Landing $code)
    {
        $action = new Action();
        $actions = $action->where("landing_id", "=", $code->id)->selectOne();

        Template::setAssign([
            "landings" => $code,
            "actions"  => $actions
        ])->setDisplay("admin/edit_landing.tpl");
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
