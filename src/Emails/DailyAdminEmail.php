<?php

namespace App\Emails;

use Framework\Interfaces\EmailInterface;
use Framework\Injectables\Injector;

class DailyAdminEmail implements EmailInterface
{
	public static function send($message)
	{
		$email = Injector::resolve("Email");
		$email->subject("Daily Email Slabeste Cu Serban");
		$email->htmlBody(
			"This is the message: " . $message
		);
		$email->setAddress("mihaiserban.blebea@gmail.com");
		$email->send();
	}
}
