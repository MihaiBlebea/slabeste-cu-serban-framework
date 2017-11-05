<?php

namespace App\Managers;

use Framework\Managers\Manager;
use Framework\Interfaces\ManagerInterface;
use App\Models\Account;

class ChangeDatabaseManager implements ManagerInterface
{
	public function run($payload)
	{	
		$account = new Account();
		$accounts = $account->selectAll();

		foreach($accounts as $index => $value)
		{
			$value->where("id", "=", $value->id)->update([
				"program_tag" => str_replace("_", "-", $value->program_tag)
			]);
		}
	}
}
