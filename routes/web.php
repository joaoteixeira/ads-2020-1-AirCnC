<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'));

Route::get('empresa/selecionar', fn () => view('pages.empresa.selecionar'));

Route::resource('empresa', 'EmpresaController');

Route::resource('usuario', 'UsuarioController');
