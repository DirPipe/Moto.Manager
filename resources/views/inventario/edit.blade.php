@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Inventario</h1>
    <form method="POST" action="{{ route('inventario.update', $inventario->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="repuesto_id">Repuesto:</label>
            <select id="repuesto_id" name="repuesto_id" class="form-control">
                @foreach($repuestos as $repuesto)
                <option value="{{ $repuesto->id }}" {{ $inventario->repuesto_id == $repuesto->id ? 'selected' : '' }}>{{ $repuesto->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="cantidad_disponible">Cantidad Disponible:</label>
            <input type="number" id="cantidad_disponible" name="cantidad_disponible" class="form-control" value="{{ $inventario->cantidad_disponible }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Inventario</button>
    </form>
</div>
@endsection
