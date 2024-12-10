<?php

namespace App\Http\Controllers;

use App\Models\Moto;
use Illuminate\Http\Request;

class MotoController extends Controller
{
    public function index()
    {
        $motos = Moto::where('user_id', auth()->id())->get();
        return view('motos.index', compact('motos'));
    }

    public function create()
    {
        return view('motos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'numero_placa' => 'required|string|max:255|unique:motos',
        ]);

        Moto::create([
            'user_id' => auth()->id(),
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'numero_placa' => $request->numero_placa,
        ]);

        return redirect()->route('motos.index');
    }

    public function show(Moto $moto)
    {
        return view('motos.show', compact('moto'));
    }

    public function edit(Moto $moto)
    {
        return view('motos.edit', compact('moto'));
    }

    public function update(Request $request, Moto $moto)
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'numero_placa' => 'required|string|max:255|unique:motos,numero_placa,' . $moto->id,
        ]);

        $moto->update($request->all());

        return redirect()->route('motos.index');
    }

    public function destroy(Moto $moto)
    {
        $moto->delete();
        return redirect()->route('motos.index');
    }
}
