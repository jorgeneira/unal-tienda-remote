<?php

namespace App\Http\Requests;

class StoreColdRoomRequest extends Request {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'cliente.nombre'     => 'required|string',
			'cliente.ciudad'     => 'required|string',
			'cliente.email'      => 'required|email',
			'cliente.compania'   => 'string',
			'pedido.largo'       => 'required',
			'pedido.ancho'       => 'required',
			'pedido.alto'        => 'required',
			'pedido.temperatura' => 'required',
			'pedido.producto'    => 'required',
			'pedido.masa'        => 'required',
		];
	}
}
