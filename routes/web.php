<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Actividad9Controller;

// Ruta para el listado principal (index)
Route::get('/actividad9', [Actividad9Controller::class, 'index'])->name('actividad9.index');

// Ruta para la papelera
Route::get('/actividad9/papelera', [Actividad9Controller::class, 'papelera'])->name('actividad9.papelera');

// Resto de rutas del recurso (create, store, destroy, etc.)
Route::resource('actividad9', Actividad9Controller::class)->except(['index']);

Route::get('/actividad9/create', [Actividad9Controller::class, 'create'])->name('actividad9.create');

// Rutas del recurso
Route::resource('actividad9', Actividad9Controller::class)->except(['create']);