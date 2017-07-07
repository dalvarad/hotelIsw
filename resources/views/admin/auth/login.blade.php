@extends('welcome')

@section('title', 'Login')

@section('contenido')
	{!! Form::open(['route' => 'admin.auth.login', 'method' => 'POST']) !!}
		<div class="form-group">
		{!! Form::label('usuario', 'Nombre de Usuario') !!}
		{!! Form::text('usuario', null, ['class' => 'form-control', 'placeholder' => 'toto2129', 'required']) !!}
		<p></p>
		{!! Form::label('pass', 'Contraseña') !!}
		{!! Form::password('pass', ['class' => 'form-control', 'placeholder' => '*****', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Acceder', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
@endsection