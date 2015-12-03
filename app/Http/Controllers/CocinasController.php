<?php

namespace App\Http\Controllers;

use App\Client;
use App\KitchenRequest;
use Illuminate\Http\Request;
use App\Http\Requests;

class CocinasController extends Controller {

    public function create() {

        $currentPage = 'cocinas';

        return view('pages.cocinasCreate', compact('currentPage'));

    }

    public function store(Request $request) {

        $currentPage = 'cocinas';

        $pedido = new KitchenRequest($request->input('pedido'));

        $pedido->secciones = $request->input('secciones');

        Client::create($request->input('cliente'))->kitchenRequests()->save($pedido);

        return view('pages.cocinasCreate', ['posted' => true]+compact('currentPage'));

    }
    /**
     * Display a listing of the resource in the API.
     *
     * @return \Illuminate\Http\Response
     */
    public function apiIndex() {

        return KitchenRequest::nuevos()->get();

    }

    /**
     * Return details for the given request.
     *
     * @param $requestID
     * @return \Illuminate\Http\Response
     */
    public function apiShow($requestID) {

        return KitchenRequest::with('client')->findOrFail($requestID);

    }

    /**
     * Display a listing of the resource in the API.
     *
     * @return \Illuminate\Http\Response
     */
    public function apiUpdate(Request $request) {

        $this->validate($request, ['pedidos' => 'required']);

        $pedidos = $request->input('pedidos');

        KitchenRequest::whereIn('id', $pedidos)->update(['leido' => 1]);

        return 1;

    }


}
