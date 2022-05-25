@extends('layouts.app')

@section('content')
	
	<br>

    @if(Session::has('success'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<i class="bi bi-check-circle-fill"></i> {{Session::get('success')}}
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
	@endif	

	<h3>Actividades</h3>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Presupuesto</th>
				<th>Acción</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($actividades as $actividad)
			<tr>
				<td>{{ $actividad->iIdActividad }}</td>
				<td>{{ $actividad->vActividad }}</td>
				<td>{{ $actividad->nPresupuestoAutorizado }}</td>
				<td>
					<a href="{{ route('actividad.edit', $actividad->iIdActividad) }}" title="Asignar presupuesto" class="btn btn-success btn-sm" role="button">
						<i class="bi bi-check-circle-fill"></i>
					</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{{ $actividades->links() }}

@endsection