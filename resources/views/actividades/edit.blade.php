@extends('layouts.app')

@section('content')
	<br>
	<div class="card">
	<div class="card-header">
	    ¿Estás seguro de asignar el presupuesto?
	</div>
	    <div class="card-body">
	    <form method="post" action="{{ route('actividad.update', $iIdActividad) }}">
	    	@csrf
	    	@method('PUT')
	    	<button type="submit" class="btn btn-success">Actualizar</button>
	    </form>
	    </div>
	</div>

@endsection