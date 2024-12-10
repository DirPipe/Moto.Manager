<?php

namespace App\Http\Controllers;

use App\Models\Repuesto;
use Illuminate\Http\Request;

class RepuestoController extends Controller
{
    public function index()
    {
        $repuestos = Repuesto::all();
        return view('repuestos.index', compact('repuestos'));
    }

    public function create()
    {
        return view('repuestos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'cantidad' => 'required|integer',
            'precio' => 'required|numeric',
        ]);

        Repuesto::create($request->all());

        return redirect()->route('repuestos.index');
    }

    public function show(Repuesto $repuesto)
    {
        return view('repuestos.show', compact('repuesto'));
    }

    public function edit(Repuesto $repuesto)
    {
        return view('repuestos.edit', compact('repuesto'));
    }

    public function update(Request $request, Repuesto $repuesto)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'cantidad' => 'required|integer',
            'precio' => 'required|numeric',
        ]);

        $repuesto->update($request->all());

        return redirect()->route('repuestos.index');
    }

    public function destroy(Repuesto $repuesto)
    {
        $repuesto->delete();
        return redirect()->route('repuestos.index');
    }
}
