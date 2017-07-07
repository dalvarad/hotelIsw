@extends('admin.template.main')

@section('title', 'Editar cliente ' . $cliente->nombre_cliente)

@section('contenido')

	{!! Form::open(['route' => ['admin.clientes.update', $cliente], 'method' => 'PUT']) !!}
	
	{!! Form::label('nombre_cliente', 'Nombre del Cliente') !!}
		{!! Form::text('nombre_cliente', $cliente->nombre_cliente, ['class' => 'form-control', 'placeholder' => 'Ramón Ramírez Roman', 'required']) !!}
	

	<p></p>
	{!! Form::label('hora_termino_real_cl', 'Hora de salida real del cliente') !!}
	{!! Form::datetime('hora_termino_real_cl', $cliente->hora_termino_real_cl, ['class' => 'form-control', 'placeholder' =>'AAAA-M-D 23:59:00']) !!}

     
	<p></p>
	<div align="center">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
		</div>



	{!! Form::close() !!}

@endsection