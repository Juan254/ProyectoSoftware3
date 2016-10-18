@extends('admin.template.main')

@section('title', 'Editar registro de material')

@section('title2', 'Editar registro de material')

@section('content')

	
<div class="formContainer">

	{!! Form::open(['route' => ['material_provider.update', $material_provider], 'method' => 'PUT']) !!}


			{!!  Form::label('buy_price', 'Precio del material a depositar por kilogramo a la fecha') !!}
			{!!  Form::number('buy_price', $material_provider->buy_price, [ 'required' => 'true']) !!}

			{!! Form::label('quantity', 'Cantidad de material a depositar en kilogramos (kg)') !!}
			{!! Form::number('quantity', $material_provider->quantity, [ 'placeholder' => ' Ingrese la cantidad de material a depositado', 'required' => 'true']) !!}

			{!! Form::label('municipality', 'Municipio del cual proviene el proveedor') !!}
			{!! Form::select('municipality', [ $material_provider->Municipality => $material_provider->Municipality, 'Armenia' => 'Armenia','Buenavista' => 'Buenavista','Calarcá' => 'Calarcá','Circasia' => 'Circasia','Córdoba' => 'Córdoba','Filandia' => 'Filandia','Génova' => 'Génova','La Tebaida' => 'La Tebaida','Montenegro'=> 'Montenegro','Pijao'=> 'Pijao','Quimbaya'=> 'Quimbaya','Salento'=> 'Salento' ]) !!}

			{!! Form::label('date', 'Fecha del depósito') !!}
			{!! Form::date('date', $material_provider->date)!!}

			{!! Form::submit('Editar registro de material') !!}

	{!! Form::close() !!}
</div>
@endsection