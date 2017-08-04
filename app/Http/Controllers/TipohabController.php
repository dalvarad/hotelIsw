<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\TipohabitacionesRequest;
use App\Tipohabitacion;
use Illuminate\Support\Facades\Session;

class TipohabController extends Controller
{
    public function index()
    {
    	$tipos = Tipohabitacion::orderBy('id', 'ASC')->paginate(5);
        return view('admin.tipohabitacion.index')->with('tipos', $tipos);
    }

    public function create()
    {
    	return view('admin.tipohabitacion.create');
    }

    public function store(TipohabitacionesRequest $request)
    {
    	$tipo = new Tipohabitacion($request->all());
        $tipo->save();

        Session::flash('message_success', "Se ha registrado el tipo de habitación $tipo->type Exitosamente!");
        return redirect(route('admin.tipohabitaciones.index'));
    }

    public function show($id)
    {
    	//
    }

    public function edit($id)
    {
    	$tipo = Tipohabitacion::find($id);
        return view('admin.tipohabitacion.edit')->with('tipo', $tipo);
    }

    public function update(TipohabitacionesRequest $request, $id)
    {
    	$tipo = Tipohabitacion::find($id);
    
        $tipo->fill($request->all());
        $tipo->save();
        
        Session::flash('message_success', "Se ha modificado el tipo de habitación $tipo->type Exitosamente!");
        return redirect(route('admin.tipohabitaciones.index'));
    }

    public function destroy($id)
    {
    	$tipo = Tipohabitacion::find($id);
        $tipo->delete();  

        Session::flash('message_danger', "Se ha eliminado el tipo de habitación $tipo->type Exitosamente!");
        return redirect(route('admin.tipohabitaciones.index'));
    }


}
