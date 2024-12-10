@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Repuesto</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nombre: {{ $repuesto->nombre }}</h5>
            <p class="card-text">Cantidad: {{ $repuesto->cantidad }}</p>
            <p class="card-text">Precio: {{ $repuesto->precio }}</p>
            <a href="{{ route('repuestos.edit', $repuesto->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('repuestos.destroy', $repuesto->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection
