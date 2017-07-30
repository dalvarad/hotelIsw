@extends('welcome')

@section('title', 'Lista de Usuarios')

@section('contenido')

	<div align="center">
		<a href="{{ route('admin.users.create') }}" class="btn btn-info">Registrar nuevo usuario</a>
	
	</div>
	<p></p>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Tipo</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>
						@if($user->type == "1")
							<span class="label label-danger">{{ $user->nombre }}</span>
						@elseif($user->type == "2")
							<span class="label label-info">{{ $user->nombre }}</span>
						@else
							<span class="label label-primary">{{ $user->nombre }}</span>
						@endif	
					</td>
					<td>
						<a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a> 
						<a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('¿Está seguro de eliminar al usuario seleccionado?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	


@endsection