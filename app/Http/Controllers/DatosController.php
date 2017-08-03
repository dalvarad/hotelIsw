<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Habitacion;
use DB;

class DatosController extends Controller
{
    public function index(Request $request)
    {
    	$habitaciones = DB::table('habitaciones')

                    ->join('tipohabitaciones', 'tipohabitaciones.id', '=', 'habitaciones.id_tipo')
                    ->join('estadohabitaciones', 'estadohabitaciones.id', '=', 'habitaciones.id_estado')

                    ->select('habitaciones.*', 'tipohabitaciones.descripcion', 'tipohabitaciones.caracteristicas', 'tipohabitaciones.valor', 'tipohabitaciones.type', 'estadohabitaciones.estado')
                    ->orderBy('habitaciones.numero','ASC')
                    ->get();

        $lista_tipo = DB::table('tipohabitaciones')
                            ->orderBy('id')
                            ->lists('type', 'id' );

        return view('habitaciones.index')->with('habitaciones', $habitaciones)->with('lista_tipo', $lista_tipo);
    }
}
