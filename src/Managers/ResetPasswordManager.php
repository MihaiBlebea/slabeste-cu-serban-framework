<?php

namespace App\Managers;

use Framework\Managers\Manager;
use Framework\Interfaces\ManagerInterface;
use Framework\Injectables\Injector;
use Framework\Factory\EmailFactory;

class ResetPasswordManager implements ManagerInterface
{
	private $app_path;

	private $user;

	private $hashPassword;

	private $password;

	public function run($payload)
	{
		$this->user = $payload["user"];

		$this->password = $payload["password"];

		$this->hashPassword = $this->user->hashPassword($this->password);

		$this->user->where("username", "=", $this->user->username)->update([
			"password" => $this->hashPassword
		]);

		// Get the app_link from Config
		$config = Injector::resolve("Config");
		$this->app_path = $config->getConfig("application")["app_path"];

		// Send the NEW password to the user via email
		$this->sendConfirmationEmail();
	}

	private function sendConfirmationEmail()
	{
		$email = EmailFactory::build("RecoverPasswordConfirmation");
		$email->send([
			"first_name"   => $this->user->first_name,
			"last_name"    => $this->user->last_name,
			"username"     => $this->user->username,
			"new_password" => $this->password,
			"login_link"   => $this->app_path . "/login",
			"email"        => $this->user->email
		]);
	}
}
