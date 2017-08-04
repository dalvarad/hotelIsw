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

Route::get('/date', function () {
    return view('date');
});

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

Route::get('habitaciones/{id}/mostrar',[
		'uses' =>'HabitacionesController@mostrar',
		'as' => 'habitaciones.mostrar'
]);

/*Generador PDF*/
Route::get('pdf',function(){
		$users = App\User::all();
		$pdf = PDF::loadView('admin/users/pdf', ['users' => $users]);
		return $pdf->download('archivo.pdf');
});

/*Usa el controlador DatosController para mostrar datos de las habitaciones en la base de datos*/
Route::get('contacto', function (){
	return view('contacto/index');
});


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    
	Route::get('/', ['as' => 'admin.index', function (){
		return view('welcome');

	}]);

       
	/*rutas clientes*/
	Route::resource('clientes','ClienteController');
	Route::get('clientes/{id}/destroy',[
		'uses' =>'ClienteController@destroy',
		'as' => 'admin.clientes.destroy'
	]);
	Route::get('pdfclientes',function(){
		$cliente = App\Cliente::all();
		$pdf = PDF::loadView('admin.clientes.pdf', ['cliente' => $cliente]);
		return $pdf->download('clientes.pdf');
	});

	Route::group(['middleware' => 'admin'], function(){

		/*rutas users*/
		Route::resource('users','UsersController');
		Route::get('users/{id}/destroy', [
			'uses' => 'UsersController@destroy',
			'as' => 'admin.users.destroy'
		]);

	 	/*ruta tipo usuario*/ 
	    Route::resource('tipo','TipoController');
		Route::get('tipo/{id}/destroy', [
			'uses' => 'TipoController@destroy',
			'as' => 'admin.tipo.destroy'
		]);  

	}); 
/*----------------------------------------------------------------------------------------------*/
	Route::group(['middleware' => 'admin'], function(){
		/*rutas Datos de habitaciones*/
		/*rutas tipo de habitaciones*/
		Route::resource('tipohabitaciones','TipohabController');
		Route::get('tipohabitaciones/{id}/destroy', [
			'uses' => 'TipohabController@destroy',
			'as' => 'admin.tipohabitaciones.destroy'
		]);

		/*rutas estado de habitaciones*/
		Route::resource('estadohabitaciones','EsthabController');
		Route::get('estadohabitaciones/{id}/destroy', [
			'uses' => 'EsthabController@destroy',
			'as' => 'admin.estadohabitaciones.destroy'
		]);
	}); 

	/*rutas habitaciones*/
	Route::resource('habitaciones','HabitacionesController');
	Route::get('habitaciones/{id}/destroy', [
		'uses' => 'HabitacionesController@destroy',
		'as' => 'admin.habitaciones.destroy'
	]);
	/*fin ruta de habitaciones*/
	
/*----------------------------------------------------------------------------------------------*/

	/*rutas reservas*/
	Route::resource('reservas', 'ReservasController');
	Route::get('reservas/{id}/destroy', [
		'uses' => 'ReservasController@destroy',
		'as' => 'admin.reservas.destroy'
	]);
	Route::get('pdfreservas',function(){
		$reservas = DB::table('reservas')

                    ->join('users', 'users.id', '=', 'reservas.id_us')
                    ->join('habitaciones', 'habitaciones.id', '=', 'reservas.id_ha')
                    ->join('clientes', 'clientes.id', '=', 'reservas.id_cl')

                    ->select('reservas.*', 'users.name', 'habitaciones.valor', 'clientes.nombre_cliente')
                    ->orderBy('reservas.id','DESC')
                    ->get();
		$pdf = PDF::loadView('admin.reservas.pdf', ['reservas' => $reservas]);
		return $pdf->download('reservas.pdf');
	});
});
/*FIN RUTAS ADMINISTRADOR*/

Route::group(['prefix' => 'recepcionista'],function(){
	Route::resource('clientes','ClienteController');

});

Route::auth();

Route::get('/home', 'HomeController@index');
