@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Estado de la Moto</h1>
    <form method="POST" action="{{ route('estado_motos.update', $estado->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="moto_id">Moto:</label>
            <select id="moto_id" name="moto_id" class="form-control">
                @foreach($motos as $moto)
                <option value="{{ $moto->id }}" {{ $estado->moto_id == $moto->id ? 'selected' : '' }}>{{ $moto->numero_placa }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="mecanico_id">Mecánico:</label>
            <select id="mecanico_id" name="mecanico_id" class="form-control">
                @foreach($mecanicos as $mecanico)
                <option value="{{ $mecanico->id }}" {{ $estado->mecanico_id == $mecanico->id ? 'selected' : '' }}>{{ $mecanico->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <textarea id="estado" name="estado" class="form-control">{{ $estado->estado }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Estado</button>
    </form>
</div>
@endsection
