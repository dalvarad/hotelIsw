<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo;
use App\Http\Requests;
use App\Http\Requests\TipousuarioRequest;
use Illuminate\Support\Facades\Session;

class TipoController extends Controller
{
    public function index()
    {
    	$tipos = Tipo::orderBy('id', 'ASC')->paginate(5);
        return view('admin.tipo.index')->with('tipos', $tipos);
    }

    public function create()
    {
    	return view('admin.tipo.create');
    }

    public function store(TipousuarioRequest $request)
    {
    	$tipos = new Tipo($request->all());
        $tipos->save();

        Session::flash('message_success', "Se ha registrado el tipo de usuario $tipos->nombre Exitosamente!");
        return redirect(route('admin.tipo.index'));
    }
      public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $tipos = Tipo::find($id);
        return view('admin.tipo.edit')->with('tipos', $tipos);
    }

    public function update(TipousuarioRequest $request, $id)
    {
        $tipos = Tipo::find($id);
    
        $tipos->fill($request->all());
        $tipos->save();
        
        Session::flash('message_success', "Se ha modificado el tipo de usuario $tipos->nombre Exitosamente!");
        return redirect(route('admin.tipo.index'));
    }

    public function destroy($id)
    {
        $tipos = Tipo::find($id);
        $tipos->delete();  

        Session::flash('message_danger', "Se ha eliminado el tipo de usuario $tipos->nombre Exitosamente!");
        return redirect(route('admin.tipo.index'));
    }

}
