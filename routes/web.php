<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesorController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/buscar-profesor/{id}', [ProfesorController::class, 'mostrar']);
//Para buscar por materia
Route::get('/buscar-por-materia', [ProfesorController::class, 'vistaPorMateria']);
Route::get('/materia/{id}/profesores', [ProfesorController::class, 'profesoresPorMateria']);

