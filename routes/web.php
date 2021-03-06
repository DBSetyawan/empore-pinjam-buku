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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/viewYajraUsers', 'HomeController@viewYajraUsers')->name('yajra-db-user');
Route::get('/userlist', 'HomeController@userlist')->name('userlist');
Route::resource('users', 'UserController');

Route::post('users/update', 'UserController@update')->name('user.update');

Route::get('users/destroy/{id}', 'UserController@destroy');
