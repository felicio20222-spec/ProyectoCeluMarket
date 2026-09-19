<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CarritoController;

Route::get('/', function () {
    return view('welcome');
});

// Login
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.process');

// Registro
Route::get('/registro', function () {
    return view('registro');
});

// Celulares
Route::get('/celulares', [ProductoController::class, 'index']);

// Carrito
Route::post('/carrito/agregar/{producto_id}', [CarritoController::class, 'agregar'])
    ->middleware('auth')
    ->name('carrito.agregar');

Route::get('/carrito', [CarritoController::class, 'index'])
    ->middleware('auth')
    ->name('carrito.index');

Route::post('/carrito/aumentar/{id}', [CarritoController::class, 'aumentar'])
    ->middleware('auth')
    ->name('carrito.aumentar');

Route::post('/carrito/disminuir/{id}', [CarritoController::class, 'disminuir'])
    ->middleware('auth')
    ->name('carrito.disminuir');

    Route::post('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])
    ->middleware('auth')
    ->name('carrito.eliminar');