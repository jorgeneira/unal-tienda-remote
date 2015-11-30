<?php

namespace App;

class ColdRoomRequest extends \Eloquent {

	public $fillable = [
		'largo',
		'ancho',
		'alto',
		'temperatura',
		'producto',
		'masa',
	];

	/**
	 * @param static $query
	 */
	public function scopeNuevos($query){

		return $query->where('leido', 0);

	}

	public function client() {

		return $this->belongsTo(Client::class);
	}

	public function getAltoAttribute($valor){

		return str_replace('.', ',', $valor);
	}

	public function getAnchoAttribute($valor){

		return str_replace('.', ',', $valor);
	}

	public function getLargoAttribute($valor){

		return str_replace('.', ',', $valor);
	}

}
