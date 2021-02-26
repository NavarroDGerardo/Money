<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('movements.index');
});

Route::resource('users', 'UsersController');
Route::resource('profiles', 'ProfilesController');
Route::resource('categories', 'CategoriesController');
Route::resource('movements', 'MovementsController');
