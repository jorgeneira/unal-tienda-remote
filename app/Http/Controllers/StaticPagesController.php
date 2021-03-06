<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller {

	public function index() {

		$currentPage = 'inicio';

		return view('pages.home', compact('currentPage'));

	}

	public function nuestraEmpresa() {

		$currentPage = 'empresa';

		return view('pages.empresa', compact('currentPage'));

	}

}
