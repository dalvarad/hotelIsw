@extends('welcome')
@section('title', 'Nuestras Habitaciones')
@section('contenido')
	<style type="text/css">
		table{
			background-color: #FFFFFF;
		}

	</style>

<div class="table-responsive">

	<table class="table table-stripped">
        <thead>
        <tr>
            <th>Tipo Habitación</th>
            <th>Valor Habitación</th>
            <th>Ver Habitación</th>
        </tr>
        </thead>
        <tbody>
            @foreach($habitaciones as $habitacion)
                <tr>
                    <td>{{$habitacion->type}}</td>
                    <td>${{$habitacion->valor}}.000</td>
                    <td><a href="{{route('habitaciones.mostrar', $habitacion->id)}}" class="btn btn-info">
                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection