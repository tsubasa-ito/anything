<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/', 'FoodController@index');
Route::get('/create', 'FoodController@create');
Route::post('/food/create', 'FoodController@store');
Route::get('/food/edit/{id}', 'FoodController@edit');
Route::post('/food/update/{id}', 'FoodController@update');
Route::delete('/food/delete/{id}', 'FoodController@delete');

Route::get('/compare/{id}', 'FoodController@compare_index');