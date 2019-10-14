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

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    
    return view('contact')->with([
    'contacts' =>
    ['Email address: ThomasGale@gmail.com',
    'Phone number: 07845193244',
    'Address: 21 Fake St',
    'Postcode: WF10 5X3'],
    
    'help' => 'If you have any queries feel free to contact us!'

    ]);
    
    
    
});

