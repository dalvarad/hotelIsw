<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\cliente;

class ClienteController extends Controller
{
	public function index()
    {
    	$clientes = Cliente::orderBy('id', 'ASC')->paginate(5);
        return view('admin.clientes.index')->with('clientes', $clientes);
    }

    public function create()
    {
    	return view('admin.clientes.create');
    }


    public function store(Request $request)
    {

    	$cliente = new Cliente($request->all());
        $cliente->save();
        return redirect(route('admin.clientes.index'));

    }

    public function edit($id){
        
    }

    public function update(Request $request, $id){
        
    }

    public function destroy($id){
       
    }
}
