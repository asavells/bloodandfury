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

Route::get('/about', 'StaticController@about');
Route::get('/loot', 'StaticController@loot');
Route::get('/recruitment', 'StaticController@recruitment');
Route::get('/calendar', 'CalendarTaskController@index');

Route::get('login/discord', 'Auth\LoginController@redirectToProvider');
Route::get('login/discord/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/user', 'UserController@index');
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('character', 'CharacterController');
Route::resource('calendartask', 'CalendarTaskController');
