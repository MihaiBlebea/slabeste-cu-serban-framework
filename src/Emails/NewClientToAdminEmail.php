<?php

namespace App\Emails;

use Framework\Interfaces\EmailInterface;
use Framework\Injectables\Injector;

class NewClientToAdminEmail implements EmailInterface
{
	public static function send($message)
	{
		$email = Injector::resolve("Email");
		$email->subject("New client for Slabeste Cu Serban");
		$email->htmlBody(
			"<h3>A new user on the site</h3>" .
			"<p>Name: " . $message['firstName'] . " " . $message['lastName'] . "</p>" .
			"<p>Bought: " . $message['programName'] . " paying " . $message['programPrice'] . "RON</p>" .
			"<p>Have a nice day</p>"
		);
		$email->setAddress("mihaiserban.blebea@gmail.com");
		$email->send();
	}
}
