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

Route::get('/', 'MainController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category', 'CategoryController@index');

Route::get('/news/{id}', 'MainController@show');

Route::get('/category/{id}', 'CategoryController@show');

Route::resource('/subscribe', 'SubscribeController');

Route::post('/search', 'SearchController@index');
