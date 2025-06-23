<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\DomPdfController;


// Página principal
Route::get('/', function () {
    return view('main');
})->name('main');

// Login para alumnos
Route::get('/login-alu', [AuthController::class, 'showLogin'])->name('show.login-alu');
Route::post('/login-alu', [AuthController::class, 'loginAlu'])->name('loginAlu');

//Registro alumnos
Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register-alu');
Route::post('/register', [AuthController::class, 'registerAlu'])->name('register-alu');  

// Rutas protegidas para alumnos
Route::middleware('auth:alumno')->group(function () {

    Route::get('/panel-alu', function () {
        return view('panel-alu');
    })->name('panel-alu');

    Route::get('/search-subject-alu', function () {
        return view('student.search-subject-alu');
    })->name('search-subject-alu');

    Route::get('/search-group-alu', function () {
        return view('student.search-group-alu');
    })->name('search-group-alu');

    // Vista del formulario de búsqueda por profesor
    Route::get('/search-teacher-alu', function () {
        return view('student.search-teacher-alu');
    })->name('search-teacher-alu');

    // Procesa la búsqueda por nombre y redirige al perfil
    Route::get('/procesar-busqueda-profesor', [ProfesorController::class, 'buscarPorNombre'])->name('procesar.busqueda.profesor');

    // Perfil del profesor (PROTEGIDO para alumnos)
    Route::get('/buscar-profesor/{id}', [ProfesorController::class, 'mostrar'])->name('mostrar.profesor');
    
    // Búsqueda por materia (pública o protégela si deseas)
    Route::get('/buscar-por-materia', [ProfesorController::class, 'vistaPorMateria']);
    Route::get('/materia/{id}/profesores', [ProfesorController::class, 'profesoresPorMateria']);
});


// Login para administrador
Route::get('/login-admin', [AuthController::class, 'showLoginAdmin'])->name('show.login-admin');
Route::post('/login-admin', [AuthController::class, 'loginAdmin'])->name('loginAdmin');

// Rutas protegidas para administradores
Route::middleware('auth:admin')->group(function () {
    Route::get('/panel-admin', function () {
        return view('panel-admin');
    })->name('panel-admin');

    Route::get('/search-subject-admin', function () {
        return view('admin.search-subject-admin');
    })->name('search-subject-admin');

    Route::get('/search-teacher-admin', function () {
        return view('admin.search-teacher-admin');
    })->name('search-teacher-admin');

    Route::get('/search-group-admin', function () {
        return view('admin.search-group-admin');
    })->name('search-group-admin');
});

//PDF docente
Route::get('/docente/{id}/pdf', [DomPdfController::class, 'GeneratePDF'])->name('docente.pdf');

// Logout general
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Redirección general a login según tipo
Route::get('/login', function () {
    if (request()->is('admin*') || request()->is('panel-admin*') || request()->is('login-admin*')) {
        return redirect()->route('show.login-admin');
    }
    return redirect()->route('main');
})->name('login');
