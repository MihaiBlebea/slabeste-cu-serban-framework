<?php

namespace App\Rules;

use Framework\Interfaces\RouterRuleInterface;
use Framework\Injectables\Injector;
use Framework\RouterRules\Rule;
use Framework\Sessions\UsernameSession;
use App\Models\Account;

class AdminRule extends Rule implements RouterRuleInterface
{
	public function apply($params = null)
	{
		$session = new UsernameSession();

		$account = new Account();
		$account = $account->where("username", "=", $session->getContent())
						   ->where("program_tag", "=", "admin")
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
