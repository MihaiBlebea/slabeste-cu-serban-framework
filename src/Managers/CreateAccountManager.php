<?php

namespace App\Managers;

use Framework\Managers\Manager;
use Framework\Interfaces\ManagerInterface;
use App\Models\Account;

class CreateAccountManager implements ManagerInterface
{
	public function run($payload)
	{
		if($payload["program_tag"] == "fit-si-supla")
		{
			$tags = ["fit-si-supla-1", "fit-si-supla-2", "fit-si-supla-3"];

			foreach($tags as $tag)
			{
				$account = new Account();
				$account->create([
					'username'    => $payload["username"],
					'password'    => $payload["password"],
					'program_tag' => $tag
				]);
			}

		} else {
			$account = new Account();
			$account->create([
				'username'    => $payload["username"],
				'password'    => $payload["password"],
				'program_tag' => $payload["program_tag"]
			]);
		}
	}
}
