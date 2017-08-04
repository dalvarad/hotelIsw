<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ClienteRequest;
use App\Cliente;
use Freshwork\ChileanBundle\Rut;
use Illuminate\Support\Facades\Session;

class ClienteController extends Controller
{
	public function index(Request $request)
    {
        $clientes = Cliente::search($request->nombre_cliente)->orderBy('id', 'ASC')->paginate(5);
        return view('admin.clientes.index')->with('clientes', $clientes);
    }

    public function create()
    {
    	return view('admin.clientes.create');
    }

    public function store(ClienteRequest $request)
    {

    	$cliente = new Cliente($request->all());
        $cliente->rut_cliente = RUT::parse($request->rut_cliente)->format(RUT::FORMAT_WITH_DASH);
        $cliente->save();

        Session::flash('message_success', "Se ha registrado el usuario $cliente->nombre_cliente Exitosamente!");
        return redirect(route('admin.clientes.index'));

    }

    public function show($id)
    {
        //
    }

    public function edit($id){
     
        $cliente = Cliente::find($id);
        return view('admin.clientes.edit')->with('cliente', $cliente);   
    }

    public function update(Request $request, $id){
        
        $cliente = Cliente::find($id);
    
        $cliente->nombre_cliente = $request->nombre_cliente;

        $this->validate($request,[
            'rut_cliente' => 'cl_rut'
        ]);
        $cliente->hora_termino_real_cl = $request->hora_termino_real_cl;
        
        $cliente->save();
        
        Session::flash('message_success', "Se ha modificado el cliente $cliente->nombre_cliente Exitosamente!");
        return redirect(route('admin.clientes.index'));
    }

    public function destroy($id){
        $cliente = Cliente::find($id);
        $cliente->delete();  

        Session::flash('message_danger', "Se ha eliminado el cliente $cliente->nombre_cliente Exitosamente!");
        return redirect(route('admin.clientes.index'));
    }
}
