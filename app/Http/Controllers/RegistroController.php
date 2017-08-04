<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ClienteRequest;
use App\Cliente;
use Freshwork\ChileanBundle\Rut;
use Illuminate\Support\Facades\Session;

class RegistroController extends Controller
{
    public function index()
    {
    	//
    }

    public function create()
    {
    	return view('admin.reservas.crearcliente');
    }

    public function store(ClienteRequest $request)
    {
    	$cliente = new Cliente($request->all());
        $cliente->rut_cliente = RUT::parse($request->rut_cliente)->format(RUT::FORMAT_WITH_DASH);
        $cliente->save();

        Session::flash('message_success', "Se ha registrado el usuario $cliente->nombre_cliente Exitosamente!");
        return redirect(route('admin.reservas.create'));
    }

    public function show($id)
    {
    	//
    }
}
