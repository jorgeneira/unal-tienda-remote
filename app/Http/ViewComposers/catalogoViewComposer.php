<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

class CatalogoViewComposer {


	/**
	 * Bind data to the view.
	 *
	 * @param  View $view
	 * @return void
	 */
	public function compose(View $view) {

		$catalogo = [
			[
				'type' => 'cocina',
			],
			[
				'type' => 'cuarto',
			],
			[
				'type' => 'cocina',
			],
			[
				'type' => 'cuarto',
			],
			[
				'type' => 'cocina',
			],
			[
				'type' => 'cuarto',
			],
			[
				'type' => 'cocina',
			],
			[
				'type' => 'cuarto',
			],
		];

		$view->with(compact('catalogo'));
	}
}