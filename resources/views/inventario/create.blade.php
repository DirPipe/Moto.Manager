@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar al Inventario</h1>
    <form method="POST" action="{{ route('inventario.store') }}">
        @csrf
        <div class="form-group">
            <label for="repuesto_id">Repuesto:</label>
            <select id="repuesto_id" name="repuesto_id" class="form-control">
                @foreach($repuestos as $repuesto)
                <option value="{{ $repuesto->id }}">{{ $repuesto->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="cantidad_disponible">Cantidad Disponible:</label>
            <input type="number" id="cantidad_disponible" name="cantidad_disponible" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Agregar al Inventario</button>
    </form>
</div>
@endsection
