@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Reparación</h1>
    <form method="POST" action="{{ route('reparaciones.update', $reparacion->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="moto_id">Moto:</label>
            <select id="moto_id" name="moto_id" class="form-control">
                @foreach($motos as $moto)
                <option value="{{ $moto->id }}" {{ $reparacion->moto_id == $moto->id ? 'selected' : '' }}>{{ $moto->numero_placa }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" class="form-control">{{ $reparacion->descripcion }}</textarea>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" class="form-control" value="{{ $reparacion->fecha }}">
        </div>
        <div class="form-group">
            <label for="costo">Costo:</label>
            <input type="text" id="costo" name="costo" class="form-control" value="{{ $reparacion->costo }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Reparación</button>
    </form>
</div>
@endsection
