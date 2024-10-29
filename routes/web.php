<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\AdminPages\RegistrosController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});




Route::get('/admin/registros', [RegistrosController::class, 'index'])->name('admin.registros.index');
Route::get('/perfil', [PerfilController::class, 'perfil'])->name('perfil');
