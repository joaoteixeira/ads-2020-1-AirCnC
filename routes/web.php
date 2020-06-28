<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login-usuario', function () {
    return view('pages.login-usuario');
});

Route::get('/usuario', function () {
    return view('pages.dashboard-usuario');
});

Route::get('/usuario/atualizar', function () {
    return view('pages.usuario.atualizar-usuario');
});

Route::get('/empresa', function () {
    return view('pages.empresa.dashboard-empresa');
});

Route::get('/empresa/atualizar', function () {
    return view('pages.empresa.atualizar-empresa');
});

Route::get('/criar-vaga', function () {
    return view('pages.empresa.criar-vaga');
});

Route::resource('/empresa', 'EmpresaController');

Route::resource('/usuario', 'UsuarioController');
