<?php

namespace App\Listeners;

use Framework\Events\Subject;
use Framework\Interfaces\ListenerInterface;
use Framework\Factory\EmailFactory;

class NewClientEmailToAdminListener implements ListenerInterface
{
	public function listen(Subject $subject)
	{
		$email = EmailFactory::build("NewClientToAdmin");
		$email->send($subject->getPayload());
	}
}
