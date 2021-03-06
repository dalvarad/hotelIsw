@extends('welcome')

@section('title','Listado de Reservas')

@section('contenido')
	<div align="center">
		<a href="{{ route('admin.reservas.create') }}" class="btn btn-info"> Registrar Reserva</a>
        <a href="{{ url('admin/pdfreservas') }}" class="btn btn-danger"><span class="glyphicon glyphicon-save-file">pdf</span></a>
	</div>
	<p></p>

	<table class="table table-stripped">
        <thead>
            <th>Numero de Reserva</th>
            <th>Recepcionista</th>
            <th>Cliente</th>
            <th>Habitación</th>
            <th>Check-In</th>
            <th>Check-Out</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach($reservas as $reserva)
                <tr>
                    <td>{{$reserva->id}}</td>
                    <td>{{$reserva->name}}</td>
                    <td>{{$reserva->nombre_cliente}}</td>                    
                    <td>{{$reserva->numero}}</td>
                    <td>{{$reserva->checkin}}</td>
                    <td>{{$reserva->checkout}}</td>
                    <td>
	                    <a href="{{ route('admin.reservas.edit', $reserva->id) }}" class="btn btn-warning">
	                        <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
	                    <a href="{{ route('admin.reservas.destroy', $reserva->id) }}" onclick="return confirm('¿Está seguro que desea eliminar la reserva?')" class="btn btn-danger">
	                        <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
	            </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection	