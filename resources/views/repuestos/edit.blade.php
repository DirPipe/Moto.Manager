@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Repuesto</h1>
    <form method="POST" action="{{ route('repuestos.update', $repuesto->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $repuesto->nombre }}">
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" class="form-control" value="{{ $repuesto->cantidad }}">
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="text" id="precio" name="precio" class="form-control" value="{{ $repuesto->precio }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Repuesto</button>
    </form>
</div>
@endsection
