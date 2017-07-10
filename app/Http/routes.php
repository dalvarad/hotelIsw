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

Route::get('/', function () {
    return view('inicio/index');
});

Route::get('quienessomos', function (){
	return view('quienessomos/index');
});

Route::get('hotel', function (){
	return view('hotel/index');
});

Route::get('habitaciones', function (){
	return view('habitaciones/index');
});

Route::get('contacto', function (){
	return view('contacto/index');
});

Route::group(['prefix' => 'admin'], function(){

	/*rutas clientes*/
	Route::resource('clientes','ClienteController');
	Route::get('clientes/{id}/destroy',[
		'uses' =>'ClienteController@destroy',
		'as' => 'admin.clientes.destroy'

		]);

	/*rutas users*/
	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy', [
		'uses' => 'UsersController@destroy',
		'as' => 'admin.users.destroy'
	]);

});





Route::group(['prefix' => 'recepcionista'],function(){
	Route::resource('clientes','ClienteController');

});



/*Rutas de Autentificacion*/
Route::get('admin/auth/login', [
	'uses' => 'Auth\AuthController@getLogin',
	'as' => 'admin.auth.login' 
]);

Route::post('admin/auth/login', [
	'uses' => 'Auth\AuthController@postLogin',
	'as' => 'admin.auth.login' 
]);

Route::get('admin/auth/logout', [
	'uses' => 'Auth\AuthController@getLogout',
	'as' => 'admin.auth.logout' 
]);


