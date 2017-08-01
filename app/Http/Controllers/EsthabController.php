<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Estadohabitacion;
use Illuminate\Support\Facades\Session;

class EsthabController extends Controller
{
    public function index()
    {
    	$estados = Estadohabitacion::orderBy('id', 'ASC')->paginate(5);
        return view('admin.estadohabitaciones.index')->with('estados', $estados);
    }

    public function create()
    {
    	return view('admin.estadohabitaciones.create');
    }

    public function store(Request $request)
    {
    	$estado = new Estadohabitacion($request->all());
        $estado->save();

        Session::flash('message_success', "Se ha registrado el estado de habitación $estado->estado Exitosamente!");
        return redirect(route('admin.estadohabitaciones.index'));
    }

    public function show($id)
    {
    	//
    }

    public function edit($id)
    {
    	$estado = Estadohabitacion::find($id);
        return view('admin.estadohabitaciones.edit')->with('estado', $estado);
    }

    public function update(Request $request, $id)
    {
    	$estado = Estadohabitacion::find($id);
    
        $estado->fill($request->all());
        $estado->save();
        
        Session::flash('message_success', "Se ha modificado el estado de habitación $estado->id Exitosamente!");
        return redirect(route('admin.estadohabitaciones.index'));
    }

    public function destroy($id)
    {
    	$estado = Estadohabitacion::find($id);
        $estado->delete();

        Session::flash('message_danger', "Se ha eliminado el estado de habitación $estado->id Exitosamente!");
        return redirect(route('admin.estadohabitaciones.index'));
    }
}
