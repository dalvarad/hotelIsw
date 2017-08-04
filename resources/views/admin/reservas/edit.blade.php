@extends('welcome')

@section('title','Editar Reserva - ' . $reservas->id)

@section('contenido')

	{!! Form::open(['route' => ['admin.reservas.update', $reservas], 'method' => 'PUT']) !!}

	<p></p>
	{!! Form::label('id_ha', 'Número Habitación') !!}
	{!! Form::select('id_ha', [$lista_habitaciones], $reservas->id_ha, ['class' => 'form-control', 'required', 'placeholder' => 'Número Habitación']) !!}

	<p></p>
	{!! Form::label('checkin', 'Fecha Inicio') !!}
	{!! Form::text('checkin', $reservas->checkin, ['class' => 'form-control', 'required']) !!}
	
	<p></p>
	{!! Form::label('checkout', 'Fecha Termina') !!}
	{!! Form::text('checkout', $reservas->checkout,['class' => 'form-control', 'required']) !!}

	<p></p>
	<div align="center">
		{!! Form::submit('Editar Reserva', ['class' => 'btn btn-primary']) !!}
	</div>

	{!! Form::close() !!}

@endsection	

@section('js')
	<script>
		jQuery(function(){
 			jQuery('#checkin').datetimepicker({
  				format:'d/m/Y H:i',
  				onShow:function( ct ){
  					this.setOptions({
  						maxDate:jQuery('#checkout').val()?jQuery('#checkout').val():false
  					})
  				},
 			});
 			jQuery('#checkout').datetimepicker({
  				format:'d/m/Y H:i',
  				onShow:function( ct ){
  					this.setOptions({
  				  		minDate:jQuery('#checkin').val()?jQuery('#checkin').val():false
  				 	})
 				},
			});
		});
	</script>

@endsection