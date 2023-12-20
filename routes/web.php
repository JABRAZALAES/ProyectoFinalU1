<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource("clientes", App\Http\Controllers\ClienteController::class);
Route::resource("productos", App\Http\Controllers\ProductoController::class);
Route::resource("ventas", App\Http\Controllers\VentaController::class);
Route::get("ventas/{id}/agregarProducto", [App\Http\Controllers\VentaController::class, "agregarProducto"])->name("ventas.agregarProducto");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
