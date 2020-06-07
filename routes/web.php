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

Route::get('/usuario', function () {
    return view('pages.dashboard-usuario');
});

Route::get('/usuario/atualizar', function () {
    return view('pages.atualizar-usuario');
});

Route::get('/empresa', function () {
    return view('pages.dashboard-empresa');
});

Route::get('/empresa/atualizar', function () {
    return view('pages.atualizar-empresa');
});
