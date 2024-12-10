@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Reparación</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Moto: {{ $reparacion->moto->numero_placa }}</h5>
            <p class="card-text">Descripción: {{ $reparacion->descripcion }}</p>
            <p class="card-text">Fecha: {{ $reparacion->fecha }}</p>
            <p class="card-text">Costo: {{ $reparacion->costo }}</p>
            <a href="{{ route('reparaciones.edit', $reparacion->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('reparaciones.destroy', $reparacion->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection
