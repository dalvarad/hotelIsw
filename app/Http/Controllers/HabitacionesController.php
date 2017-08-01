<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Habitacion;
use Illuminate\Support\Facades\Session;
use DB;

class HabitacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habitaciones = DB::table('habitaciones')

                    ->join('tipohabitaciones', 'tipohabitaciones.id', '=', 'habitaciones.id_tipo')
                    ->join('estadohabitaciones', 'estadohabitaciones.id', '=', 'habitaciones.id_estado')

                    ->select('habitaciones.*', 'tipohabitaciones.descripcion', 'tipohabitaciones.caracteristicas', 'tipohabitaciones.valor', 'tipohabitaciones.type', 'estadohabitaciones.estado')
                    ->orderBy('habitaciones.id','ASC')
                    ->get();

        return view('admin.habitaciones.index')->with('habitaciones', $habitaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lista_tipo = DB::table('tipohabitaciones')
                            ->orderBy('id')
                            ->lists('type', 'id' );


        $lista_estado = DB::table('estadohabitaciones')
                    ->orderBy('id')
                    ->lists('estado', 'id' );

      //  dd($lista_users);

        return view('admin.habitaciones.create')->with('lista_tipo', $lista_tipo)->with('lista_estado',$lista_estado);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $habitacion = new Habitacion($request->all());

        $habitacion->save();

        Session::flash('message_success', "Se ha registrado la habitación Nº $habitacion->numero Existosamente!");
        return redirect(route('admin.habitaciones.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $habitacion = Habitacion::find($id);

        $lista_tipo = DB::table('tipohabitaciones')
                            ->orderBy('id')
                            ->lists('type', 'id' );


        $lista_estado = DB::table('estadohabitaciones')
                    ->orderBy('id')
                    ->lists('estado', 'id' );

        return view('admin.habitaciones.edit')->with('habitacion', $habitacion)->with('lista_tipo', $lista_tipo)->with('lista_estado', $lista_estado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $habitacion = Habitacion::find($id);
        $habitacion->fill($request->all());
        $habitacion->save();

        Session::flash('message_success', "Se ha modificado la habitación $habitacion->numero Exitosamente!");
        return redirect(route('admin.habitaciones.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $habitacion = Habitacion::find($id);
        $habitacion->delete();

        Session::flash('message_danger', "Se ha eliminado la habitacion $habitacion->numero Exitosamente!");
        return redirect(route('admin.habitaciones.index'));
    }
}