<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/', 'FoodController@index');

// Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/food', 'FoodController', ['except' => ['index']]);
Route::get('/compare/{id}', 'FoodController@compare_index')->name('food.compare');
