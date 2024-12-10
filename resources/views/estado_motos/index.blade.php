@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Estado de las Motos</h1>
    <a href="{{ route('estado_motos.create') }}" class="btn btn-primary">Registrar Estado</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Moto</th>
                <th>Mecánico</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estados as $estado)
            <tr>
                <td>{{ $estado->moto->numero_placa }}</td>
                <td>{{ $estado->mecanico->name }}</td>
                <td>{{ $estado->estado }}</td>
                <td>
                    <a href="{{ route('estado_motos.edit', $estado->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('estado_motos.destroy', $estado->id) }}" method="POST" style="display:inline-block;">
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
