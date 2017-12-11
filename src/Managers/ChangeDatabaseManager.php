<?php

namespace App\Managers;

use Framework\Managers\Manager;
use Framework\Interfaces\ManagerInterface;
use App\Models\Account;
use App\Models\Transaction;

class ChangeDatabaseManager implements ManagerInterface
{
	public function run($payload)
	{
		$account = new Account();
		$accounts = $account->selectAll();

		foreach($accounts as $index => $value)
		{
			if(strpos($value->program_tag, "_") !== false)
			{
				$value->where("id", "=", $value->id)->update([
					"program_tag" => str_replace("_", "-", $value->program_tag)
				]);
			}
		}

		$trans = new Transaction();
		$trans = $trans->selectAll();

		foreach($trans as $index => $tran)
		{
			if(strpos($tran->program_tag, "_") !== false)
			{
				$tran->where("id", "=", $tran->id)->update([
					"program_tag" => str_replace("_", "-", $tran->program_tag)
				]);
			}
		}
	}
}
