<?php

namespace App\Managers;

use Framework\Managers\Manager;
use Framework\Interfaces\ManagerInterface;
use App\Models\Program;
use Framework\Sessions\UsernameSession;
use App\Models\Account;

class OwnedProgramsManager implements ManagerInterface
{
	public function run($payload = "")
	{
		$programs = $this->getAllPrograms();

        $session = new UsernameSession();
        if($session->getContent() !== null)
        {
			$accounts = $this->getAccounts($session);
            foreach($programs as $program)
            {
                if(in_array($program->program_tag, $accounts))
                {
                    $program->owned = true;
                }
            }

			return $programs;
		}
	}

	private function getAllPrograms()
	{
		$programs = new Program();
		return $programs->selectAll();
	}

	private function getAccounts($session)
	{
		$account = new Account();
		$accounts = $account->where("username", "=", $session->getContent())->select();
		return array_column($accounts, 'program_tag');
	}
}
