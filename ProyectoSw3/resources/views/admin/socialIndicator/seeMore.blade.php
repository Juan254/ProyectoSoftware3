@extends('admin.template.main')

@section('title', 'Ver Más' )

@section('title3', 'Lista de personas en el indicador social y sus actividades')

@section('content')
	<table>	
		<thead>
			<th>Nombre de la Actividad</th>
			<th>Eliminar Actividad</th>
		</thead>	
		<tbody>
			@foreach($activities as $activity)

				<tr>
					<td>{{ $activity->name}}</td>
					<td><a onclick="return confirm('¿Desea eliminar la actividad del indicador?')" href="{{ route('activity.destroy', [$activity->id, $social->social_number]) }}"  >
                     <img src="{{ asset ('Recursos/imagenes/eliminar.png')}}"></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<br>
	<br>
	<h2 style="text-align:center;">Lista de personas en el indicador</h2>
	<br>
		<table>	
		<thead>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Cédula</th>
			<th>Edad</th>
			<th>Municipio</th>
			<th>Eliminar Persona</th>
		</thead>	
		<tbody>
			@foreach($persons as $person)

				<tr>
					<td>{{ $person->name}}</td>
					<td>{{ $person->last_name }}</td>
					<td>{{ $person->id_card }}</td>
					<td>{{ $person->age}}</td>
					<td>{{ $person->municipality }}</td>
					<td><a onclick="return confirm('¿Desea a la persona del indicador?')" href="{{ route('person.destroy', [$person->id, $social->social_number]) }}"  >
                     <img src="{{ asset ('Recursos/imagenes/eliminar.png')}}"></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $persons->render() !!}
	<br>
	<a href="{{ route('socialIndicator.index') }}" class="button" style="text-decoration:none;">Atras</a>
	<br>
@endsection
