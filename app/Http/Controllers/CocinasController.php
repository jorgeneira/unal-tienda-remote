<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CocinasController extends Controller {

    public function create() {

        $currentPage = 'cocinas';

        return view('pages.cocinasCreate', compact('currentPage'));

    }

    public function store(Request $request) {
        return $request->all();
    }

}
