@extends('welcome')

@section('title','Editar Reserva - ' . $reservas->id)

@section('contenido')

	{!! Form::open(['route' => ['admin.reservas.update', $reservas], 'method' => 'PUT']) !!}

	<p></p>
	{!! Form::label('id_ha', 'Número Habitación') !!}
	{!! Form::select('id_ha', [$lista_habitaciones], $reservas->id_ha, ['class' => 'form-control', 'required', 'placeholder' => 'Número Habitación']) !!}

	<p></p>
	{!! Form::label('checkout', 'Fecha Termina') !!}
	{!! Form::date('checkout', \Carbon\Carbon::now(), ['class' => 'form-control', 'required']) !!}

	<p></p>
	<div align="center">
		{!! Form::submit('Editar Reserva', ['class' => 'btn btn-primary']) !!}
	</div>

	{!! Form::close() !!}

@endsection	