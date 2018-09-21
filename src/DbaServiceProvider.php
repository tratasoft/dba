<?php

namespace TrataSoft\Dba;

use Illuminate\Support\ServiceProvider;

class DbaServiceProvider extends ServiceProvider
{
	/**
	 * Perform post-registration booting of services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadRoutesFrom(__DIR__.'/../routes/api.php');
		$this->loadRoutesFrom(__DIR__.'/../routes/web.php');

		$this->loadViewsFrom(__DIR__.'/../resources/views', 'dba');
	}

	/**
	 * Register bindings in the container.
	 *
	 * @return void
	 */
	public function register()
	{

	}
}