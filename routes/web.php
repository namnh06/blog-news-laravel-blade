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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/user/{id}/restore', 'UserController@restore')->name('user.restore');

Route::get('/user/trashed', 'UserController@trashed')->name('user.trashed');

Route::get('/user/show-trashed/{id}', 'UserController@showTrashed')->name('user.show-trashed');

Route::delete('/user/{id}/delete-trashed', 'UserController@deleteTrashed')->name('user.delete-trashed');

Route::resources([
    'user' => 'UserController',
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
