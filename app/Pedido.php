<?php

namespace App;


use Eloquent;

/**
 * App\Pedido
 *
 */
class Pedido extends Eloquent {

	public $fillable = [
		'nombre',
		'email',
		'producto',
	];

	public static function guardarNuevo(array $data) {

		static::create($data);

	}

	/**
	 * @param static $query
	 */
	public function scopeNuevos($query){

		return $query->where('nuevo', 1);

	}

}
