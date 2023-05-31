<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Ruta para Home
Route::get('/', [\App\Http\Controllers\Controller::class, 'index'])->name('home.index');

//Alumnos
Route::get('/listar_alumnos', [\App\Http\Controllers\AlumnoController::class, 'index'])->name('alumno.index');
Route::get('/agregar_alumnos', [\App\Http\Controllers\AlumnoController::class, 'create'])->name('alumno.create');
Route::post('/store_alumnos', [\App\Http\Controllers\AlumnoController::class, 'store'])->name('alumno.store');
Route::get('/edit_alumnos/{id}', [\App\Http\Controllers\AlumnoController::class, 'edit'])->name('alumno.edit');
Route::put('/update_alumnos/{id}', [\App\Http\Controllers\AlumnoController::class, 'update'])->name('alumno.update');
Route::get('/show_alumnos/{id}', [\App\Http\Controllers\AlumnoController::class, 'show'])->name('alumno.show');
Route::delete('/destroy_alumnos/{id}', [\App\Http\Controllers\AlumnoController::class, 'destroy'])->name('alumno.destroy');

//Grados
Route::get('/listar_grados', [\App\Http\Controllers\GradoController::class, 'index'])->name('grado.index');

//Cursos
Route::get('/listar_cursos', [\App\Http\Controllers\CursoController::class, 'index'])->name('curso.index');

//Sucursales
Route::get('/listar_sucursales', [\App\Http\Controllers\SucursalController::class, 'index'])->name('sucursal.index');

//Reportes
Route::get('/report_alumnos', [\App\Http\Controllers\ReporteController::class, 'index'])->name('report.index');
