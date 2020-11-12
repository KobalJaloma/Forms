<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'LoginController@login');

//postLogin
Route::post('/Home','LoginController@valid');

//pintores Routes
Route::get('/alexandre','PintoresController@alexandre');

Route::get('/jan','PintoresController@jan');

Route::get('/max','PintoresController@max');

Route::get('/omar','PintoresController@omar');
