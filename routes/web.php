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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< Updated upstream
Route::get('/forum', function(){
    return view('master');
});
Route::get('/create', 'PertanyaanController@form');
Route::post('/pertanyaan', 'PertanyaanController@store');
=======

Route::get('/test', function () {
    return view('pertanyaan');
});
>>>>>>> Stashed changes
