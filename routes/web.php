<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'SpaceNewsController@index');
Route::get('form', 'SpaceNewsController@showForm')->name('form.show');
Route::post('get_form', 'UserController@saveUser')->name('get_form.show');
