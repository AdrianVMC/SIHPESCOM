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

Route::get('/searchteacher', function () {
    return view('searchteacher');
})->name('searchteacher');

Route::get('/searchteacher2', function () {
    return view('searchteacher2');
})->name('searchteacher2');

Route::get('/search-assignament', function () {
    return view('search-assignament');
})->name('search-assignament');

Route::get('/search-assignament2', function () {
    return view('search-assignament2');
})->name('search-assignament2');

Route::get('/search-group', function () {
    return view('search-group');
})->name('search-group');

Route::get('/search-group2', function () {
    return view('search-group2');
})->name('search-group2');
