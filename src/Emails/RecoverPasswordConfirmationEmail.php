<?php

namespace App\Emails;

use Framework\Interfaces\EmailInterface;
use Framework\Injectables\Injector;

class RecoverPasswordConfirmationEmail implements EmailInterface
{
	public static function send($payload)
	{
		$email = Injector::resolve("Email");
		$email->subject("Parola ta a fost schimbata");
		$email->htmlBody(
			"<h3>Buna " . $payload["first_name"] . " " . $payload["last_name"] . "!</h3>" .
			"<p>Parola ta pentru Slabeste Cu Serban Cercul Intern, a fost resetata cu succes.</p>" .
			"<p>Te rugam sa salvezi aceasta parola intr-un loc sigur.</p>" .
			"<p>Noile tale date de conectare sunt: </p>" .
			"<ul>" .
				"<li style='margin-bottom:20px;'><strong>Username: </strong>" . $payload["username"] . "</li>" .
				"<li style='margin-bottom:20px;'><strong>Parola: </strong>" . $payload["new_password"] . "</li>" .
			"</ul>" .
			"<p>Logheaza-te in contul tau privat folosind <a target='_blank' href='" . $payload["login_link"] . "'>acest link</a> sau direct de pe <a target='_blank' href='http://www.slabestecuserban.ro'>pagina principala</a> apasand pe butonul de '<strong>Login</strong>'</p><br />" .
			"<p>Iti dorim o zi cat mai placuta,</p>" .
			"<p>Echipa Slabeste Cu Serban</p>"
		);
		$email->setAddress($payload["email"]);
		$email->send();
	}
}
