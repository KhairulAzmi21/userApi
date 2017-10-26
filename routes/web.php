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

Route::resource('/user', 'UsersController');
Route::resource('/religion', 'ReligionController');
Route::resource('/race', 'RaceController');
Route::resource('/state', 'StateController');
Route::resource('/gender', 'GenderController');
Route::resource('/status', 'StatusController');
