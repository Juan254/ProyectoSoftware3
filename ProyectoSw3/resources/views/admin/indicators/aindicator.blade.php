@extends('admin.template.main')

@section('title', 'Cantidad de material por Comuna y C. acopio')

@section('title3', 'Cantidad de material por centro de acopio en kg')

@section('content')
	<table>	
		<thead>
			<th>Municipio</th>
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
				<td>Armenia</td>
				<td>{{ $c_acopio->armenia_pet }}</td>
				<td>{{ $c_acopio->armenia_board }}</td>
				<td>{{ $c_acopio->armenia_archive }}</td>
				<td>{{ $c_acopio->armenia_blow }}</td>
				<td>{{ $c_acopio->armenia_junk }}</td>
				<td>{{ $c_acopio->armenia_metal }}</td>
				<td>{{ $c_acopio->armenia_plega }}</td>
				<td>{{ $c_acopio->armenia_glass }}</td>
				<td>{{ $c_acopio->armenia_frame }}</td>
			</tr>
			<tr>
				<td>Buenavista</td>
				<td>{{ $c_acopio->buena_pet }}</td>
				<td>{{ $c_acopio->buena_board }}</td>
				<td>{{ $c_acopio->buena_archive }}</td>
				<td>{{ $c_acopio->buena_blow }}</td>
				<td>{{ $c_acopio->buena_junk }}</td>
				<td>{{ $c_acopio->buena_metal }}</td>
				<td>{{ $c_acopio->buena_plega }}</td>
				<td>{{ $c_acopio->buena_glass }}</td>
				<td>{{ $c_acopio->buena_frame }}</td>
			</tr>
			<tr>
				<td>Calarcá</td>
				<td>{{ $c_acopio->calarca_pet }}</td>
				<td>{{ $c_acopio->calarca_board }}</td>
				<td>{{ $c_acopio->calarca_archive }}</td>
				<td>{{ $c_acopio->calarca_blow }}</td>
				<td>{{ $c_acopio->calarca_junk }}</td>
				<td>{{ $c_acopio->calarca_metal }}</td>
				<td>{{ $c_acopio->calarca_plega }}</td>
				<td>{{ $c_acopio->calarca_glass }}</td>
				<td>{{ $c_acopio->calarca_frame }}</td>
			</tr>
			<tr>
				<td>Circasia</td>
				<td>{{ $c_acopio->circasia_pet }}</td>
				<td>{{ $c_acopio->circasia_board }}</td>
				<td>{{ $c_acopio->circasia_archive }}</td>
				<td>{{ $c_acopio->circasia_blow }}</td>
				<td>{{ $c_acopio->circasia_junk }}</td>
				<td>{{ $c_acopio->circasia_metal }}</td>
				<td>{{ $c_acopio->circasia_plega }}</td>
				<td>{{ $c_acopio->circasia_glass }}</td>
				<td>{{ $c_acopio->circasia_frame }}</td>
			</tr>
			<tr>
				<td>Córdoba</td>
				<td>{{ $c_acopio->cordoba_pet }}</td>
				<td>{{ $c_acopio->cordoba_board }}</td>
				<td>{{ $c_acopio->cordoba_archive }}</td>
				<td>{{ $c_acopio->cordoba_blow }}</td>
				<td>{{ $c_acopio->cordoba_junk }}</td>
				<td>{{ $c_acopio->cordoba_metal }}</td>
				<td>{{ $c_acopio->cordoba_plega }}</td>
				<td>{{ $c_acopio->cordoba_glass }}</td>
				<td>{{ $c_acopio->cordoba_frame }}</td>
			</tr>
			<tr>
				<td>Filandia</td>
				<td>{{ $c_acopio->filandia_pet }}</td>
				<td>{{ $c_acopio->filandia_board }}</td>
				<td>{{ $c_acopio->filandia_archive }}</td>
				<td>{{ $c_acopio->filandia_blow }}</td>
				<td>{{ $c_acopio->filandia_junk }}</td>
				<td>{{ $c_acopio->filandia_metal }}</td>
				<td>{{ $c_acopio->filandia_plega }}</td>
				<td>{{ $c_acopio->filandia_glass }}</td>
				<td>{{ $c_acopio->filandia_frame }}</td>
			</tr>
			<tr>
				<td>Génova</td>
				<td>{{ $c_acopio->genova_pet }}</td>
				<td>{{ $c_acopio->genova_board }}</td>
				<td>{{ $c_acopio->genova_archive }}</td>
				<td>{{ $c_acopio->genova_blow }}</td>
				<td>{{ $c_acopio->genova_junk }}</td>
				<td>{{ $c_acopio->genova_metal }}</td>
				<td>{{ $c_acopio->genova_plega }}</td>
				<td>{{ $c_acopio->genova_glass }}</td>
				<td>{{ $c_acopio->genova_frame }}</td>
			</tr>
			<tr>
				<td>La Tebaida</td>
				<td>{{ $c_acopio->tebaida_pet }}</td>
				<td>{{ $c_acopio->tebaida_board }}</td>
				<td>{{ $c_acopio->tebaida_archive }}</td>
				<td>{{ $c_acopio->tebaida_blow }}</td>
				<td>{{ $c_acopio->tebaida_junk }}</td>
				<td>{{ $c_acopio->tebaida_metal }}</td>
				<td>{{ $c_acopio->tebaida_plega }}</td>
				<td>{{ $c_acopio->tebaida_glass }}</td>
				<td>{{ $c_acopio->tebaida_frame }}</td>
			</tr>
			<tr>
				<td>Montenegro</td>
				<td>{{ $c_acopio->montenegro_pet }}</td>
				<td>{{ $c_acopio->montenegro_board }}</td>
				<td>{{ $c_acopio->montenegro_archive }}</td>
				<td>{{ $c_acopio->montenegro_blow }}</td>
				<td>{{ $c_acopio->montenegro_junk }}</td>
				<td>{{ $c_acopio->montenegro_metal }}</td>
				<td>{{ $c_acopio->montenegro_plega }}</td>
				<td>{{ $c_acopio->montenegro_glass }}</td>
				<td>{{ $c_acopio->montenegro_frame }}</td>
			</tr>
			<tr>
				<td>Pijao</td>
				<td>{{ $c_acopio->pijao_pet }}</td>
				<td>{{ $c_acopio->pijao_board }}</td>
				<td>{{ $c_acopio->pijao_archive }}</td>
				<td>{{ $c_acopio->pijao_blow }}</td>
				<td>{{ $c_acopio->pijao_junk }}</td>
				<td>{{ $c_acopio->pijao_metal }}</td>
				<td>{{ $c_acopio->pijao_plega }}</td>
				<td>{{ $c_acopio->pijao_glass }}</td>
				<td>{{ $c_acopio->pijao_frame }}</td>
			</tr>
			<tr>
				<td>Quimbaya</td>
				<td>{{ $c_acopio->quimbaya_pet }}</td>
				<td>{{ $c_acopio->quimbaya_board }}</td>
				<td>{{ $c_acopio->quimbaya_archive }}</td>
				<td>{{ $c_acopio->quimbaya_blow }}</td>
				<td>{{ $c_acopio->quimbaya_junk }}</td>
				<td>{{ $c_acopio->quimbaya_metal }}</td>
				<td>{{ $c_acopio->quimbaya_plega }}</td>
				<td>{{ $c_acopio->quimbaya_glass }}</td>
				<td>{{ $c_acopio->quimbaya_frame }}</td>
			</tr>
			<tr>
				<td>Salento</td>
				<td>{{ $c_acopio->salento_pet }}</td>
				<td>{{ $c_acopio->salento_board }}</td>
				<td>{{ $c_acopio->salento_archive }}</td>
				<td>{{ $c_acopio->salento_blow }}</td>
				<td>{{ $c_acopio->salento_junk }}</td>
				<td>{{ $c_acopio->salento_metal }}</td>
				<td>{{ $c_acopio->salento_plega }}</td>
				<td>{{ $c_acopio->salento_glass }}</td>
				<td>{{ $c_acopio->salento_frame }}</td>
			</tr>
		</tbody>
	</table>
	<br>
	<br>

	<h2 class="centered">Cantidad total de material de las comuna en kg</h2>

	<table>	
		<thead>
			<th>Municipio</th>
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
				<td>Armenia</td>
				<td>{{ $comuna->pet }}</td>
				<td>{{ $comuna->board }}</td>
				<td>{{ $comuna->archive }}</td>
				<td>{{ $comuna->blow }}</td>
				<td>{{ $comuna->junk }}</td>
				<td>{{ $comuna->metal }}</td>
				<td>{{ $comuna->plega }}</td>
				<td>{{ $comuna->glass }}</td>
				<td>{{ $comuna->frame }}</td>
			</tr>
		</tbody>
	</table>
	<br>
	<br>
@endsection
