<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// VISTAS

Route::get('/panel-administrativo', [HomeController::class,'index'])->name('home');

Route::resource('/proyectos',ProyectoController::class);

Route::post('/proyectos',[ProyectoController::class,'store'])->name('proyectos');

Route::get('/fetchall',[ProyectoController::class, 'fetchAll'])->name('fetchAll');

Route::get('/edit',[ProyectoController::class,'edit'])->name('edit');

Route::post('/update',[ProyectoController::class,'update'])->name('update');

Route::delete('/delete',[ProyectoController::class,'delete'])->name('delete');

Route::resource('/usuarios',UsuariosController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
