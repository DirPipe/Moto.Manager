@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Estado de la Moto</h1>
    <form method="POST" action="{{ route('estado_motos.store') }}">
        @csrf
        <div class="form-group">
            <label for="moto_id">Moto:</label>
            <select id="moto_id" name="moto_id" class="form-control">
                @foreach($motos as $moto)
                <option value="{{ $moto->id }}">{{ $moto->numero_placa }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="mecanico_id">Mecánico:</label>
            <select id="mecanico_id" name="mecanico_id" class="form-control">
                @foreach($mecanicos as $mecanico)
                <option value="{{ $mecanico->id }}">{{ $mecanico->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <textarea id="estado" name="estado" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Registrar Estado</button>
    </form>
</div>
@endsection
