<?php

namespace App\Components;

use Framework\Injectables\Injector;
use Framework\Interfaces\ComponentInterface;
use Carbon\Carbon;
use App\GoogleApi\GoogleApi;

class GoogleApiComponent extends Injector implements ComponentInterface
{
	public function boot()
	{
		self::register("GoogleApi", function() {
			$config = Injector::resolve("Config");
			$carbon = new Carbon();
			$google = new GoogleApi($config, $carbon);
			return $google;
		});
	}

	public function run($instance)
	{

	}
}
