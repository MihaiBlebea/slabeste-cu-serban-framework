<?php

namespace App\Emails;

use Framework\Interfaces\EmailInterface;
use Framework\Injectables\Injector;

class SubscriptionSuccessEmail implements EmailInterface
{
	public static function send($message)
	{
		$email = Injector::resolve("Email");
		$email->subject("Subject here");
		$email->htmlBody(
			"<h3>Hey Boss</h3>" .
			"<p>Good news... A new subscription has been sucessfully charged.</p>" .
			"<p>More informations: </p>" .
			"<ul>" .
				"<li><strong>Client ID: </strong> " . $payload["customer_id"] . "</li>" .
				"<li><strong>Username: </strong> " . $payload["username"] . "</li>" .
				"<li><strong>Program tag: </strong> " . $payload["tag"] . "</li>" .
			"</ul><br />" .
			"<p>Have a good one,</p>" .
			"<p>Echipa Slabeste Cu Serban</p>"
		);
		$email->setAddress("mihaiserban.blebea@gmail.com");
		$email->send();
	}
}
