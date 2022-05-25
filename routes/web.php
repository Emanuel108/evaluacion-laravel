<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\DependenciaController;
use App\Http\Controllers\DetalleActividadController;

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

Route::get('/', [ActividadController::class, 'index'])->name('actividad.index');

Route::get('/actividad/{id}', [ActividadController::class, 'show'])->name('actividad.show');

Route::get('/actividad/{id}', [DetalleActividadController::class, 'edit'])->name('actividad.edit');

Route::put('/actividad/{id}', [DetalleActividadController::class, 'update'])->name('actividad.update');

Route::get('/dependencias', [DependenciaController::class, 'index'])->name('dependencia.index');

