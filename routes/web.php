<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\AdminPages\RegistrosController;
use App\Http\Controllers\AdminPages\AsistenciaController;
use App\Http\Controllers\AdminPages\EstadisticaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});




Route::get('/admin/registros', [RegistrosController::class, 'index'])->name('admin.registros.index');
Route::get('/admin/registros/empleados', [RegistrosController::class, 'index'])->name('admin.registros.empleados.index');
Route::get('/admin/registros/usuario', [RegistrosController::class, 'index'])->name('admin.registros.usuario.index');


Route::get('/admin/asistencia', [AsistenciaController::class, 'index'])->name('admin.asistencia.index');
Route::get('/admin/estadistica', [EstadisticaController::class, 'index'])->name('admin.estadistica.index');
Route::get('/perfil', [PerfilController::class, 'perfil'])->name('perfil');
