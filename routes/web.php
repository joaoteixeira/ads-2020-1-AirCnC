<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'));
Route::get('empresa/selecionar', fn () => view('pages.empresa.selecionar'));
Route::get('usuario/selecionar', fn () => view('pages.usuario.selecionar'));

Route::get('empresa/login', 'EmpresaController@login')->name('empresa.login');
Route::get('empresa/fazerLogin', 'EmpresaController@fazerLogin')->name('empresa.fazerLogin');
Route::get('usuario/login', 'UsuarioController@login')->name('usuario.login');
Route::get('usuario/fazerLogin', 'UsuarioController@fazerLogin')->name('usuario.fazerLogin');
Route::get('usuario/escolher', 'UsuarioController@escolherUsuario')->name('usuario.escolherUsuario');

Route::resource('empresa', 'EmpresaController');
Route::resource('usuario', 'UsuarioController');
