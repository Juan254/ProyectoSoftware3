@extends('admin.template.main')

@section('title', 'Lista de Precios de material por Kilogramo (COP)')

@section('title3', 'Lista de Precios de material por kilogramo (COP)')

@section('content')
	
	
	<table>	
		<thead>
			<th>Material</th>
			<th>Precio del material por kilogramo (COP)</th>
		</thead>	
		<tbody>
				<tr>
					<td>Pet</td>
					<td>${{ $constant->pet }}</td>
				</tr>
				<tr>
					<td>Cartón</td>
					<td>${{ $constant->board }}</td>
				</tr>
				<tr>
					<td>Archivo</td>
					<td>${{ $constant->archive }}</td>
				</tr>
				<tr>
					<td>Soplado</td>
					<td>${{ $constant->blow }}</td>
				</tr>
				<tr>
					<td>Chatarra</td>
					<td>${{ $constant->junk }}</td>
				</tr>
				<tr>
					<td>Metal</td>
					<td>${{ $constant->metal }}</td>
				</tr>
				<tr>
					<td>Plega</td>
					<td>${{ $constant->plega }}</td>
				</tr>
				<tr>
					<td>Vidrio</td>
					<td>${{ $constant->glass }}</td>
				</tr>																				
				<tr>
					<td>Marco</td>
					<td>${{ $constant->frame }}</td>
				</tr>
		</tbody>
	</table>

	<br>
	<br>
	<a href="{{ route('constant.edit', $constant->id) }}" class="button" style="text-decoration:none;">Editar Precios</a>
	<br>
@endsection
