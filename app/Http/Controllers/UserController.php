<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $usuarios = User::where('name', 'like', "%$query%")
                        ->orWhere('email', 'like', "%$query%")
                        ->paginate(10);

        return view('usuarios.index', compact('usuarios', 'query'));
    }

    public function asignarRol(Request $request, User $user)
    {
        $request->validate([
            'rol' => 'required|in:cliente,mecanico'
        ]);

        $user->syncRoles([$request->input('rol')]);

        return redirect()->route('usuarios.index')->with('success', 'Rol asignado correctamente');
    }
}
