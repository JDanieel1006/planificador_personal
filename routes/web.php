<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\AsignacionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/panel-administrativo', [HomeController::class,'index'])->name('home');

// RUTAS PROYECTO

Route::resource('/proyectos',ProyectoController::class);

Route::post('/proyectos',[ProyectoController::class,'store'])->name('proyectos');

Route::get('/proyectos.fetchall',[ProyectoController::class, 'fetchAll'])->name('proyectos.fetchAll');

Route::get('/proyectos.edit',[ProyectoController::class,'edit'])->name('proyectos.edit');

Route::post('/proyectos.update',[ProyectoController::class,'update'])->name('proyectos.update');

Route::delete('/proyectos.delete',[ProyectoController::class,'delete'])->name('proyectos.delete');

// RUTAS USUARIO

Route::resource('/usuarios',UsuariosController::class);

Route::post('/usuarios',[UsuariosController::class,'store'])->name('usuarios');

Route::get('/usuarios.fetchall',[UsuariosController::class, 'fetchAll'])->name('fetchAll');

Route::get('/edit',[UsuariosController::class,'edit'])->name('edit');

Route::post('/update',[UsuariosController::class,'update'])->name('update');

Route::delete('/delete',[UsuariosController::class,'delete'])->name('delete');

// RUTAS ASIGNACION

Route::resource('/asignacion',AsignacionController::class);

Route::get('/proyectos.fetchall',[AsignacionController::class, 'fetchAll'])->name('proyectos.fetchAll');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
