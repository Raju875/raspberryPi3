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

Route::get('/','WelcomeController@index');
Route::get('/project','WelcomeController@project');
Route::get('/howto','WelcomeController@howTo');
//Route::get('/about','WelcomeController@about');
Route::get('/pdf','WelcomeController@pdf');
Route::get('/team','WelcomeController@team');
Route::get('/contact','WelcomeController@contact');
