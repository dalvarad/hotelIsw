@extends('welcome')

@section('title','Editar Habitación - ' . $habitacion->numero)

@section('contenido')

	{!! Form::open(['route' => ['admin.habitaciones.update', $habitacion], 'method' => 'PUT']) !!}

	<p></p>
		{!! Form::label('id_tipo', 'Tipo Habitación') !!}
		{!! Form::select('id_tipo', [$lista_tipo], $habitacion->id_tipo,['class' => 'form-control', 'placeholder' => 'single, doble, triple...', 'required']) !!}

		<p></p>
		{!! Form::label('id_estado', 'Estado Habitación') !!}
		{!! Form::select('id_estado', [$lista_estado], $habitacion->id_estado,['class' => 'form-control',  'required']) !!}

		<p></p>
		{!! Form::label('numero', 'Número de Habitación') !!}
		{!! Form::number('numero', $habitacion->numero, ['class' => 'form-control', 'placeholder' => '1' ,'required']) !!}

	<p></p>
	<div align="center">
		{!! Form::submit('Editar Reserva', ['class' => 'btn btn-primary']) !!}
	</div>

	{!! Form::close() !!}

@endsection	