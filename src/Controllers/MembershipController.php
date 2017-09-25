<?php

namespace App\Controllers;

use Framework\Alias\Template;
use App\Models\User;
use App\Models\Page;
use App\Models\Program;
use Framework\Router\Request;
use App\Managers\OwnedProgramsManager;
use App\Managers\PrepareChaptersAndLessonsManager;
use Framework\Sessions\UsernameSession;

class MembershipController
{
    public function index()
    {
        $manager = new OwnedProgramsManager();
        Template::setAssign([
            "programs" => $manager->run()
        ])->setDisplay("home/index.tpl");
    }

    public function page(Program $program, $slug)
    {
        // Get the specific page to display
        $page = new Page();
        $page = $page->where("program_tag", "=", $program->program_tag)
                     ->where("page_slug", "=", $slug)
                     ->selectOne();

        // Get all the chapters
        $managerChapters = new PrepareChaptersAndLessonsManager();
        $chapters = $managerChapters->run($program);

        // Get all the programs that the user didn't buy
        $managerPrograms = new OwnedProgramsManager();
        $programs = $managerPrograms->run();

        // Get the auth
        $auth = new UsernameSession();
        $auth = $auth->getContent();

        $user = new User();
        $user = $user->where("username", "=", $auth)->selectOne();
        
        Template::setAssign([
                "auth"     => $user,
                "chapters" => $chapters,
                "programs" => $programs
        ])->setDisplay($page->page_url);
    }

    // public function program($program, $lesson = null)
    // {
    //     $chapters = require_once('../config/' . $program . '.php');
    //
    //     if(gettype($lesson) !== 'string')
    //     {
    //         $path = $chapters[0]['pages'][0]['path'];
    //     } else {
    //         $path =  $program . "/" . $lesson;
    //     }
    //
    //     $filteredPrograms = $this->filterOwnedPrograms();
    //
    //     $this->smarty->assign([
    //         "chapters" => $chapters,
    //         "programs" => $filteredPrograms
    //     ]);
    //     $this->smarty->display("programs/" . $path . ".tpl");
    // }
}
