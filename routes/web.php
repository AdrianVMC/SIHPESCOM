<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('main');


Route::get('/login-alu', function () {
    return view('login-alu');
})->name('login-alu');

Route::get('/login-admin', function () {
    return view('login-admin');
})->name('login-admin');;


Route::get('/panel-alu', function () {
    return view('panel-alu');
})->name('panel-alu');


Route::get('/panel-admin', function () {
    return view('panel-admin');
})->name('panel-admin');
