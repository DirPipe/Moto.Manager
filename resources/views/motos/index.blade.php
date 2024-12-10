@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Motos</h1>
    <a href="{{ route('motos.create') }}" class="btn btn-primary">Registrar Nueva Moto</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Número de Placa</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($motos as $moto)
            <tr>
                <td>{{ $moto->marca }}</td>
                <td>{{ $moto->modelo }}</td>
                <td>{{ $moto->numero_placa }}</td>
                <td>
                    <a href="{{ route('motos.show', $moto->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('motos.edit', $moto->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('motos.destroy', $moto->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
