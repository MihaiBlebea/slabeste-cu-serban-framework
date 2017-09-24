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

    public function page(Program $program, Page $page)
    {
        $managerChapters = new PrepareChaptersAndLessonsManager();
        $chapters = $managerChapters->run($program);

        $managerPrograms = new OwnedProgramsManager();
        $programs = $managerPrograms->run();

        $auth = new UsernameSession();
        $auth = $auth->getContent();
        
        Template::setAssign([
                "auth"     => $auth,
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
