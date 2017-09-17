<?php

namespace App\Controllers;

use Framework\Alias\Template;

class AdminController
{
    public function index()
    {
        Template::setDisplay("admin/index.tpl");
    }

}
