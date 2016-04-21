<?php

namespace Pauldominik\Deploy;

use Illuminate\Support\ServiceProvider;

class DeployServiceProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Perform post-registration booting of services.
	 *
	 * @return void
	 */
	public function boot()
	{

		if (! $this->app->routesAreCached()) {
			require __DIR__.'/routes.php';
		}

		$this->publishes([
			__DIR__.'/views' => resource_path('views/vendor/deploy'),
			__DIR__.'/config/deploy.php' => config_path('deploy.php')
		]);

		$this->loadViewsFrom(__DIR__.'/views', 'deploy');

	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->mergeConfigFrom(__DIR__.'/config/deploy.php', 'deploy');

	}
}
