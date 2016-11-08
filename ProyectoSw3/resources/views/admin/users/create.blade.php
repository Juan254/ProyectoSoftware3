@extends('admin.template.main')

@section('title', 'Registrar usuario')

@section('title2', 'Registrar un usuario')

@section('content')

	
<div class="formContainer">

	{!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
		
		
			{!! Form::label('name', 'Nombres') !!}
			{!! Form::text('name', null, [ 'placeholder' => ' Ingrese su nombre' , 'required' => 'true']) !!}

			{!! Form::label('last_name', 'Apellidos') !!}
			{!! Form::text('last_name', null, [ 'placeholder' => ' Ingrese su apellido', 'required' => 'true']) !!}

			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::password('password',  [ 'placeholder' => ' *****************', 'required' => 'true', 'maxlength' => '15']) !!}
			
			{!! Form::label('email', 'Correo') !!}
			{!! Form::email('email', null, [ 'placeholder' => ' miCorreo@example.com', 'required' => 'true']) !!}

			{!! Form::submit('Registrar usuario') !!}

	{!! Form::close() !!}
</div>
@endsection