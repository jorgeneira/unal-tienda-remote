<?php

namespace App\Providers;

use App\Http\ViewComposers\CatalogoViewComposer;
use Illuminate\Support\ServiceProvider;

class ViewsServiceProvider extends ServiceProvider {
	/**
	 * Register bindings in the container.
	 *
	 * @return void
	 */
	public function boot() {

		// Using class based composers...
		view()->composer('partials.catalogo', CatalogoViewComposer::class);

	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register() {
		//
	}
}