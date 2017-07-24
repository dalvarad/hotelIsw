
<html>
<head>

<body>
  <header>
  <link rel="stylesheet" href="pdfStyle.css">
    <h1>Hotel Acuarela</h1>
    <h2>Clientes</h2>
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
  </div>
</body>
</html>