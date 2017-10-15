<?php

namespace App\Rules;

use Framework\Interfaces\RouterRuleInterface;
use Framework\Injectables\Injector;
use Framework\RouterRules\Rule;
use Framework\Sessions\UsernameSession;
use Framework\Alias\Router;

class LoginRule extends Rule implements RouterRuleInterface
{
    public function apply($params = null)
    {
        $session = new UsernameSession();
        
        if($session->getContent() !== null)
        {
            $this->next();
        } else {
            $this->fail();
        }
    }

    public function fail()
    {
        Router::goToUrl("login");
        // dd("failed rule => redirect to login");
    }
}
