<h1>Reservas Hotel Acuarella</h1>

<table>
	<thead>
            <th>Numero de Reserva</th>
            <th>Recepcionista</th>
            <th>Habitación</th>
            <th>Cliente</th>
            <th>Valor</th>
            <th>Check-In</th>
            <th>Check-Out</th>
        </thead>
        <tbody>
            @foreach($reservas as $reserva)
                <tr>
                    <td>{{$reserva->id}}</td>
                    <td>{{$reserva->name}}</td>
                    <td>{{$reserva->id_ha}}</td>
                    <td>{{$reserva->nombre_cliente}}</td>                    
                    <td>{{$reserva->valor}}</td>
                    <td>{{$reserva->reserva_comienza}}</td>
                    <td>{{$reserva->reserva_termina}}</td>
                </tr>
            @endforeach
        </tbody>
</table>