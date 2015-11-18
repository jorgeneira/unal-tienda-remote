<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

	public $fillable = [
		'nombre',
		'email',
		'ciudad',
		'compania'
	];

	public function coldRoomRequests() {

		return $this->hasMany(ColdRoomRequest::class);

	}


}
