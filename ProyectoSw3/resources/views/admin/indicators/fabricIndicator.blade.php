@extends('admin.template.main')

@section('title', 'Cantidad de material total')

@section('title3', 'Cantidad total de material que llega a la fabrica')

@section('content')
	<table>	
		<thead>
			<th>#</th>
			<th>Tipo de material</th>
			<th>Cantidad total de material en kg</th>
		</thead>	
		<tbody>
			<tr>
				<td>1</td>
				<td>PET</td>
				<td>{{ $constant->pet }}</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Cartón</td>
				<td>{{ $constant->board }}</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Vidrio</td>
				<td>{{ $constant->glass }}</td>
			</tr>
			<tr>
				<td>4</td>
				<td>Archivo</td>
				<td>{{ $constant->archive }}</td>
			</tr>
			<tr>
				<td>5</td>
				<td>Soplado</td>
				<td>{{ $constant->blow }}</td>
			</tr>
			<tr>
				<td>6</td>
				<td>Chatarra</td>
				<td>{{ $constant->junk }}</td>
			</tr>
			<tr>
				<td>7</td>
				<td>Marco</td>
				<td>{{ $constant->frame }}</td>
			</tr>
			<tr>
				<td>8</td>
				<td>Metales</td>
				<td>{{ $constant->metal }}</td>
			</tr>
			<tr>
				<td>9</td>
				<td>Plega</td>
				<td>{{ $constant->plega }}</td>
			</tr>

		</tbody>
	</table>
	<br>
	<br>
	<br>
@endsection
