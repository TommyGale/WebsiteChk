<?php

use Illuminate\Http\Request;

Route:: resource('posts', 'ForumsController');

Route::resource('subscriptions', 'SubscriptionsController');

Route::get('/' ,'MainController@home');

//Route::get('/', function()
//{
  //$user = App\User::first();
  
  //$post = $user->posts()->create([
  
  //'topic' => 'A tagged post',
  //'summary' => 'All tagg//ed up'
  
  //]);
  
  //$post->tags()->attach(1);
//});

Route::get('/about' ,'MainController@about');

Route::get('/contact' ,'MainController@contact');

Route::post('/posts/{post}/comments', 'PostCommentsController@store');

Route::patch('/comments/{comment}', 'PostCommentsController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/github', 'Auth\AuthController@redirectToProvider');

Route::get('auth/github/callback', 'Auth\AuthController@handleProviderCallback');

