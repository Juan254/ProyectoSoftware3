@extends('admin.template.main')

@section('title', 'Registrar una persona a un indicador social')

@section('title2', 'Registrar una persona a un indicador social ')

@section('content')

	
<div class="formContainer">

	{!! Form::open(['route' => 'person.store', 'method' => 'POST']) !!}
		

			{!! Form::label('name', 'Nombres') !!}
			{!! Form::text('name', null, [ 'placeholder' => ' Ingrese su nombre completo.' , 'required' => 'true']) !!}

			{!! Form::label('last_name', 'Apellidos') !!}
			{!! Form::text('last_name', null, [ 'placeholder' => ' Ingrese sus apellidos.' , 'required' => 'true']) !!}

			{!! Form::label('age', 'Edad') !!}
			{!! Form::number('age', null, [ 'placeholder' => ' Ingrese su edad', 'required' => 'true', 'max' => '99' ]) !!}

			{!! Form::label('id_card', 'Número de identificación') !!}
			{!! Form::number('id_card', null, [ 'placeholder' => ' Ingrese su número de identificación', 'required' => 'true', 'max' => '9999999999' ]) !!}

			{!! Form::label('municipality', 'Municipio del cual proviene') !!}
			{!! Form::select('municipality', [ 'Armenia' => ' Seleccione el municipio del cual proviene', 'Armenia' => 'Armenia','Buenavista' => 'Buenavista','Calarcá' => 'Calarcá','Circasia' => 'Circasia','Córdoba' => 'Córdoba','Filandia' => 'Filandia','Génova' => 'Génova','La Tebaida' => 'La Tebaida','Montenegro'=> 'Montenegro','Pijao'=> 'Pijao','Quimbaya'=> 'Quimbaya','Salento'=> 'Salento' ]) !!}

			
			{!! Form::label('profesion', 'Oficio de la persona') !!}
			{!! Form::select('profesion', [ '' => ' Seleccione el oficio de la persona', 'Reciclador' => 'Reciclador','Recuperador' => 'Recuperador' ]) !!}

			{!! Form::label('social_number', 'Estado de la persona') !!}
			{!! Form::select('social_number',  [ '' => ' Seleccione el estado en el que se encuentra la persona', 'Caracterizado' => 'En caracterización', 'Asociado' => 'En Asociación', 'en tratamiento sicológico' => 'En tratamiento sicológico', 'en tratamiento médico' => 'En tratamiento médico', 'en Acompañamiento social' => ' En acopañamiento social', 'en acompañamiento de enfermería' => 'En acompañamiento de enfermería','con Articulación en el centro de escucha' => 'En articulación con el centro de escucha', 'Sensibilidad en inclusión social' => 'En sensibilidad en inclusión social', 'Acompañaiento en su inclusión social' => 'En acompañamiento en su inclusión social', 'Acompañamiento con alimentación' => 'En acompañamiento con alimentación', 'Acompañamiento con alojamiento' => 'En acompañamiento con alojamiento', 'Capacitado en asociatividad' => 'Capacitado en asociatividad','Capacitado en empresarialidad' => 'Capacitado en empresarialidad' ]) !!}

			{!! Form::submit('Registrar Persona') !!}
	



	{!! Form::close() !!}
</div>
@endsection