<?php

namespace InstaRouter\Controllers;

use InstaRouter\Controllers\Controller;
use InstaRouter\Database\Worker;
use InstaRouter\Model\User;
use InstaRouter\Factory\ModelFactory;
use InstaRouter\Events\LogUserEvent;

class IndexController extends Controller
{
    public function index()
    {
        $this->smarty->display("landing/index.tpl");
    }

    public function migrate()
    {
        $migrate = new Worker;
        $migrate->migrateAll();
    }
}
