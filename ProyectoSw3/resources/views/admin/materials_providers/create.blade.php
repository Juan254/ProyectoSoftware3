@extends('admin.template.main')

@section('title', 'Registro de materiales')

@section('title2', 'Registrar material')

@section('content')

	
<div class="formContainer">

	{!! Form::open(['route' => 'material_provider.store', 'method' => 'POST']) !!}

			{!! Form::label('provider_type', 'Tipo de proveedor') !!}
			{!! Form::select('provider_type', [ '' => ' Seleccione el tipo de proveedor que depositará', 'Centro de acopio' => 'Centro de acopio','Comuna' => 'Comuna','Asociación' => 'Asociación','Chatarreros' => 'Chatarrero','Recuperador de oficio' => 'Recuperador de oficio','Reciclador' =>'Reciclador','Punto de fábrica' => 'Punto de fábrica' ]) !!}

			{!! Form::label('material_type', 'Tipo de material a depositar') !!}
			{!! Form::select('material_type', [ '' => ' Seleccione el tipo de material a depositar', 'Pet' => 'Pet','Cartón' => 'Cartón','Archivo' => 'Archivo','Soplado' => 'Soplado','Chatarra' => 'Chatarra','Metal' => 'Metal','Plega' => 'Plega','Vidrio' => 'Vidrio','Marco'=> 'Marco' ]) !!}

			{!!  Form::label('buy_price', 'Precio del material a depositar por kilogramo a la fecha') !!}
			{!!  Form::number('buy_price', 0, [ 'required' => 'true']) !!}

			{!! Form::label('quantity', 'Cantidad de material a depositar en kilogramos (kg)') !!}
			{!! Form::number('quantity', 0, [ 'placeholder' => ' Ingrese la cantidad de material a depositado', 'required' => 'true']) !!}

			{!! Form::label('municipality', 'Municipio del cual proviene el proveedor') !!}
			{!! Form::select('municipality', [ 'Armenia' => ' Seleccione el municipio del cual proviene el proveedor', 'Armenia' => 'Armenia','Buenavista' => 'Buenavista','Calarcá' => 'Calarcá','Circasia' => 'Circasia','Córdoba' => 'Córdoba','Filandia' => 'Filandia','Génova' => 'Génova','La Tebaida' => 'La Tebaida','Montenegro'=> 'Montenegro','Pijao'=> 'Pijao','Quimbaya'=> 'Quimbaya','Salento'=> 'Salento' ]) !!}

			{!! Form::label('date', 'Fecha del depósito') !!}
			{!! Form::date('date', \Carbon\Carbon::now()) !!}

			{!! Form::submit('Registrar material') !!}

	{!! Form::close() !!}


	@if( $constant == null)
	<h3 style="text-align:center;">No hay lista de precios registrada, para registrar precios ir a la pestaña de Precios de los materiales.</h3>
	@else
		<br>
		<h3 style="text-align:center;">Lista de precios</h3>
		<br>
		<table>	
		<thead>
			<th>Material</th>
			<th>Precio del material por kilogramo (COP)</th>
		</thead>	
		<tbody>
				<tr>
					<td>Pet</td>
					<td>${{ $constant->pet }}</td>
				</tr>
				<tr>
					<td>Cartón</td>
					<td>${{ $constant->board }}</td>
				</tr>
				<tr>
					<td>Archivo</td>
					<td>${{ $constant->archive }}</td>
				</tr>
				<tr>
					<td>Soplado</td>
					<td>${{ $constant->blow }}</td>
				</tr>
				<tr>
					<td>Chatarra</td>
					<td>${{ $constant->junk }}</td>
				</tr>
				<tr>
					<td>Metal</td>
					<td>${{ $constant->metal }}</td>
				</tr>
				<tr>
					<td>Plega</td>
					<td>${{ $constant->plega }}</td>
				</tr>
				<tr>
					<td>Vidrio</td>
					<td>${{ $constant->glass }}</td>
				</tr>																				
				<tr>
					<td>Marco</td>
					<td>${{ $constant->frame }}</td>
				</tr>
		</tbody>
	</table>
	@endif

</div>
@endsection