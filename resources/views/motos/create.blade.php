@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Moto</h1>
    <form method="POST" action="{{ route('motos.store') }}">
        @csrf
        <div class="form-group">
            <label for="marca">Marca:</label>
            <input type="text" id="marca" name="marca" class="form-control">
        </div>
        <div class="form-group">
            <label for="modelo">Modelo:</label>
            <input type="text" id="modelo" name="modelo" class="form-control">
        </div>
        <div class="form-group">
            <label for="numero_placa">Número de Placa:</label>
            <input type="text" id="numero_placa" name="numero_placa" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Registrar Moto</button>
    </form>
</div>
@endsection
