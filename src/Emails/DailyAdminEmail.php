<?php

namespace App\Emails;

use Framework\Interfaces\EmailInterface;
use Framework\Injectables\Injector;

class DailyAdminEmail implements EmailInterface
{
	public static function send($payload)
	{
		$message = "<ul>";
		foreach($payload["programs"] as $index => $program)
		{
			$message .= "<li style='margin-bottom:20px;'><strong>" . $index . "</strong>: " . $program["count"] . " programs for " . $program["money"] . " RON</li>";
		}
		$message .= "</ul>";

		$email = Injector::resolve("Email");
		$email->subject("Daily Email Slabeste Cu Serban");
		$email->htmlBody(
			"<h3>This is the daily email for: " . $payload["date"] . "</h3>" .
			"<p>Number of products sold today: <strong>" . $payload["count_products"] . "</strong></p>" .
			"<p>You won: <strong>" . $payload["total_money"] . " RON</strong></p><br />" .
			$message .
			"<br />" .
			"<p>Kind regards,</p>" .
			"<p>Slabeste cu Serban assistant</p>"
		);
		$email->setAddress("mihaiserban.blebea@gmail.com");
		$email->send();
	}
}
