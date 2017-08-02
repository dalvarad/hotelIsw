@extends('welcome')

@section('title', 'Editar Tipo de usuario ' . $tipos->nombre)

@section('contenido')

	{!! Form::open(['route' => ['admin.tipo.update', $tipos], 'method' => 'PUT']) !!}
	
	{!! Form::label('nombre', 'Nombre del tipo de usuario') !!}
		{!! Form::text('nombre', $tipos->nombre, ['class' => 'form-control', 'placeholder' => 'Ramón Ramírez Roman', 'required']) !!}
	
     
	<p></p>
	<div align="center">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
		</div>



	{!! Form::close() !!}

@endsection