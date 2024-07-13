<?php

use App\Core\Route;

Route::get('/categores', 'CategoryController@categores');
Route::get('/items', 'CategoryController@items');
Route::get('/', 'CategoryController@categores');
Route::get('/test', 'CategoryController@test');
