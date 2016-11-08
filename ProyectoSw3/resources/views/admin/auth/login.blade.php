@extends('admin.template.login')

@section('title', 'Iniciar Sesión')

@section('title2', 'Inicio de Sesión')

@section('content')
	{!! Form::open(['route' => 'admin.auth.login', 'method' => 'POST']) !!}
	
		{!! Form::label('username', 'Nombre de usuario') !!}
		{!! Form::text('username', null, ['placeholder' => ' Ingrese su nombre de usuario'])!!}

		{!! Form::label('password', 'Contraseña') !!}
		{!! Form::password('password', [ 'placeholder' => ' ***********']) !!}

		{!! Form::submit('Acceder')!!}

	{!! Form::close() !!}
@endsection