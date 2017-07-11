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

Route::get('habitaciones',[
	'as'   => 'habitaciones.index',
	'uses' => 'DatosController@index' 
]);

/*Usa el controlador DatosController para mostrar datos de las habitaciones en la base de datos*/
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

	/*rutas habitaciones*/
	Route::resource('habitaciones','HabitacionesController');
	Route::get('habitaciones/{id}/destroy', [
		'uses' => 'HabitacionesController@destroy',
		'as' => 'admin.habitaciones.destroy'
	]);

});





Route::group(['prefix' => 'recepcionista'],function(){
	Route::resource('clientes','ClienteController');

});

Route::auth();

Route::get('/home', 'HomeController@index');
