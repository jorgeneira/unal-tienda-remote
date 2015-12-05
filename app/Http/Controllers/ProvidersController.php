<?php

namespace App\Http\Controllers;

use App\ColdRoomProvider;
use App\Stock;
use Illuminate\Http\Request;

class ProvidersController extends Controller {

    public function getRoomsProviders() {

        return ColdRoomProvider::all();

    }

    public function getKitchensProviders(Request $request) {

        $productos = $request->input('productos');

        return Stock::whereIn('referencia', $productos)->get()->keyBy('referencia');

    }

}
