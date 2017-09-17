<?php

namespace App\Emails;

use Framework\Interfaces\EmailInterface;
use Framework\Injectables\Injector;

class RecoverPasswordEmail implements EmailInterface
{
	public static function send($payload)
	{
		$config = Injector::resolve("Config");

		$email = Injector::resolve("Email");
		$email->subject("Recupereaza-ti parola");
		$email->htmlBody(
			"<h3>Confirma adresa de email</h3>" .
			"<p>Foloseste acest link pentru a confirma ca adresa de email iti apartine si este valida.</p>" .
			"<p>" . $config->getConfig("application")["app_path"] . "/change-password/" . $payload["code"] . "/" . $payload["username"] . "</p>" .
			"<p>Dupa accesarea link-ului vei putea sa resetezi parola.</p>" .
			"<p>Foloseste noua parola impreuna cu username-ul tau " . $payload["username"] . " pentru a accesa contul tau privat.</p>"
		);
		$email->setAddress($payload["email"]);
		$email->send();
	}
}
