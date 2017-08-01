@extends('welcome')

@section('title', 'Editar Tipo de Habitación Nº' . $tipo->id)

@section('contenido')

	{!! Form::open(['route' => ['admin.tipohabitaciones.update', $tipo],  'method' => 'PUT']) !!}

	<p></p>
	{!! Form::label('type', 'Tipo Habitación') !!}
	{!! Form::text('type', $tipo->type, ['class' => 'form-control', 'placeholder' => 'single, doble, triple...', 'required']) !!}

	<p></p>
	{!! Form::label('valor', 'Valor') !!}
	{!! Form::number('valor', $tipo->valor, ['class' => 'form-control', 'placeholder' => '35.000', 'required']) !!}
	
	{!! Form::label('descripcion', 'Descripción habitación') !!}
	{!! Form::textarea('descripcion', $tipo->descripcion, ['class' => 'form-control', 'required']) !!}
	
	<p></p>
	{!! Form::label('caracteristicas', 'Caracteristicas habitación') !!}
	{!! Form::textarea('caracteristicas', $tipo->caracteristicas, ['class' => 'form-control','required']) !!}
     
	<p></p>
	{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}


	{!! Form::close() !!}

@endsection