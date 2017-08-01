@extends('welcome')

@section('title', 'Crear Tipo Habitación')

@section('contenido')
	{!! Form::open(['route' => 'admin.tipohabitaciones.store', 'method' => 'POST']) !!}

	<p></p>
	{!! Form::label('type', 'Tipo Habitación') !!}
	{!! Form::text('type', null, ['class' => 'form-control', 'placeholder' => 'single, doble, triple...', 'required']) !!}

	<p></p>
	{!! Form::label('valor', 'Valor') !!}
	{!! Form::number('valor', null, ['class' => 'form-control', 'placeholder' => '35.000', 'required']) !!}
	
	{!! Form::label('descripcion', 'Descripción habitación') !!}
	{!! Form::textarea('descripcion', null, ['class' => 'form-control', 'required']) !!}
	
	<p></p>
	{!! Form::label('caracteristicas', 'Caracteristicas habitación') !!}
	{!! Form::textarea('caracteristicas', null, ['class' => 'form-control','required']) !!}
     
	<p></p>
	{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}


	{!! Form::close() !!}
@endsection