@extends('welcome')

@section('title', 'Lista de Clientes')

@section('contenido')

	<a href="{{ route('admin.clientes.create') }}" class="btn btn-info">Registrar nuevo cliente</a>
	<p></p>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Rut</th>
			<th>Hora Real Termino</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($clientes as $cliente)
			 <tr>
			 	<td>{{ $cliente->id }}</td>
				<td>{{ $cliente->nombre_cliente }}</td>
				<td>{{ $cliente->rut_cliente}}</td>
				<td>{{ $cliente->Hora_termino_real_cl}}</td>


			 </tr>	
			@endforeach

		</tbody>
    </table>

	<div class="text-center">
		{!! $clientes->render() !!}
	</div>
@endsection