<?php

namespace App\Emails;

use Framework\Interfaces\EmailInterface;
use Framework\Injectables\Injector;

class NewClientToClientEmail implements EmailInterface
{
	public static function send($message)
	{
		$config = Injector::resolve("Config");
		$app_path = $config->getConfig('application')['app_path'];

		$email = Injector::resolve("Email");
		$email->subject("Bine ai venit! Datele tale de conectare");
		$email->htmlBody(
			"<h3>Bine ai venit " . $message['firstName'] . " " . $message['lastName'] . "</h3>" .
			"<p>Tocmai ai achizitionat programul <strong>" . $message['programName'] . "</strong></p>" .
			"<p>Foloseste datele tale de conectare pentru a accesa zona privata a site-ului:</p>" .
			"<p><strong>Username:</strong> " . $message['username'] . "</p>" .
			"<p><strong>Parola:</strong> " . $message['password'] . "</p>" .
			"<p><a href='" . $app_path . "/login' target='_blank'>Intra pe acest link pentru a introduce datele tale private</a></p>" .
			"<p>De asemenea poti accesa zona privata si din meniul principal al site-ului SlabesteCuSerban.ro, folosind butonul de LOGIN.</p><br />" .
			"<p>Iti dorim mult succes,</p>" .
			"<p>Echipa Slabeste Cu Serban</p>"
		);
		$email->setAddress($message['email']);
		$email->send();
	}
}
