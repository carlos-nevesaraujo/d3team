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

//Home Controller
Route::get('/', 'HomeController@index');
// Route::resource('/', 'HomeController');

// Route::get('/', function () {
//     return view('index');
// });
