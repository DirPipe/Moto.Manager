<?php
namespace App\Http\Controllers;

use App\Models\InventarioRepuesto;
use App\Models\Repuesto;
use Illuminate\Http\Request;

class InventarioRepuestoController extends Controller
{
    public function index()
    {
        $inventario = InventarioRepuesto::all();
        return view('inventario.index', compact('inventario'));
    }

    public function create()
    {
        $repuestos = Repuesto::all();
        return view('inventario.create', compact('repuestos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'repuesto_id' => 'required|exists:repuestos,id',
            'cantidad_disponible' => 'required|integer',
        ]);

        InventarioRepuesto::create($request->all());

        return redirect()->route('inventario.index');
    }

    public function edit(InventarioRepuesto $inventario)
    {
        $repuestos = Repuesto::all();
        return view('inventario.edit', compact('inventario', 'repuestos'));
    }

    public function update(Request $request, InventarioRepuesto $inventario)
    {
        $request->validate([
            'repuesto_id' => 'required|exists:repuestos,id',
            'cantidad_disponible' => 'required|integer',
        ]);

        $inventario->update($request->all());

        return redirect()->route('inventario.index');
    }

    public function destroy(InventarioRepuesto $inventario)
    {
        $inventario->delete();
        return redirect()->route('inventario.index');
    }
}
