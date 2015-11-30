<?php

namespace App\Http\Controllers;

use App\ColdRoomProvider;
use App\Http\Requests;

class ProvidersController extends Controller {

    public function getRoomsProviders() {

        return ColdRoomProvider::all();

    }

    public function getKitchensProviders() {



    }

}
