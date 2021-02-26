<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('usuarios', 'UsuariosController');
Route::resource('profiles', 'ProfilesController');
Route::resource('categories', 'CategoriesController');
