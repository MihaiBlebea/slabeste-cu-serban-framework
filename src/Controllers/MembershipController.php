<?php

namespace InstaRouter\Controllers;

use InstaRouter\Controllers\Controller;
use InstaRouter\Model\User;
use InstaRouter\Model\Account;
use InstaRouter\Model\Program;
use InstaRouter\Router\Request;
use InstaRouter\Auth\Login;

class MembershipController extends Controller
{
    public function index()
    {
        $filteredPrograms = $this->filterOwnedPrograms();

        $this->smarty->assign([
            "programs" => $filteredPrograms
        ]);
        $this->smarty->display("home/index.tpl");
    }

    private function filterOwnedPrograms()
    {
        $programs = new Program();
        $programs = $programs->where('id', '>', 0)->where('program_status', '=', 1)->select('array');

        if(Login::isLogin())
        {
            $auth = Login::getLoggedUser();
            $account = new Account();
            $accounts = $account->where('username', '=', $auth)->select("array");

            $result = array();
            foreach($programs as $program)
            {
                if(in_array($program['program_tag'], array_column($accounts, "program_tag")))
                {
                    $program['owned'] = 1;
                } else {
                    $program['owned'] = 0;
                }
                array_push($result, $program);
            }
            return $result;
        }
    }

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
