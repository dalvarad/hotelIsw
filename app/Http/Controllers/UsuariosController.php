<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Usuario;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UsuarioRequest;

class UsuariosController extends Controller
{
    public function index()
    {
    	$usuarios = Usuario::orderBy('id', 'ASC')->paginate(5);

        return view('admin.usuarios.index')->with('usuarios', $usuarios);
    }

    public function create()
    {
    	return view('admin.usuarios.create');
    }


    public function store(UsuarioRequest $request)
    {
    	$user = new Usuario($request->all());
    	$user->pass = bcrypt($request->pass);
    	$user->save();

        Session::flash('message_success', "Se ha registrado el usuario $user->nombre_usuario Exitosamente!");
        return redirect(route('admin.usuarios.index'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id){
        $user = Usuario::find($id);
        return view('admin.usuarios.edit')->with('user', $user);
    }

    public function update(Request $request, $id){
        $user = Usuario::find($id);
        $user->nombre_usuario = $request->nombre_usuario;
        $user->rut_usuario = $request->rut_usuario;
        $user->usuario = $request->usuario;
        $user->tipo = $request->tipo;

        $user->save();

        Session::flash('message_success', "Se ha modificado el usuario $user->nombre_usuario Exitosamente!");
        return redirect(route('admin.usuarios.index'));
    }

    public function destroy($id){
        $user = Usuario::find($id);
        $user->delete();

        Session::flash('message_danger', "Se ha eliminado el usuario $user->nombre_usuario Exitosamente!");
        return redirect(route('admin.usuarios.index'));
    }
}
