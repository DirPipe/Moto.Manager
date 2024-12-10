@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Repuesto</h1>
    <form method="POST" action="{{ route('repuestos.store') }}">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" class="form-control">
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="text" id="precio" name="precio" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Agregar Repuesto</button>
    </form>
</div>
@endsection
