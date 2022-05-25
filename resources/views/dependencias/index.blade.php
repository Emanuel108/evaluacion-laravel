@extends('layouts.app')

@section('content')
	<h3>Dependencias</h3>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Inicio</th>
				<th>Fin</th>
				<th>Acción</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($dependencias as $dependencia)
			<tr>
				<th scope="row">{{ $dependencia->iIdDependencia }}</th>
				<td>{{ $dependencia->vDependencia }}</td>
				<td>{{ $dependencia->vNombreCorto }}</td>
				<td>
					@if($dependencia->iActivo == 1)
						<span class="badge text-bg-success">Activo</span>
					@else
						<span class="badge text-bg-danger">Inactivo</span>
					@endif
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{{ $dependencias->links() }}

@endsection