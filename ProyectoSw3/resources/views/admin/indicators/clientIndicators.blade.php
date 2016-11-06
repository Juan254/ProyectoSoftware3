
@extends('admin.template.main')

@section('title', 'Cantidad de material por cliente')

@section('title3', 'Cantidad de material por clientes en kg')

@section('content')
	<table>	
		<thead>
			<th>Tipo de cliente</th>
			<th>PET</th>
			<th>Cartón</th>
			<th>Archivo</th>
			<th>Soplado</th>
			<th>Chatarra</th>
			<th>Metal</th>
			<th>Plega</th>
			<th>Vidrio</th>
			<th>Marco</th>
		</thead>	
		<tbody>
			<tr>
				<td>Chatarrero</td>
				<td>{{ $cliente->junkman_pet }}</td>
				<td>{{ $cliente->junkman_board }}</td>
				<td>{{ $cliente->junkman_archive }}</td>
				<td>{{ $cliente->junkman_blow }}</td>
				<td>{{ $cliente->junkman_junk }}</td>
				<td>{{ $cliente->junkman_metal }}</td>
				<td>{{ $cliente->junkman_plega }}</td>
				<td>{{ $cliente->junkman_glass }}</td>
				<td>{{ $cliente->junkman_frame }}</td>
			</tr>
			<tr>
				<td>Asociación</td>
				<td>{{ $cliente->association_pet }}</td>
				<td>{{ $cliente->association_board }}</td>
				<td>{{ $cliente->association_archive }}</td>
				<td>{{ $cliente->association_blow }}</td>
				<td>{{ $cliente->association_junk }}</td>
				<td>{{ $cliente->association_metal }}</td>
				<td>{{ $cliente->association_plega }}</td>
				<td>{{ $cliente->association_glass }}</td>
				<td>{{ $cliente->association_frame }}</td>
			</tr>
			<tr>
				<td>Recuperador de oficio</td>
				<td>{{ $cliente->recuperator_pet }}</td>
				<td>{{ $cliente->recuperator_board }}</td>
				<td>{{ $cliente->recuperator_archive }}</td>
				<td>{{ $cliente->recuperator_blow }}</td>
				<td>{{ $cliente->recuperator_junk }}</td>
				<td>{{ $cliente->recuperator_metal }}</td>
				<td>{{ $cliente->recuperator_plega }}</td>
				<td>{{ $cliente->recuperator_glass }}</td>
				<td>{{ $cliente->recuperator_frame }}</td>
			</tr>
			<tr>
				<td>Reciclador</td>
				<td>{{ $cliente->recycler_pet }}</td>
				<td>{{ $cliente->recycler_board }}</td>
				<td>{{ $cliente->recycler_archive }}</td>
				<td>{{ $cliente->recycler_blow }}</td>
				<td>{{ $cliente->recycler_junk }}</td>
				<td>{{ $cliente->recycler_metal }}</td>
				<td>{{ $cliente->recycler_plega }}</td>
				<td>{{ $cliente->recycler_glass }}</td>
				<td>{{ $cliente->recycler_frame }}</td>
			</tr>
			<tr>
				<td>Punto de fábrica</td>
				<td>{{ $cliente->fabric_pet }}</td>
				<td>{{ $cliente->fabric_board }}</td>
				<td>{{ $cliente->fabric_archive }}</td>
				<td>{{ $cliente->fabric_blow }}</td>
				<td>{{ $cliente->fabric_junk }}</td>
				<td>{{ $cliente->fabric_metal }}</td>
				<td>{{ $cliente->fabric_plega }}</td>
				<td>{{ $cliente->fabric_glass }}</td>
				<td>{{ $cliente->fabric_frame }}</td>
			</tr>
		</tbody>
	</table>
	<br>
	<br>
@endsection
