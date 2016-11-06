@extends('admin.template.main')

@section('title', 'Registrar una actividad a un indicador social')

@section('title2', 'Registrar una actividad a un indicador social ')

@section('content')

	
<div class="formContainer">

	{!! Form::open(['route' => 'activity.store', 'method' => 'POST']) !!}
		

			{!! Form::label('name', 'Nombre de la actividad.') !!}
			{!! Form::text('name', null, [ 'placeholder' => ' Ingrese su nombre completo.' , 'required' => 'true']) !!}

			{!! Form::label('social_number', 'Indicador al cual pertenecerá la actividad.') !!}
			{!! Form::select('social_number',  [ '' => ' Seleccione el Indicador al cual pertenecerá la actividad. ', 'Recuperador Caracterizado' => 'Recuperador Caracterizado', 'Recuperador Asociado' => 'Recuperador Asociado', 'Reciclador Caracterizado' => 'Reciclador Caracterizado', 'Reciclador Asociado' => 'Reciclador Asociado', 'Reciclador en tratamiento psicológico' => 'Reciclador en tratamiento psicológico', 'Reciclador en tratamiento médico' => 'Reciclador en tratamiento médico','Reciclador en Acompañamiento social' => 'Reciclador en Acompañamiento social', 'Reciclador en acompañamiento de enfermería' => 'Reciclador en acompañamiento de enfermería', 'Reciclador con Articulación en el centro de escucha' => 'Reciclador con Articulación en el centro de escucha', 'Reciclador Sensibilizado en inclusión social' => 'Reciclador Sensibilizado en inclusión social', 'Reciclador En acompañamiento en su inclusión social' => 'Reciclador En acompañamiento en su inclusión social', 'Reciclador en acompañamiento con alimentación' => 'Reciclador en acompañamiento con alimentación','Reciclador en acompañamiento con alojamiento' => 'Reciclador en acompañamiento con alojamiento', 'Reciclador Capacitado en asociatividad' => 'Reciclador Capacitado en asociatividad', 'Recuperador Capacitado en asociatividad' => 'Recuperador Capacitado en asociatividad', 'Reciclador Capacitado en empresarialidad' => 'Reciclador Capacitado en empresarialidad', 'Recuperador Capacitado en empresarialidad' => 'Recuperador Capacitado en empresarialidad' ]) !!}

			{!! Form::submit('Registrar Actividad al indicador') !!}
	

	{!! Form::close() !!}
</div>
@endsection