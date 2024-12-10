@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Moto</h1>
    <form method="POST" action="{{ route('motos.update', $moto->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="marca">Marca:</label>
            <input type="text" id="marca" name="marca" class="form-control" value="{{ $moto->marca }}">
        </div>
        <div class="form-group">
            <label for="modelo">Modelo:</label>
            <input type="text" id="modelo" name="modelo" class="form-control" value="{{ $moto->modelo }}">
        </div>
        <div class="form-group">
            <label for="numero_placa">Número de Placa:</label>
            <input type="text" id="numero_placa" name="numero_placa" class="form-control" value="{{ $moto->numero_placa }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Moto</button>
    </form>
</div>
@endsection
