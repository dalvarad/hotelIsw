@extends('welcome')

@section('title','Crear Reserva')

@section('contenido')

	<div align="right">
		<a href="{{ route('admin.crearcliente.create') }}" class="btn btn-info"> Registrar Cliente</a>
	</div>

	{!! Form::open(['route' => 'admin.reservas.store', 'method' => 'POST']) !!}

	<p></p>
	{!! Form::label('id_ha', 'Número Habitación') !!}
	{!! Form::select('id_ha', [$lista_habitaciones], null, ['class' => 'form-control', 'required', 'placeholder' => 'Número Habitación']) !!}

	<p></p>
	{!! Form::label('id_cl', 'RUT Cliente') !!}
	{!! Form::select('id_cl', [$lista_clientes], null, ['class' => 'form-control', 'required', 'placeholder' => 'Selecione RUT']) !!}
	
	<p></p>
	{!! Form::label('checkin', 'Fecha Inicio') !!}
	{!! Form::text('checkin', null, ['class' => 'form-control', 'required']) !!}
	
	<p></p>
	{!! Form::label('checkout', 'Fecha Termina') !!}
	{!! Form::text('checkout', null,['class' => 'form-control', 'required']) !!}

	<p></p>
	<div align="center">
		{!! Form::submit('Registrar Reserva', ['class' => 'btn btn-primary']) !!}
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