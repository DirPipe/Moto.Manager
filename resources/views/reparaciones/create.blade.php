{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Reparación</h1>
    <form method="POST" action="{{ route('reparaciones.store') }}">
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
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" class="form-control">
        </div>
        <div class="form-group">
            <label for="costo">Costo:</label>
            <input type="text" id="costo" name="costo" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Registrar Reparación</button>
    </form>
</div>
@endsection --}}

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Reparación</h1>
    <form method="POST" action="{{ route('reparaciones.store') }}">
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
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" class="form-control">
        </div>
        <div class="form-group">
            <label for="costo">Costo:</label>
            <input type="text" id="costo" name="costo" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Registrar Reparación</button>
    </form>
</div>
@endsection --}}

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Reparación</h1>
    <form method="POST" action="{{ route('reparaciones.store') }}">
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
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" class="form-control">
        </div>
        <div class="form-group">
            <label for="costo">Costo:</label>
            <input type="text" id="costo" name="costo" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Registrar Reparación</button>
    </form>
</div>
@endsection --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Reparación</h1>
    <form method="POST" action="{{ route('reparaciones.store') }}">
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
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" class="form-control">
        </div>
        <div class="form-group">
            <label for="costo">Costo:</label>
            <input type="text" id="costo" name="costo" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Registrar Reparación</button>
    </form>
</div>
@endsection

 

