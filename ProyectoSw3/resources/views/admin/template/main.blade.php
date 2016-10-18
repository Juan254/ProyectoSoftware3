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
    </head>
    <body class="inicioAdmin">
        <!-- Esta cabecera está presente en todas las páginas-->
        <header >
            Administradores ambientales
        </header>
        <nav>
            <ul>
                <li><a>Indicadores</a>
                    <ul>
                        <li><a href="{{ route( 'indicator.index') }}">Cantidad de material que entra a la fábrica</a></li>
                        <li><a href="{{ route('indicators.indexIndicatorTwo')}}">Cantidad de material por C.Acopio y comunas</a></li>
                        <li><a href="{{ route('indicators.indexIndicatorThree')}}">Cantidad de material por cliente</a></li>
                    </ul>
                </li>
                <li><a>Indicadores Sociales</a></li>
                <li><a href="{{route( 'material_provider.index')}}"  >Lista de registros</a></li>

            </ul>
        </nav>
        <br/>
        
        <h1>@yield('title2')</h1>
        <h2 class="centered">@yield('title3')</h2>
        @include('flash::message')
        @yield('content')
        <br />
        <footer>
            footer...
        </footer>
    </body>
</html>