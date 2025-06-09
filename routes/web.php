<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('main');

// Login Alumno
Route::get('/login-alu', [AuthController::class, 'showLogin'])->name('show.login-alu');
Route::post('/login-alu', [AuthController::class, 'loginAlu'])->name('login');

Route::get('/panel-alu', function () {
    return view('panel-alu');
})->name('panel-alu')->middleware('auth:alumno');

// Login Admin
Route::get('/login-admin', function () {
    return view('login-admin');
})->name('login-admin');

Route::get('/panel-admin', function () {
    return view('panel-admin');
})->name('panel-admin');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
