@extends('admin.template.main')

@section('title', 'Editar usuario ' . $user->nombre_usuario)

@section('contenido')

	{!! Form::open(['route' => ['admin.usuarios.update', $user], 'method' => 'PUT']) !!}


 		{!! Form::label('nombre_usuario', 'Nombre de Usuario') !!}
		{!! Form::text('nombre_usuario', $user->nombre_usuario, ['class' => 'form-control', 'placeholder' => 'Ramón Ramírez Roman', 'required']) !!}


		<p></p>
		{!! Form::label('usuario', 'Nick Usuario') !!}
		{!! Form::text('usuario', $user->usuario, ['class' => 'form-control', 'placeholder' => 'Rarami', 'required']) !!}

		<p></p>
		{!! Form::label('tipo', 'Tipo de Usuario') !!}
		{!! Form::select('tipo', ['' => 'Seleccione un nivel', 'administrador' => 'Administrador', 'recepcionista' => 'Recepcionista'], null, ['class' => 'form-control',  'required']) !!}

		<p></p>

		<div align="center">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection