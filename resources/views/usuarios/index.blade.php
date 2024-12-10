@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gestión de Usuarios</h1>

    <form method="GET" action="{{ route('usuarios.index') }}" class="form-inline mb-3">
        <input type="text" name="query" class="form-control mr-2" placeholder="Buscar usuarios..." value="{{ $query }}">
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo Electrónico</th>
                <th>Rol Actual</th>
                <th>Asignar Nuevo Rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ implode(', ', $usuario->getRoleNames()->toArray()) }}</td>
                    <td>
                        <form method="POST" action="{{ route('usuarios.asignar-rol', $usuario) }}">
                            @csrf
                            <div class="form-group">
                                <select name="rol" class="form-control">
                                    <option value="cliente">Cliente</option>
                                    <option value="mecanico">Mecanico</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Asignar Rol</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $usuarios->links() }}
</div>
@endsection
