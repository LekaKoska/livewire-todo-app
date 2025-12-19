<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo', fn() => view('welcome'));

Route::get('/register', fn() => view('register'))->name('register');
Route::get('test', fn() => view('welcome'));
