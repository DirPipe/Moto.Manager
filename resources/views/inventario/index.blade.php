@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Inventario de Repuestos</h1>
    <a href="{{ route('inventario.create') }}" class="btn btn-primary">Agregar al Inventario</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Repuesto</th>
                <th>Cantidad Disponible</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inventario as $item)
            <tr>
                <td>{{ $item->repuesto->nombre }}</td>
                <td>{{ $item->cantidad_disponible }}</td>
                <td>
                    <a href="{{ route('inventario.edit', $item->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('inventario.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
