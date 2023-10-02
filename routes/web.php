<?php

use App\Models\Estudiante;
use App\Models\Matricula;
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

Route::get('/', function () {
    return view('login');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::resource('estudiante',EstudianteController::class)->middleware('auth');;
Route::resource('materia',MateriaController::class)->middleware('auth');;
Route::resource('matricula',MatriculaController::class)->middleware('auth');;
