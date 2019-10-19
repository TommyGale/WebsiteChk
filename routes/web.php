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

Route:: resource('posts', 'ForumsController');

Route::get('/' ,'MainController@home');

Route::get('/about' ,'MainController@about');

Route::get('/contact' ,'MainController@contact');

Route::patch('/comments/{comment}', 'PostCommentsController@update');






