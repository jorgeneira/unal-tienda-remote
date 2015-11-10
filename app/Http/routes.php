<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','HomeController@index');

Route::resource('pedido', 'PedidosController');

Route::group(['prefix' => 'api'], function(){
	Route::get('pedidos','PedidosController@apiIndex');
	Route::post('pedidos','PedidosController@apiUpdate');
});