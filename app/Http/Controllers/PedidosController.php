<?php

namespace App\Http\Controllers;

use App\Pedido;
use Illuminate\Http\Request;
use App\Http\Requests;

class PedidosController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {



	}

	/**
	 * Display a listing of the resource in the API.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function apiIndex() {

		return Pedido::nuevos()->get();

	}

	/**
	 * Display a listing of the resource in the API.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function apiUpdate(Request $request) {

		$this->validate($request, ['pedidos' => 'required']);

		$pedidos = $request->input('pedidos');

		Pedido::whereIn('id', $pedidos)->update(['nuevo' => 0]);

		return 1;

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {

		return view('pedidoCreate');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		Pedido::guardarNuevo($request->input('pedido'));

		return redirect()->back()->with(['mensaje' => 'Pedido Recibido']);

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}
