
<h1>Listado de Usuarios</h1>

<table>
	<thead>
		<tr>
			<th>Nombre</th>
			<th>rut</th>
			<th>Correo</th>
			<th>tipo</th>
		</tr>	
	</thead>
	<tbody>
		@foreach($users as $user)
			<tr>
				<td>{{ $user->name }}</td>
				<td>{{ $user->rut }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->type }}</td>
			</tr>
		@endforeach
	</tbody>
</table>
