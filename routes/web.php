<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;
use App\Models\cliente;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('clientes', clienteController::class);// sustituye todas las lineas de codigo de abajo.

// Route::get('/inicio', [clienteController::class, 'index']);
// Route::get('/crear', [clienteController::class, 'create']);
// Route::get('/actualizar', [clienteController::class, 'update']);
// Route::get('/insertar', [clienteController::class, 'store']);
// Route::get('/borrar', [clienteController::class, 'destroy']);

