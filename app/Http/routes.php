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

Route::get('/','StaticPagesController@index');

Route::get('nuestra-empresa', 'StaticPagesController@nuestraEmpresa');


Route::get('cuartos-frios-a-medida', 'CuartosController@create');
Route::post('cuartos-frios-a-medida', 'CuartosController@store');

Route::get('cocinas-a-medida', 'CocinasController@create');
Route::post('cocinas-a-medida', 'CocinasController@store');

Route::group(['prefix' => 'api'], function(){

	Route::get('providers/cold-room','ProvidersController@getRoomsProviders');

	Route::get('cold-room-requests/{requestID}','CuartosController@apiShow');

	Route::get('cold-room-requests','CuartosController@apiIndex');

	Route::post('cold-room-requests','CuartosController@apiUpdate');



	Route::post('providers/kitchen','ProvidersController@getKitchensProviders');

	Route::get('kitchen-requests/{requestID}','CocinasController@apiShow');

	Route::get('kitchen-requests','CocinasController@apiIndex');

	Route::post('kitchen-requests','CocinasController@apiUpdate');

});