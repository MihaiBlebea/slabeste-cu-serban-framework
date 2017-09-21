<?php

namespace App\Managers;

use Framework\Managers\Manager;
use Framework\Interfaces\ManagerInterface;
use App\Models\User;
use App\Models\Transaction;

class MoneySpentPerUserManager implements ManagerInterface
{
	public function run($users)
	{
		// Get transactions per User
		foreach($users as $user)
		{
			// Get user's transactions
			$userTrans = $this->getTransactions($user);

			// Get the total money
			$sum = $this->sum($userTrans);

			// Add sum in user model
			$user->totalMoney = $sum;
		}
		return $users;
	}

	private function getAllUsers()
	{
		$user = new User();
		return $user->selectAll();
	}

	private function getTransactions(User $user)
	{
		$transaction = new Transaction();
		return $transaction->where("username", "=", $user->username)->select();
	}

	private function sum($userTrans)
	{
		$sum = 0;
		foreach($userTrans as $transaction)
		{
			$sum += $transaction->value;
		}
		return $sum;
	}
}
