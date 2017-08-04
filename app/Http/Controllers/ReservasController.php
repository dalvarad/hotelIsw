<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ReservasRequest;
use App\Reserva;
use App\User;
use App\Habitacion;
use App\Cliente;
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

                    ->select('reservas.*', 'users.name', 'habitaciones.numero', 'clientes.nombre_cliente')
                    ->orderBy('reservas.id','DESC')
                    ->get();

        /*$consulta2 = DB::table('reservas')

                    ->join('users', 'users.id', '=', 'reservas.id_us')
                    ->join('habitaciones', 'habitaciones.id', '=', 'reservas.id_ha')
                    ->join('clientes', 'clientes.id', '=', 'reservas.id_cl')

                    ->select('reservas.id', 'reserva_comienza', 'reserva_termina')
                    ->orderBy('id','DESC')
                    ->get();*/
        

        return view('admin.reservas.index')->with('reservas', $reservas);
    }

	public function create()
	{
        $lista_habitaciones = DB::table('habitaciones')
                            ->where('id_estado','2')
                            ->orderBy('numero')
                            ->lists('numero', 'id');

		$lista_clientes = DB::table('clientes')
                    ->orderBy('rut_cliente')
                    ->lists('rut_cliente', 'id');

      //  dd($lista_users);

        return view('admin.reservas.create')->with('lista_habitaciones', $lista_habitaciones)->with('lista_clientes',$lista_clientes);
	}

	public function store(ReservasRequest $request)
	{  
		$reservas = new Reserva($request->all());
		$reservas->id_us = \Auth::user()->id;

        $id = $reservas->id_ha;
        $habitacion = Habitacion::find($id);
        /*$ocupada = 1;*/

        /*fill(array('fieldname1' => 'value', 'fieldname2' => 'value'));*/

        $reservas->save();


        $habitacion->fill(array('id_estado' => '1'));
        $habitacion->save();
        

		Session::flash('message_success', "Se ha registrado la reserva Nº $reservas->id Existosamente!");
        return redirect(route('admin.reservas.index'));
	}

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $reservas = Reserva::find($id);

        $lista_habitaciones = DB::table('habitaciones')
                            ->where('id_estado','2')
                            ->orderBy('numero')
                            ->lists('numero', 'id');

        $lista_clientes = DB::table('clientes')
                         ->orderBy('rut_cliente')
                         ->lists('rut_cliente', 'id');

        /*Marcar habitación como desocupada*/
        $id = $reservas->id_ha;
        $habitacion = Habitacion::find($id);
        $habitacion->fill(array('id_estado' => '2'));
        $habitacion->save();

        
        return view('admin.reservas.edit')->with('reservas', $reservas)->with('lista_habitaciones', $lista_habitaciones)->with('lista_clientes', $lista_clientes);
    }

    public function update(ReservasRequest $request, $id)
    {
        $reservas = Reserva::find($id);
        $id = $reservas->id_ha;

        $habitacion = Habitacion::find($id);

        $reservas->fill($request->all());
        $reservas->save();

        $habitacion->fill(array('id_estado' => '1'));
        $habitacion->save();

        Session::flash('message_success', "Se ha modificado la reserva $reservas->id Exitosamente!");
        return redirect(route('admin.reservas.index'));
    }

    public function destroy($id)
    {
        $reserva = Reserva::find($id);
        $reserva->delete();

        Session::flash('message_danger', "Se ha eliminado la reserva $reserva->id Exitosamente!");
        return redirect(route('admin.reservas.index'));
    }
}
