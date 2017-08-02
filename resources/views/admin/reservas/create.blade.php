@extends('welcome')

@section('title','Crear Reserva')

@section('contenido')

	{!! Form::open(['route' => 'admin.reservas.store', 'method' => 'POST']) !!}

	<p></p>
	{!! Form::label('id_ha', 'Número Habitación') !!}
	{!! Form::select('id_ha', [$lista_habitaciones], null, ['class' => 'form-control', 'required', 'placeholder' => 'Número Habitación']) !!}

	<p></p>
	{!! Form::label('id_cl', 'RUT Cliente') !!}
	{!! Form::select('id_cl', [$lista_clientes], null, ['class' => 'form-control', 'required', 'placeholder' => 'Selecione RUT']) !!}

	<p></p>
	{!! Form::label('checkin', 'Fecha Inicio') !!}
	{!! Form::date('checkin', \Carbon\Carbon::now(), ['class' => 'form-control', 'required']) !!}

	<p></p>
	{!! Form::label('checkout', 'Fecha Termina') !!}
	{!! Form::date('checkout', \Carbon\Carbon::now(), ['class' => 'form-control', 'required']) !!}

	<p></p>
	<div align="center">
		{!! Form::submit('Registrar Reserva', ['class' => 'btn btn-primary']) !!}
	</div>

	{!! Form::close() !!}

@endsection	