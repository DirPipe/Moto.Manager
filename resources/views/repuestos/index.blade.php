@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Inventario de Repuestos</h1>
    <a href="{{ route('repuestos.create') }}" class="btn btn-primary">Agregar Nuevo Repuesto</a>
    <form method="GET" action="{{ route('repuestos.index') }}" class="form-inline mt-4">
        <input type="text" name="query" class="form-control mr-2" placeholder="Buscar repuestos...">
        <button type="submit" class="btn btn-secondary">Buscar</button>
    </form>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($repuestos as $repuesto)
            <tr>
                <td>{{ $repuesto->nombre }}</td>
                <td>{{ $repuesto->cantidad }}</td>
                <td>{{ $repuesto->precio }}</td>
                <td>
                    <a href="{{ route('repuestos.show', $repuesto->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('repuestos.edit', $repuesto->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('repuestos.destroy', $repuesto->id) }}" method="POST" style="display:inline-block;">
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
