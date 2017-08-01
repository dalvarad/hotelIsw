@extends('welcome')

@section('title', 'Lista de Estados de Habitaciones')

@section('contenido')

	<div align="center">
		<a href="{{ route('admin.estadohabitaciones.create') }}" class="btn btn-info">Registrar Estado Habitación <span class="glyphicon glyphicon-bed"></span></a>
	</div>
	<p></p>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Estado</th>
				<th>Acción</th>
			</tr>
		</thead>
		<tbody>
			@foreach($estados as $estado)
				<tr>
					<td>{{ $estado->id }}</td>
					<td>{{ $estado->estado }}</td>
					<td><a href="{{ route('admin.estadohabitaciones.edit', $estado->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a> <a href="{{ route('admin.estadohabitaciones.destroy', $estado->id) }}" onclick="return confirm('¿Está seguro de eliminar la Habitación seleccionada?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<div align="center">
		{!! $estados->render() !!}
	</div>
@endsection