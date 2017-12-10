<?php

namespace App\Managers;

use Framework\Managers\Manager;
use Framework\Interfaces\ManagerInterface;
use App\Models\Program;
use App\Models\Transaction;

class NrOfProgramSoldManager implements ManagerInterface
{
	public function run($payload)
	{
		// Get all programs from database
		if($payload == false)
		{
			$programs = $this->getAllActivePrograms();
		} else {
			$programs = $payload;
		}

		// Get all transactions associated with each programs
		$transaction = new Transaction();
		foreach($programs as $program)
		{
			$program->sold = $this->getAllTransactionsFor($transaction, $program);
			// $program->sold = $nrSales;
		}
		// Return programs
		return $programs;
	}

	private function getAllActivePrograms()
	{
		$program = new Program();
		return $program->selectAll();
	}

	private function getAllTransactionsFor($transaction, $program)
	{
		$items = $transaction->where('program_tag', '=', $program->program_tag)->select();
		return count($items);
	}
}
