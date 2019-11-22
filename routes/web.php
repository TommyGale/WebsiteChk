<?php


Route:: resource('posts', 'ForumsController');

Route::get('/' ,'MainController@home');

Route::get('/about' ,'MainController@about');

Route::get('/contact' ,'MainController@contact');

Route::post('/posts/{post}/comments', 'PostCommentsController@store');

Route::patch('/comments/{comment}', 'PostCommentsController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
