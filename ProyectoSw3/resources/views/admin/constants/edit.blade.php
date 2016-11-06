@extends('admin.template.main')

@section('title', 'Editar el precio del material')

@section('title2', 'Editar el precio del material')

@section('content')

	
<div class="formContainer">

	{!! Form::open(['route' => ['constant.update', $constant], 'method' => 'PUT']) !!}


			{!!  Form::label('pet', 'Precio del PET por kilogramo a la fecha') !!}
			{!!  Form::number('pet', $constant->pet, [ 'required' => 'true']) !!}

			{!! Form::label('board', 'Precio del cartón por kilogramo a la fecha') !!}
			{!! Form::number('board', $constant->board, [  'required' => 'true']) !!}

			{!!  Form::label('archive', 'Precio del archivo por kilogramo a la fecha') !!}
			{!!  Form::number('archive', $constant->archive, [ 'required' => 'true']) !!}

			{!! Form::label('blow', 'Precio del soplado por kilogramo a la fecha') !!}
			{!! Form::number('blow', $constant->blow, [ 'required' => 'true']) !!}

			{!! Form::label('junk', 'Precio de la chatarra por kilogramo a la fecha') !!}
			{!! Form::number('junk', $constant->junk, [ 'required' => 'true']) !!}

			{!! Form::label('glass', 'Precio del vidrio por kilogramo a la fecha') !!}
			{!! Form::number('glass', $constant->glass, [ 'required' => 'true']) !!}

			{!! Form::label('metal', 'Precio del metal por kilogramo a la fecha') !!}
			{!! Form::number('metal', $constant->metal, [ 'required' => 'true']) !!}
						
			{!! Form::label('plega', 'Precio de la plega por kilogramo a la fecha') !!}
			{!! Form::number('plega', $constant->plega, [ 'required' => 'true']) !!}
			
			{!! Form::label('frame', 'Precio del archivo por kilogramo a la fecha') !!}
			{!! Form::number('frame', $constant->frame, [ 'required' => 'true']) !!}


			{!! Form::submit('Editar precio del material') !!}

	{!! Form::close() !!}
</div>
@endsection