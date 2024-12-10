@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Moto</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Marca: {{ $moto->marca }}</h5>
            <p class="card-text">Modelo: {{ $moto->modelo }}</p>
            <p class="card-text">Número de Placa: {{ $moto->numero_placa }}</p>
            <a href="{{ route('motos.edit', $moto->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('motos.destroy', $moto->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
    <h2>Reparaciones</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Costo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($moto->reparaciones as $reparacion)
            <tr>
                <td>{{ $reparacion->descripcion }}</td>
                <td>{{ $reparacion->fecha }}</td>
                <td>{{ $reparacion->costo }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
