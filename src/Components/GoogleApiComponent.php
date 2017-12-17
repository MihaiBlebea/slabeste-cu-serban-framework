<?php 

namespace App\Components;

use Framework\Injectables\Injector;
use Framework\Interfaces\ComponentInterface;

class GoogleApiComponent extends Injector implements ComponentInterface
{
	public function boot()
	{
		self::register("NewComponent", function() {
			$comp = new New();
			return $comp;
		});
	}

	public function run($instance)
	{

	}
}