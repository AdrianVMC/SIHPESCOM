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
    Route::get('/search-subject-alu', function () { return view('student.search-subject-alu');})->name('search-subject-alu');
    Route::get('/search-group-alu',  function () { return view('student.search-group-alu');})->name('search-group-alu');
    Route::get('/search-teacher-alu', function () { return view('student.search-teacher-alu');})->name('search-teacher-alu');
});


//Login administrator
Route::get('/login-admin', [AuthController::class, 'showLoginAdmin'])->name('show.login-admin');
Route::post('/login-admin', [AuthController::class, 'loginAdmin'])->name('loginAdmin');


//Protected Routes supervisor
Route::middleware('auth:admin')->group(function () {
    Route::get('/panel-admin', function () { return view('panel-admin');})->name('panel-admin');
    Route::get('/search-subject-admin', function () { return view('admin.search-subject-admin');})->name('search-subject-admin');
    Route::get('/search-teacher-admin', function () { return view('admin.search-teacher-admin');})->name('search-teacher-admin');
    Route::get('/search-group-admin', function () { return view('admin.search-group-admin');})->name('search-group-admin');
});



//Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Catch-all login route
Route::get('/login', function () {
    if (request()->is('admin*') || request()->is('panel-admin*') || request()->is('login-admin*')) {
        return redirect()->route('show.login-admin');
    }
    return redirect()->route('main');
})->name('login');
