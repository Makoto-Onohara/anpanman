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

Route::get('/', 'gameController@showTop')->name('top');
Route::get('/anpanman/uploadForm', 'uploadController@uploadForm')->name('uploadForm');
Route::post('/anpanman/upload', 'uploadController@upload')->name('upload');
Route::get('/anpanman', 'uploadController@showCharacter')->name('show');

Route::get('/anpanman/game', 'gameController@anpanmanGame')->name('game');