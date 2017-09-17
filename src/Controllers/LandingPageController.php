<?php

namespace App\Controllers;

use Framework\Alias\Template;

class LandingPageController
{
    public function landing()
    {
        Template::setDisplay("landing/index.tpl");
    }

    public function notFound()
    {
        Template::setDisplay("misc/error.tpl");
    }
}
