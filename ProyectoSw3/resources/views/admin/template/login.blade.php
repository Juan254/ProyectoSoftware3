<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">
        <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="shortcut icon" type="image/png" href="{{ asset ('Recursos/imagenes/editar.png')}}"/>
    </head>
    <body class="login">
        
        <!-- Esta cabecera está presente en todas las páginas-->
        <header >
            Administradores ambientales
        </header>
            <br>
            <h2 style="text-align:center;">@yield('title2')</h2>
            <br>
            @include('flash::message')
            @yield('content')
    </body>
</html>
