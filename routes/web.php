<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComprometidosController;
use App\Http\Controllers\ContactanosController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::post('crud/buscar', [PersonaController::class, 'buscarP'])->name('personas.buscar');

 Route::get('/login', [PersonaController::class, 'login'])->name('iniciar.sesion');
Route::post('validar', [PersonaController::class, 'validar'])->name('login.validar');

Route::get('main', [PersonaController::class, 'listar'])->name('personas.listar');

Route::get('matrimonios', [ComprometidosController::class, 'index'])->name('comprometidos.index');

Route::get('main/comprometer', [PersonaController::class, 'comprometer'])->name('personas.comprometer');
Route::post('matrimonios/casar', [ComprometidosController::class, 'casar'])->name('comprometidos.casar');

Route::get('main/agregar', [PersonaController::class, 'agregarP'])->name('personas.agregar');
Route::post('main/guardar', [PersonaController::class, 'guardar'])->name('personas.guardar');

Route::get('main/editar/{persona}', [PersonaController::class, 'editarP'])->name('personas.editar');
Route::put('main/modificar/{persona}', [PersonaController::class, 'modificar'])->name('personas.modificar');

Route::get('main/eliminar/{persona}', [PersonaController::class, 'eliminar'])->name('personas.eliminar');
Route::get('matrimonios/anular/{compromiso}', [ComprometidosController::class, 'anular'])->name('comprometidos.anular');

Route::get('matrimonios/detalles/{compromiso}', [ComprometidosController::class, 'detalles'])->name('comprometidos.detalles');

Route::get('main/contactanos', [ContactanosController::class, 'contactanos'])->name('contactanos.contactanos');
Route::post('main/contactanos/enviar', [ContactanosController::class, 'enviar'])->name('contactanos.enviar');








Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
