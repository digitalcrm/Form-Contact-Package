<?php

namespace Digitalcrm\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
	public function boot()
	{
		// load route for package
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
		//load views $this->loadViewsFrom(__DIR__.'/path','package_name');
		$this->loadViewsFrom(__DIR__.'/views','contact');
		//load migrations $this->loadMigrationsFrom(__DIR__.'/path/to/migrations');
		$this->loadMigrationsFrom(__DIR__.'/database/migrations');
		//mail configuration for dynamic mail
		$this->mergeConfigFrom(
			__DIR__.'/config/contact.php', 
			'contact'
		);
		$this->publishes([
			__DIR__.'/config/contact.php' => config_path('contact.php'),
		]);
	}

	public function register()
	{

	}


} 