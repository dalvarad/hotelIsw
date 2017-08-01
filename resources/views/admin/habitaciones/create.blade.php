@extends('welcome')

@section('title', 'Crear Habitación')

@section('contenido')

	{!! Form::open(['route' => 'admin.habitaciones.store', 'method' => 'POST']) !!}

		<p></p>
		{!! Form::label('id_tipo', 'Tipo Habitación') !!}
		{!! Form::select('id_tipo', [$lista_tipo], null,['class' => 'form-control', 'placeholder' => 'single, doble, triple...', 'required']) !!}

		<p></p>
		{!! Form::label('id_estado', 'Estado Habitación') !!}
		{!! Form::select('id_estado', [$lista_estado], null,['class' => 'form-control',  'required']) !!}

		<p></p>
		{!! Form::label('numero', 'Número de Habitación') !!}
		{!! Form::number('numero', null, ['class' => 'form-control', 'placeholder' => '1' ,'required']) !!}

		<p></p>
		<div align="center">
			{!! Form::submit('Registrar Habitación', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection
