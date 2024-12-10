<?php

// namespace App\Http\Controllers;

// use App\Models\Reparacion;
// use App\Models\Moto;
// use Illuminate\Http\Request;
// use App\Models\User;

// class ReparacionController extends Controller
// {
//     public function index()
//     {
//         $reparaciones = Reparacion::all();
//         $mecanicos = User::role('mecanico')->get();
//         return view('reparaciones.index', compact('reparaciones'));
//     }

//     public function create()
//     {
//         $motos = Moto::all();
//         $mecanicos = User::role('mecanico')->get();
//         return view('reparaciones.create', compact('motos'));
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'moto_id' => 'required|exists:motos,id',
//             'descripcion' => 'required|string',
//             'fecha' => 'required|date',
//             'costo' => 'required|numeric',
//             'mecanico_id' => 'required|exists:users,id',
//         ]);

//         Reparacion::create([ 'moto_id' => $request->moto_id, 'mecanico_id' => $request->mecanico_id, 
//         'descripcion' => $request->descripcion, 'fecha' => $request->fecha, 'costo' => $request->costo, ]);

//         Reparacion::create($request->all());

//         // return redirect()->route('reparaciones.index');
//         return redirect()->route('reparaciones.index')->with('success', 'Reparación registrada exitosamente!');
//     }

//     public function show(Reparacion $reparacion)
//     {
//         return view('reparaciones.show', compact('reparacion'));
//     }

//     public function edit(Reparacion $reparacion)
//     {
//         $motos = Moto::all();
//         return view('reparaciones.edit', compact('reparacion', 'motos'));
//     }

//     public function update(Request $request, Reparacion $reparacion)
//     {
//         $request->validate([
//             'moto_id' => 'required|exists:motos,id',
//             'descripcion' => 'required|string',
//             'fecha' => 'required|date',
//             'costo' => 'required|numeric',
//         ]);

//         $reparacion->update($request->all());

//         return redirect()->route('reparaciones.index');
//     }

//     public function destroy(Reparacion $reparacion)
//     {
//         $reparacion->delete();
//         return redirect()->route('reparaciones.index');
//     }
// }

namespace App\Http\Controllers;

use App\Models\Moto;
use App\Models\User;
use App\Models\Reparacion;
use Illuminate\Http\Request;

class ReparacionController extends Controller
{
    /**
     * Mostrar la lista de reparaciones.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reparaciones = Reparacion::all();
        return view('reparaciones.index', compact('reparaciones'));
    }

    /**
     * Mostrar el formulario para crear una nueva reparación.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $motos = Moto::all();
        $mecanicos = User::role('mecanico')->get();
        return view('reparaciones.create', compact('motos', 'mecanicos'));
    }

    /**
     * Almacenar una nueva reparación en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'moto_id' => 'required|exists:motos,id',
            'descripcion' => 'required|string',
            'fecha' => 'required|date',
            'costo' => 'required|numeric',
            'mecanico_id' => 'required|exists:users,id',
        ]);

        Reparacion::create([
            'moto_id' => $request->moto_id,
            'mecanico_id' => $request->mecanico_id,
            'descripcion' => $request->descripcion,
            'fecha' => $request->fecha,
            'costo' => $request->costo,
        ]);

        return redirect()->route('reparaciones.index')->with('success', 'Reparación registrada exitosamente!');
    }
}

