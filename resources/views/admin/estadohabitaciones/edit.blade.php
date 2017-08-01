@extends('welcome')

@section('title', 'Editar Estado de Habitación Nº' . $estado->id)

@section('contenido')

	{!! Form::open(['route' => ['admin.estadohabitaciones.update', $estado],  'method' => 'PUT']) !!}

	<p></p>
	{!! Form::label('estado', 'Estado Habitación') !!}
	{!! Form::text('estado', $estado->estado, ['class' => 'form-control', 'placeholder' => 'ocuapada, desocupada, en reparación...', 'required']) !!}
     
	<p></p>
	{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}


	{!! Form::close() !!}

@endsection