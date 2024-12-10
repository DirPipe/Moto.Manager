{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reparaciones</h1>
    <a href="{{ route('reparaciones.create') }}" class="btn btn-primary">Registrar Nueva Reparación</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Moto</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Costo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reparaciones as $reparacion)
            <tr>
                <td>{{ $reparacion->moto->numero_placa }}</td>
                <td>{{ $reparacion->descripcion }}</td>
                <td>{{ $reparacion->fecha }}</td>
                <td>{{ $reparacion->costo }}</td>
                <td>
                    <a href="{{ route('reparaciones.show', $reparacion->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('reparaciones.edit', $reparacion->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('reparaciones.destroy', $reparacion->id) }}" method="POST" style="display:inline-block;">
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
@endsection --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Reparaciones</h1>
    <a href="{{ route('reparaciones.create') }}" class="btn btn-primary">Registrar Nueva Reparación</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Moto</th>
                <th>Mecánico</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Costo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reparaciones as $reparacion)
            <tr>
                <td>{{ $reparacion->moto->numero_placa }}</td>
                <td>{{ $reparacion->mecanico->name }}</td>
                <td>{{ $reparacion->descripcion }}</td>
                <td>{{ $reparacion->fecha }}</td>
                <td>{{ $reparacion->costo }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
