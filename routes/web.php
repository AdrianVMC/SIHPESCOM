<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DomPdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('main'); })->name('main');

Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register-alu');
Route::post('/register', [AuthController::class, 'registerAlu'])->name('register-alu');

Route::get('/login-alu', [AuthController::class, 'showLogin'])->name('show.login-alu');
Route::post('/login-alu', [AuthController::class, 'loginAlu'])->name('loginAlu');

Route::middleware('auth:alumno')->group(function () {
    Route::get('/panel-alu', function () { return view('panel-alu'); })->name('panel-alu');

    Route::get('/form-search-teacher-alu', fn() => view('student.search-teacher-alu'))->name('form-search-teacher-alu');
    Route::get('/form-search-subject-alu', fn() => view('student.search-subject-alu'))->name('form-search-subject-alu');
    Route::get('/form-search-group-alu', fn() => view('student.search-group-alu'))->name('form-search-group-alu');

    Route::get('/search-teacher-alu', [SearchController::class, 'showSearchTeacher'])->name('search-teacher-alu');
    Route::get('/search-subject-alu', [SearchController::class, 'showSearchSubject'])->name('search-subject-alu');
    Route::get('/search-group-alu', [SearchController::class, 'showSearchGroup'])->name('search-group-alu');

    Route::get('/generate-teacher-pdf', [SearchController::class, 'redirectToTeacherPDF'])->name('process.search.teacher');
});

Route::get('/login-admin', [AuthController::class, 'showLoginAdmin'])->name('show.login-admin');
Route::post('/login-admin', [AuthController::class, 'loginAdmin'])->name('loginAdmin');

Route::middleware('auth:admin')->group(function () {
    Route::get('/panel-admin', fn() => view('panel-admin'))->name('panel-admin');

    Route::get('/form-search-teacher-admin', fn() => view('admin.search-teacher-admin'))->name('form-search-teacher-admin');
    Route::get('/form-search-subject-admin', fn() => view('admin.search-subject-admin'))->name('form-search-subject-admin');
    Route::get('/form-search-group-admin', fn() => view('admin.search-group-admin'))->name('form-search-group-admin');

    Route::get('/search-teacher-admin', [SearchController::class, 'showSearchTeacherAdmin'])->name('search-teacher-admin');
    Route::get('/search-subject-admin', [SearchController::class, 'showSearchSubjectAdmin'])->name('search-subject-admin');
    Route::get('/search-group-admin', [SearchController::class, 'showSearchGroupAdmin'])->name('search-group-admin');
});

Route::get('/teacher/{id}/pdf', [DomPdfController::class, 'GeneratePDF'])->name('docente.pdf');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/login', function () {
    if (request()->is('admin*') || request()->is('panel-admin*') || request()->is('login-admin*')) {
        return redirect()->route('show.login-admin');
    }
    return redirect()->route('main');
})->name('login');
