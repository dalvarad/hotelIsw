@extends('welcome')

@section('title','Crear Reserva')

@section('contenido')

	{!! Form::open(['route' => 'admin.reservas.store', 'method' => 'POST']) !!}

	<p></p>
	{!! Form::label('id_ha', 'Valor Habitación') !!}
	{!! Form::select('id_ha', [$lista_habitaciones], null, ['class' => 'form-control', 'required', 'placeholder' => 'Valor Habitación']) !!}

	<p></p>
	{!! Form::label('id_cl', 'RUT Cliente') !!}
	{!! Form::select('id_cl', [$lista_clientes], null, ['class' => 'form-control', 'required', 'placeholder' => 'Selecione RUT']) !!}

	<p></p>
	{!! Form::label('reserva_comienza', 'Fecha Inicio') !!}
	{!! Form::date('reserva_comienza', \Carbon\Carbon::now(), ['class' => 'form-control', 'required']) !!}

	<p></p>
	{!! Form::label('reserva_termina', 'Fecha Termina') !!}
	{!! Form::date('reserva_termina', \Carbon\Carbon::now(), ['class' => 'form-control', 'required']) !!}

	<p></p>
	<div align="center">
		{!! Form::submit('Registrar Reserva', ['class' => 'btn btn-primary']) !!}
	</div>

	{!! Form::close() !!}

@endsection	