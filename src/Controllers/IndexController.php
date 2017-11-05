<?php

namespace App\Controllers;

use App\Managers\ChangeDatabaseManager;
use Framework\Router\Request;

class IndexController
{
    public function index()
    {
        $this->smarty->display("landing/index.tpl");
    }

    public function updateAccounts(Request $request = null)
    {
        if($request !== null)
        {
            if($request->out("code") == 430043)
            {
                $manager = new ChangeDatabaseManager();
                $manager->run("");
                dd("done");
            }
        }
        dd("Please insert the admin code");
    }
}
