<?php

namespace App\Http\Controllers;

use App\Client;
use App\ColdRoomRequest;
use App\Http\Requests\StoreColdRoomRequest;
use Illuminate\Http\Request;

class CuartosController extends Controller {

	public function create() {

		return view('pages.cuartosCreate');

	}

	public function store(StoreColdRoomRequest $request) {

		$cliente = $request->input('cliente');
		$pedido = $request->input('pedido');

		Client::create($cliente)->coldRoomRequests()->create($pedido);

		return view('pages.cuartosCreate', ['posted' => true]);

	}

	/**
	 * Display a listing of the resource in the API.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function apiIndex() {

		return ColdRoomRequest::nuevos()->get();

	}

	/**
	 * Return details for the given request.
	 *
	 * @param $requestID
	 * @return \Illuminate\Http\Response
	 */
	public function apiShow($requestID) {

		return ColdRoomRequest::with('client')->findOrFail($requestID);

	}

	/**
	 * Display a listing of the resource in the API.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function apiUpdate(Request $request) {

		$this->validate($request, ['pedidos' => 'required']);

		$pedidos = $request->input('pedidos');

		ColdRoomRequest::whereIn('id', $pedidos)->update(['leido' => 1]);

		return 1;

	}


}
