<h1>Listado de Clientes</h1>

<table>
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Rut</th>
			<th>Hora de Salida</th>
		</tr>	
	</thead>
	<tbody>
		@foreach($cliente as $cliente)
			<tr>
				<td>{{ $cliente->nombre_cliente }}</td>
				<td>{{ $cliente->rut_cliente }}</td>
				<td>{{ $cliente->hora_termino_real_cl }}</td>
			</tr>
		@endforeach
	</tbody>
</table>
