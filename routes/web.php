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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/first', 'FirstController@index')->name('first');
Route::get('/updown', 'UpDownController@index')->name('updown');
Route::get('/smile', 'SmileController@index')->name('smile');
Route::get('/trivia', 'TriviaController@index')->name('trivia');
