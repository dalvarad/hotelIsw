@extends('welcome')

@section('title', 'Crear Cliente')

@section('contenido')
	{!! Form::open(['route' => 'admin.crearcliente.store', 'method' => 'POST']) !!}
	
	{!! Form::label('nombre_cliente', 'Nombre del Cliente') !!}
		{!! Form::text('nombre_cliente', null, ['class' => 'form-control', 'placeholder' => 'Ramón Ramírez Roman', 'required']) !!}
	
	<p></p>
	{!! Form::label('rut_cliente', 'Rut del Cliente') !!}
	{!! Form::text('rut_cliente', null, ['class' => 'form-control', 'placeholder' => '1.111.111-1', 'required']) !!}
     
	<p></p>
	{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}


	{!! Form::close() !!}
@endsection