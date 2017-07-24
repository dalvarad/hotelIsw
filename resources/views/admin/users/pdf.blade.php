
<html>
<head>

<body>
  <header>
  <link rel="stylesheet" type="text/css" href="pdfStyle.css">
    <h1>Hotel Acuarela</h1>
    <h2>Usuarios</h2>
  </header>
  <footer>
   
         <p class="izq">
              Hotel Acuarela
         </p>
          <p class="page">
           	 Página
          </p>
  
  </footer>
  <div id="content">
   <table id="tabla" style="width:100% ">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>RUT</th>
			<th>Correo</th>
			<th>Tipo</th>
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
  </div>
</body>
</html>