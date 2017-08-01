@extends('welcome')

@section('title','Listado de Habitaciones')

@section('contenido')
	<div align="center">
		<a href="{{ route('admin.habitaciones.create') }}" class="btn btn-info"> Registrar Habitación</a>
	</div>
	<p></p>

	<table class="table table-stripped">
        <thead>
        <tr>
            <th>Numero de Habitación</th>
            <th>Tipo Habitación</th>
            <th>Valor Habitación</th>
            <th>Estado Habitación</th>
            <th>Acción</th>
        </tr>
        </thead>
        <tbody>
            @foreach($habitaciones as $habitacion)
                <tr>
                    <td>{{$habitacion->numero}}</td>
                    <td>{{$habitacion->type}}</td>
                    <td>${{$habitacion->valor}}.000</td>
                    <td>{{$habitacion->estado}}</td>
                    <td>
                        <a href="#" class="btn btn-info">
                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
	                    <a href="{{ route('admin.habitaciones.edit', $habitacion->id) }}" class="btn btn-warning">
	                        <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
	                    <a href="{{ route('admin.habitaciones.destroy', $habitacion->id) }}" onclick="return confirm('¿Está seguro que desea eliminar la habitación?')" class="btn btn-danger">
	                        <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
	               </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection	