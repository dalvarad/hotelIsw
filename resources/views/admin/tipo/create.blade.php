@extends('welcome')

@section('title', 'Crear tipo de usuario')

@section('contenido')
	{!! Form::open(['route' => 'admin.tipo.store', 'method' => 'POST']) !!}
	
	{!! Form::label('nombre', 'Nombre del tipo de usuario') !!}
		{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'admin', 'required']) !!}
	
	<p></p>
	{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}


	{!! Form::close() !!}
@endsection