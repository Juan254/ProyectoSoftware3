@extends('admin.template.login')

@section('title', 'Iniciar sesión')

@section('title2', 'Iniciar Sesión')

@section('content')

@section('content')
<div class="formContainer">
    
    <form  role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}

        <label for="email" >Correo Electrónico</label>

        <input type="email" name="email" value="{{ old('email') }}" required autofocus>

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
                <br>
            </span>
        @endif

        <label for="password" >Contraseña</label>

        <input type="password" name="password" required>

        @if ($errors->has('password'))
            <strong>{{ $errors->first('password') }}</strong>
        @endif
        <button type="submit" >
            Conectarse
        </button>
    </form>
@endsection
