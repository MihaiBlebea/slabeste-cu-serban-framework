<?php

namespace App\Controllers;

use Framework\Alias\Template;
use App\Controllers\Controller;
use App\Models\User;
use App\Models\Account;
use App\Models\Program;
use Framework\Router\Request;
use App\Managers\OwnedProgramsManager;

class MembershipController
{
    public function index()
    {
        $manager = new OwnedProgramsManager();
        Template::setAssign([
            "programs" => $manager->run()
        ])->setDisplay("home/index.tpl");
    }

    // private function filterOwnedPrograms()
    // {
    //     $programs = new Program();
    //     $programs = $programs->where('id', '>', 0)->where('program_status', '=', 1)->select('array');
    //
    //     if(Login::isLogin())
    //     {
    //         $auth = Login::getLoggedUser();
    //         $account = new Account();
    //         $accounts = $account->where('username', '=', $auth)->select("array");
    //
    //         $result = array();
    //         foreach($programs as $program)
    //         {
    //             if(in_array($program['program_tag'], array_column($accounts, "program_tag")))
    //             {
    //                 $program['owned'] = 1;
    //             } else {
    //                 $program['owned'] = 0;
    //             }
    //             array_push($result, $program);
    //         }
    //         return $result;
    //     }
    // }

    public function program($program, $lesson = null)
    {
        $chapters = require_once('../config/' . $program . '.php');

        if(gettype($lesson) !== 'string')
        {
            $path = $chapters[0]['pages'][0]['path'];
        } else {
            $path =  $program . "/" . $lesson;
        }

        $filteredPrograms = $this->filterOwnedPrograms();

        $this->smarty->assign([
            "chapters" => $chapters,
            "programs" => $filteredPrograms
        ]);
        $this->smarty->display("programs/" . $path . ".tpl");
    }
}
