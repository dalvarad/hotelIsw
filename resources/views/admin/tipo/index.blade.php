@extends('welcome')

@section('title', 'Lista de Tipo de Habitaciones')

@section('contenido')

	<div align="center">
		<a href="{{ route('admin.tipo.create') }}" class="btn btn-info">Registrar Tipo Usuario <span class="glyphicon glyphicon-bed"></span></a>
	</div>
	<p></p>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Tipo</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tipos as $tipo)
				<tr>
					<td>{{ $tipo->id }}</td>
					<td>{{ $tipo->nombre }}</td>
					<td><a href="{{ route('admin.tipo.edit', $tipo->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a> <a href="{{ route('admin.tipo.destroy', $tipo->id) }}" onclick="return confirm('¿Está seguro de eliminar la Habitación seleccionada?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<div align="center">
		{!! $tipos->render() !!}
	</div>
@endsection