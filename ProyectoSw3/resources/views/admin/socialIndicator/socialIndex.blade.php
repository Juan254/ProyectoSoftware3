
@extends('admin.template.main')

@section('title', 'Lista de Indicadores Sociales')

@section('title3', 'Indicadores Sociales')

@section('content')
	<table>	
		<thead>
			<th>#</th>
			<th>Indicador Social</th>
			<th>Cantidad de Personas en la actividad</th>
			<th>Mostrar Más</th>
		</thead>	
		<tbody>
			<tr>
				<td>1</td>
				<td>Recuperadores Caracterizados</td>
				<td>{{ $social->social1 }}</td>
				<td><a  href="{{ route ('socialIndicator.more', $social_number='Recuperador Caracterizado' )}}"  >
                     <img src="{{ asset ('Recursos/imagenes/mmas.png')}}"></a></td>
			</tr>
			<tr>
				<td>2</td>
				<td>Recuperadores Asociados</td>
				<td>{{ $social->social2 }}</td>
				<td><a  href="{{ route ('socialIndicator.more', $social_number='Recuperador Asociado' )}}"  >
                     <img src="{{ asset ('Recursos/imagenes/mmas.png')}}"></a></td>
			</tr>
			<tr>
				<td>3</td>
				<td>Recicladores Caracterizados</td>
				<td>{{ $social->social3 }}</td>
				<td><a  href="{{ route ('socialIndicator.more', $social_number='Reciclador Caracterizado' )}}"  >
                     <img src="{{ asset ('Recursos/imagenes/mmas.png')}}"></a></td>
			</tr>
			<tr>
				<td>4</td>
				<td>Recicladores Asociados</td>
				<td>{{ $social->social4 }}</td>
				<td><a  href="{{ route ('socialIndicator.more', $social_number='Reciclador Asociado' )}}"  >
                     <img src="{{ asset ('Recursos/imagenes/mmas.png')}}"></a></td>
			</tr>
			<tr>
				<td>5</td>
				<td>Recicladores en Tratamiento Psicológico</td>
				<td>{{ $social->social5 }}</td>
				<td><a  href="{{ route ('socialIndicator.more', $social_number='Reciclador en tratamiento psicológico' )}}"  >
                     <img src="{{ asset ('Recursos/imagenes/mmas.png')}}"></a></td>
			</tr>
			<tr>
				<td>6</td>
				<td>Recicladores en Tratamiento Médico</td>
				<td>{{ $social->social6 }}</td>
				<td><a  href="{{ route ('socialIndicator.more', $social_number='Reciclador en tratamiento médico' )}}"  >
                     <img src="{{ asset ('Recursos/imagenes/mmas.png')}}"></a></td>
			</tr>
			<tr>
				<td>7</td>
				<td>Recicladores en Acompañamiento Social</td>
				<td>{{ $social->social7 }}</td>
				<td><a  href="{{ route ('socialIndicator.more', $social_number='Reciclador en Acompañamiento social' )}}"  >
                     <img src="{{ asset ('Recursos/imagenes/mmas.png')}}"></a></td>
			</tr>
			<tr>
				<td>8</td>
				<td>Reccialdores en Acompañamiento de Enfermería</td>
				<td>{{ $social->social8 }}</td>
				<td><a  href="{{ route ('socialIndicator.more', $social_number='Reciclador en acompañamiento de enfermería' )}}"  >
                     <img src="{{ asset ('Recursos/imagenes/mmas.png')}}"></a></td>
			</tr>
			<tr>
				<td>9</td>
				<td>Recicladores Articulados en el centro de escucha</td>
				<td>{{ $social->social9 }}</td>
				<td><a  href="{{ route ('socialIndicator.more', $social_number='Reciclador con Articulación en el centro de escucha' )}}"  >
                     <img src="{{ asset ('Recursos/imagenes/mmas.png')}}"></a></td>
			</tr>
			<tr>
				<td>10</td>
				<td>Recicladores Sensibilizados en Inclusión Social</td>
				<td>{{ $social->social10 }}</td>
				<td><a  href="{{ route ('socialIndicator.more', $social_number='Reciclador Sensibilizado en inclusión social' )}}"  >
                     <img src="{{ asset ('Recursos/imagenes/mmas.png')}}"></a></td>
			</tr>
			<tr>
				<td>11</td>
				<td>Recicladores en Acompañamiento Social</td>
				<td>{{ $social->social11 }}</td>
				<td><a  href="{{ route ('socialIndicator.more', $social_number='Reciclador En acompañamiento en su inclusión social' )}}"  >
                     <img src="{{ asset ('Recursos/imagenes/mmas.png')}}"></a></td>
			</tr>
			<tr>
				<td>12</td>
				<td>Recicladores Acompañados con Alimentación</td>
				<td>{{ $social->social12 }}</td>
				<td><a  href="{{ route ('socialIndicator.more', $social_number='Reciclador en acompañamiento con alimentación' )}}"  >
                     <img src="{{ asset ('Recursos/imagenes/mmas.png')}}"></a></td>
			</tr>
			<tr>
				<td>13</td>
				<td>Recicladores Acompañados con Alojamiento</td>
				<td>{{ $social->social13 }}</td>
				<td><a  href="{{ route ('socialIndicator.more', $social_number='Reciclador en acompañamiento con alojamiento' )}}"  >
                     <img src="{{ asset ('Recursos/imagenes/mmas.png')}}"></a></td>
			</tr>
			<tr>
				<td>14</td>
				<td>Recicladores Capacitados en Asociatividad</td>
				<td>{{ $social->social14 }}</td>
				<td><a  href="{{ route ('socialIndicator.more', $social_number='Reciclador Capacitado en asociatividad' )}}"  >
                     <img src="{{ asset ('Recursos/imagenes/mmas.png')}}"></a></td>
			</tr>
			<tr>
				<td>15</td>
				<td>Recuperadores Capacitados en Asociativdad</td>
				<td>{{ $social->social15 }}</td>
				<td><a  href="{{ route ('socialIndicator.more', $social_number='Recuperador Capacitado en asociatividad' )}}"  >
                     <img src="{{ asset ('Recursos/imagenes/mmas.png')}}"></a></td>
			</tr>
			<tr>
				<td>16</td>
				<td>Recicladores Capacitados en Empresarialidad</td>
				<td>{{ $social->social16 }}</td>
				<td><a  href="{{ route ('socialIndicator.more', $social_number='Reciclador Capacitado en empresarialidad' )}}"  >
                     <img src="{{ asset ('Recursos/imagenes/mmas.png')}}"></a></td>
			</tr>
			<tr>
				<td>17</td>
				<td>Recuperadores Capacitados en Empresarialidad</td>
				<td>{{ $social->social17 }}</td>
				<td><a  href="{{ route ('socialIndicator.more', $social_number='Recuperador Capacitado en empresarialidad' )}}"  >
                     <img src="{{ asset ('Recursos/imagenes/mmas.png')}}"></a></td>
			</tr>
		</tbody>
	</table>
	<br>
	<br>
	<div class="TwoButtons">
	<a href="{{ route('person.create') }}" class="button" style="text-decoration:none;">Registrar Personas a los indicadores</a>
	<a href="{{ route('activity.create')}}" class="button" style="text-decoration:none;">Registrar Actividades</a>
	</div>
	<br>
	<br>
@endsection
