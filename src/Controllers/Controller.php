<?php

namespace InstaRouter\Controllers;

use InstaRouter\TemplateEngine;

class Controller
{
    public $smarty;

    public function __construct()
    {
        $this->smarty = new TemplateEngine();
    }
}
