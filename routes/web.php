<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login-empresa', function () {
    return view('pages.login-empresa');
});

Route::get('/login-usuario', function () {
    return view('pages.login-usuario');
});
