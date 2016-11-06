@extends('admin.template.main')

@section('title', 'Lista de registros de materiales')

@section('title3', 'Lista de registros de material')

@section('content')
	<table>	
		<thead>
			<th>id</th>
			<th>Material</th>
			<th>Proveedor</th>
			<th>Cantidad (kg)</th>
			<th>Precio por kilogramo</th>
			<th>Municipio</th>
			<th>Fecha</th>
			<th>Editar</th>
			<th>Eliminar</th>
		</thead>	
		<tbody>
			@foreach($material_provider as $provider)

				<tr>
					<td>{{ $provider->id}}</td>
					<td>{{ $provider->material_type }}</td>
					<td>{{ $provider->provider_type }}</td>
					<td>{{ $provider->quantity }}</td>
					<td>{{ $provider->buy_price }}</td>
					<td>{{ $provider->Municipality }}</td>
					<td>{{ $provider->date }}</td>
					<td><a  href="{{ route('material_provider.edit', $provider->id) }}"  >
                    <img src="{{ asset ('Recursos/imagenes/editar.png')}}"></a></td>
					<td><a onclick="return confirm('¿Desea eliminar el registro?')" href="{{ route('material_provider.destroy', $provider->id) }}"  >
                     <img src="{{ asset ('Recursos/imagenes/eliminar.png')}}"></a></td>
				</tr>

			@endforeach
		</tbody>
	</table>
	{!! $material_provider->render() !!}



	<br>
	<br>
	<a href="{{ route('material_provider.create') }}" class="button" style="text-decoration:none;">Realizar registro de material</a>
	<br>
@endsection
