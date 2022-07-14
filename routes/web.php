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
    return view('Ventas.index');
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


