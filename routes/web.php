<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\ReparacionController;
use App\Http\Controllers\RepuestoController;
use App\Http\Controllers\InventarioRepuestoController;
use App\Http\Controllers\EstadoMotoController;

Route::get('/', function () {
    return view('info');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dash', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

route::get('/dash', function () {
    return view('dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   
});

require __DIR__.'/auth.php';



Route::middleware(['auth'])->group(function () {
    Route::resource('motos', MotoController::class);
    Route::resource('reparaciones', ReparacionController::class);
    Route::resource('repuestos', RepuestoController::class);
    Route::resource('inventario', InventarioRepuestoController::class);
    Route::resource('estado_motos', EstadoMotoController::class);
});

use App\Http\Controllers\UserController;

Route::middleware(['auth'])->group(function () {
    Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');
    Route::post('/usuarios/{user}/asignar-rol', [UserController::class, 'asignarRol'])->name('usuarios.asignar-rol');
});

