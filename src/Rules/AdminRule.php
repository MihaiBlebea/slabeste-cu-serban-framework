<?php

namespace App\Rules;

use Framework\Interfaces\RouterRuleInterface;
use Framework\Injectables\Injector;
use Framework\RouterRules\Rule;
use Framework\Sessions\UsernameSession;

class AdminRule extends Rule implements RouterRuleInterface
{
	public function apply($params = null)
	{
		$session = new UsernameSession();
		$session->setContent("admin");
		dd($session->getContent());
		if(true)
		{
			$this->next();
		}
	}

	public function fail()
	{
		dd("failed rule");
	}
}
