<?php

namespace App\Emails;

use Framework\Interfaces\EmailInterface;
use Framework\Injectables\Injector;

class SubscriptionFailEmail implements EmailInterface
{
	public static function send($payload)
	{
		$email = Injector::resolve("Email");
		$email->subject("Subscription Fail for member");
		$email->htmlBody(
			"<h3>Hey Boss</h3>" .
			"<p>I'm sorry to bring youbad news but a subscription payment has failed.</p>" .
			"<p>More informations: </p>" .
			"<ul>" .
				"<li><strong>Client ID: </strong> " . $payload["customer_id"] . "</li>" .
				"<li><strong>Username: </strong> " . $payload["username"] . "</li>" .
				"<li><strong>Program tag: </strong> " . $payload["tag"] . "</li>" .
				"<li><strong>Billing Cycle: </strong> " . $payload["billing_cycle"] . "</li>" .
			"</ul><br />" .
			"<p>Have a good one,</p>" .
			"<p>Echipa Slabeste Cu Serban</p>"
		);
		$email->setAddress("mihaiserban.blebea@gmail.com");
		$email->send();
	}
}
