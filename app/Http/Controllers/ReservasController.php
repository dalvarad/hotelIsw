<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ReservaRequest;
use App\Reserva;
use Illuminate\Support\Facades\Session;
use DB;

class ReservasController extends Controller
{
	public function index()
	{
		$reservas = DB::table('reservas')

                    ->join('users', 'users.id', '=', 'reservas.id_us')
                    ->join('habitaciones', 'habitaciones.id', '=', 'reservas.id_ha')
                    ->join('clientes', 'clientes.id', '=', 'reservas.id_cl')

                    ->select('users.name', 'habitaciones.id', 'habitaciones.valor', 'reserva_comienza', 'reserva_termina', 'clientes.nombre_cliente')
                    ->orderBy('id','DESC')
                    ->get();


		return view('admin.reservas.index')->with('reservas', $reservas);
	}

	public function create()
	{
        $lista_habitaciones = DB::table('habitaciones')
                            ->where('estado','desocupada')
                            ->orderBy('valor')
                            ->lists('valor', 'id');


		$lista_clientes = DB::table('clientes')
                    ->orderBy('rut_cliente')
                    ->lists('rut_cliente', 'id');

      //  dd($lista_users);

        return view('admin.reservas.create')->with('lista_habitaciones', $lista_habitaciones)->with('lista_clientes',$lista_clientes);
	}

	public function store(ReservaRequest $request)
	{
		$reservas = new Reserva($request->all());
		$reservas->id_us = \Auth::user()->id;

		$reservas->save();

		Session::flash('message_success', "Se ha registrado la reserva Nº $reservas->id Existosamente!");
        return redirect(route('admin.reservas.index'));
	}
}
