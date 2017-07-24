@extends('welcome')

@section('title', 'Lista de Clientes')

@section('contenido')

	<a href="{{ route('admin.clientes.create') }}" class="btn btn-info">Registrar nuevo cliente</a>
	<a href="{{ url('admin/pdfclientes') }}" class="btn btn-danger"><span class="glyphicon glyphicon-save-file">pdf</span></a>
	<p></p>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Rut</th>
			<th>Fecha y Hora Real Termino</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($clientes as $cliente)
			 <tr>
			 	<td>{{ $cliente->id }}</td>
				<td>{{ $cliente->nombre_cliente }}</td>
				<td>{{ $cliente->rut_cliente}}</td>
				<td>{{ $cliente->hora_termino_real_cl}}</td>
				<td><a href="{{ route('admin.clientes.edit', $cliente->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a> <a href="{{ route('admin.clientes.destroy', $cliente->id) }}" onclick="return confirm('¿Está seguro de eliminar al cliente seleccionado?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>

			 </tr>	
			@endforeach

		</tbody>
    </table>

	<div class="text-center">
		{!! $clientes->render() !!}
	</div>
@endsection