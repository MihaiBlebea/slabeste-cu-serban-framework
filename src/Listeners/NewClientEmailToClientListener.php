<?php

namespace App\Listeners;

use Framework\Events\Subject;
use Framework\Interfaces\ListenerInterface;
use Framework\Factory\EmailFactory;

class NewClientEmailToClientListener implements ListenerInterface
{
	public function listen(Subject $subject)
	{
		$email = EmailFactory::build("NewClientToClient");
		$email->send($subject->getPayload());
	}
}
