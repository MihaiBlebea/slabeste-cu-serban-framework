<?php

namespace App\Rules;

use Framework\Interfaces\RouterRuleInterface;
use Framework\Injectables\Injector;
use Framework\RouterRules\Rule;
use App\Models\Account;
use Framework\Sessions\UsernameSession;
use Framework\Alias\Router;

class ProgramRule extends Rule implements RouterRuleInterface
{
	public function apply($params = null)
	{
		$request = Injector::resolve("Request");
        $params = $request->getArray();
		$program = $params[count($params)-2];

        $session = new UsernameSession();
		$account = new Account();
		$account = $account->where("username", "=", $session->getContent())
						   ->where("program_tag", "=", $program)
						   ->selectOne();
		if($account !== false)
		{
			$this->next();
		} else {
			$this->fail();
		}
	}

	public function fail()
	{
		Router::goToUrl("login");
	}
}
