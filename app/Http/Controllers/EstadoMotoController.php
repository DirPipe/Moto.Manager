<?php

namespace App\Http\Controllers;

use App\Models\EstadoMoto;
use App\Models\Moto;
use App\Models\User;
use Illuminate\Http\Request;

class EstadoMotoController extends Controller
{
    public function index()
    {
        $estados = EstadoMoto::all();
        return view('estado_motos.index', compact('estados'));
    }

    public function create()
    {
        $motos = Moto::all();
        $mecanicos = User::role('mecanico')->get();
        return view('estado_motos.create', compact('motos', 'mecanicos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'moto_id' => 'required|exists:motos,id',
            'mecanico_id' => 'required|exists:users,id',
            'estado' => 'required|string',
        ]);

        EstadoMoto::create($request->all());

        return redirect()->route('estado_motos.index');
    }

    public function show(EstadoMoto $estado)
    {
        return view('estado_motos.show', compact('estado'));
    }

    public function edit(EstadoMoto $estado)
    {
        $motos = Moto::all();
        $mecanicos = User::role('mecanico')->get();
        return view('estado_motos.edit', compact('estado', 'motos', 'mecanicos'));
    }

    public function update(Request $request, EstadoMoto $estado)
    {
        $request->validate([
            'moto_id' => 'required|exists:motos,id',
            'mecanico_id' => 'required|exists:users,id',
            'estado' => 'required|string',
        ]);

        $estado->update($request->all());

        return redirect()->route('estado_motos.index');
    }

    public function destroy(EstadoMoto $estado)
    {
        $estado->delete();
        return redirect()->route('estado_motos.index');
    }
}

