@extends('welcome')

@section('title', 'Habitación '. $habitacion->numero)

@section('contenido')
@if($tipo->id == 1)
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-2 hidden-xs hidden-sm" style="background-color: #C4D4EA; height: 80%;">
				<img src="/fotospieza/single.jpg" class="img-thumbnail">
			</div>
			<div class="col-sm-2 hidden-xs hidden-lg hidden-md" style="background-color: white; height: 156.4%;"></div>
			<div class="col-sm-5 col-xs-10">
			<div class="row">
				<div class="col-sm-12 col-xs-12" style="background-color: #C1F7ED; height: 80%;">
					<p>Tipo Habitación: {{$tipo->type}}</p>
					<p>Descripción: {{$tipo->descripcion}}</p>
					<p>Caracteristicas: {{$tipo->caracteristicas}}</p>
					<p>Valor: ${{$tipo->valor}}.000</p>
				</div>
			</div>
		</div>
		</div>
	</div>

@else
	@if($tipo->id == 2)
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-2 hidden-xs hidden-sm" style="background-color: #C4D4EA; height: 80%;">
				<img src="/fotospieza/doble.jpg" class="img-thumbnail">
			</div>
			<div class="col-sm-2 hidden-xs hidden-lg hidden-md" style="background-color: white; height: 156.4%;"></div>
			<div class="col-sm-5 col-xs-10">
			<div class="row">
				<div class="col-sm-12 col-xs-12" style="background-color: #C1F7ED; height: 80%;">
					<p>Tipo Habitación: {{$tipo->type}}</p>
					<p>Descripción: {{$tipo->descripcion}}</p>
					<p>Caracteristicas: {{$tipo->caracteristicas}}</p>
					<p>Valor: ${{$tipo->valor}}.000</p>
				</div>
			</div>
		</div>
		</div>
	</div>

	@else

		<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-2 hidden-xs hidden-sm" style="background-color: #C4D4EA; height: 80%;">
				<img src="/fotospieza/triple.jpg" class="img-thumbnail">
			</div>
			<div class="col-sm-2 hidden-xs hidden-lg hidden-md" style="background-color: white; height: 156.4%;"></div>
			<div class="col-sm-5 col-xs-10">
			<div class="row">
				<div class="col-sm-12 col-xs-12" style="background-color: #C1F7ED; height: 80%;">
					<p>Tipo Habitación: {{$tipo->type}}</p>
					<p>Descripción: {{$tipo->descripcion}}</p>
					<p>Caracteristicas: {{$tipo->caracteristicas}}</p>
					<p>Valor: ${{$tipo->valor}}.000</p>
				</div>
			</div>
		</div>
		</div>
	</div>

	@endif
@endif

@endsection