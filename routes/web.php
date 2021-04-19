<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
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

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/bienvenida/{nombre?}/{apellido?}', function ($nombre = 'Viajero', $apellido = null) {
    
    return view('./paginas-inicio/bienvenida', compact('nombre', 'apellido'));
}); */

/* Route::get('/contacto', function () {
    
    return view('./paginas-inicio/contacto');
}); */

Route::get('/bienvenida/{nombre?}/{apellido?}', [InicioController::class, 'bienvenida'] );

Route::get('/contacto', [InicioController::class, 'contacto'] );

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
