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

Route::get('hrd', 'IndexController@index');
Route::post('postlogin', 'IndexController@login');
Route::get('hrd/home', 'IndexController@home');
Route::get('hrd/dashboard', 'MenuController@mainmenu');

// Route::get('home', 'HomeController@index')->name('home');
