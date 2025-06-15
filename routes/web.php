<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


//Main page
Route::get('/', function () {
    return view('main');
})->name('main');


//Login student
Route::get('/login-alu', [AuthController::class, 'showLogin'])->name('show.login-alu');
Route::post('/login-alu', [AuthController::class, 'loginAlu'])->name('loginAlu');


//Protected Routes student
Route::middleware('auth:alumno')->group(function () {
    Route::get('/panel-alu', function () { return view('panel-alu');})->name('panel-alu');

});


//Login administrator
Route::get('/login-admin', [AuthController::class, 'showLoginAdmin'])->name('show.login-admin');
Route::post('/login-admin', [AuthController::class, 'loginAdmin'])->name('loginAdmin');


//Protected Routes supervisor
Route::middleware('auth:admin')->group(function () {
    Route::get('/panel-admin', function () { return view('panel-admin');})->name('panel-admin');
});



//Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
