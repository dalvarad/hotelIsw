@extends('welcome')

@section('title', 'Crear Estado Habitación')

@section('contenido')
	{!! Form::open(['route' => 'admin.estadohabitaciones.store', 'method' => 'POST']) !!}

	<p></p>
	{!! Form::label('estado', 'Estado Habitación') !!}
	{!! Form::text('estado', null, ['class' => 'form-control', 'placeholder' => 'ocuapada, desocupada, en reparación...', 'required']) !!}
     
	<p></p>
	{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}


	{!! Form::close() !!}
@endsection