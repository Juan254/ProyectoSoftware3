@extends('admin.template.main')

@section('title', 'Registrar precios')

@section('title2', 'No hay lista de precios disponible, se debe ingresar precios')

@section('content')

	
<div class="formContainer">

	{!! Form::open(['route' => 'constant.store', 'method' => 'POST']) !!}
		
			{!!  Form::label('pet', 'Precio del PET por kilogramo a la fecha') !!}
			{!!  Form::number('pet', 0, [ 'required' => 'true']) !!}

			{!! Form::label('board', 'Precio del cartón por kilogramo a la fecha') !!}
			{!! Form::number('board', 0, [  'required' => 'true']) !!}

			{!!  Form::label('archive', 'Precio del archivo por kilogramo a la fecha') !!}
			{!!  Form::number('archive', 0, [ 'required' => 'true']) !!}

			{!! Form::label('blow', 'Precio del soplado por kilogramo a la fecha') !!}
			{!! Form::number('blow', 0, [ 'required' => 'true']) !!}

			{!! Form::label('junk', 'Precio de la chatarra por kilogramo a la fecha') !!}
			{!! Form::number('junk', 0, [ 'required' => 'true']) !!}

			{!! Form::label('glass', 'Precio del vidrio por kilogramo a la fecha') !!}
			{!! Form::number('glass', 0, [ 'required' => 'true']) !!}

			{!! Form::label('metal', 'Precio del metal por kilogramo a la fecha') !!}
			{!! Form::number('metal', 0, [ 'required' => 'true']) !!}
						
			{!! Form::label('plega', 'Precio de la plega por kilogramo a la fecha') !!}
			{!! Form::number('plega', 0, [ 'required' => 'true']) !!}
			
			{!! Form::label('frame', 'Precio del archivo por kilogramo a la fecha') !!}
			{!! Form::number('frame', 0, [ 'required' => 'true']) !!}

			{!! Form::submit('Registrar registrar precios') !!}

	{!! Form::close() !!}
</div>
@endsection