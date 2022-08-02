<?php

use Illuminate\Support\Facades\Route;

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
    return view('Venta.index');
})->name('index');
Route::get('/pendientes', function () {
    return view('Ventas.pedidospendiente');
})->name('pendientes');
Route::get('/completados', function () {
    return view('Ventas.completados');
})->name('completados');
Route::get('/almacen', function () {
    return view('Ventas.almacen');
})->name('almacen');
Route::get('/generar', function () {
    return view('Ventas.generar');
})->name('generar');

Auth::routes();
Route::resource('productos', App\Http\Controllers\ProductoController::class);
Route::resource('empresas', App\Http\Controllers\EmpresaController::class);
Route::resource('usuarios', App\Http\Controllers\UsuarioController::class);
Route::resource('clientes', App\Http\Controllers\ClienteController::class);
Route::resource('generar_pedidos', App\Http\Controllers\GenerarPedidoController::class);
Route::resource('tickets', App\Http\Controllers\TicketController::class);
Route::resource('ventas', App\Http\Controllers\VentaController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


