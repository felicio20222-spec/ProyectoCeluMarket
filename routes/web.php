<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
Route::get('/celulares', function () {
    return view('celulares');
});