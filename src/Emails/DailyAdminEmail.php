<?php

namespace App\Emails;

use Framework\Interfaces\EmailInterface;
use Framework\Injectables\Injector;

class DailyAdminEmail implements EmailInterface
{
	public static function send($payload)
	{

		$message = "<h3>This is the daily email for: " . $payload["date"] . "</h3>" .
		"<p>Number of products sold today: <strong>" . $payload["count_products"] . "</strong></p>" .
		"<p>You won: <strong>" . $payload["total_money"] . " RON</strong></p><br />" .
		"<ul>" .
			foreach($payload["programs"] as $index => $program)
			{
				"<li>" . $index . ": number " . $program["count"] . " for " . $program["money"] . " RON</li>" .
			}
		"</ul>" .
		"<br />" .
		"<p>Kind regards,</p>" .
		"<p>Slabeste cu Serban assistant</p>";
		dd($message);

		$email = Injector::resolve("Email");
		$email->subject("Daily Email Slabeste Cu Serban");
		$email->htmlBody(
			"<h3>This is the daily email for: " . $payload["date"] . "</h3>" .
			"<p>Number of products sold today: <strong>" . $payload["count_products"] . "</strong></p>" .
			"<p>You won: <strong>" . $payload["total_money"] . " RON</strong></p><br />" .
			
			"<br />" .
			"<p>Kind regards,</p>" .
			"<p>Slabeste cu Serban assistant</p>"
		);
		$email->setAddress("mihaiserban.blebea@gmail.com");
		$email->send();
	}
}
