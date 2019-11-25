<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        return view('welcome')->with([
        
    'greet' => 'Welcome to the website.You should check out our Posts page to get involved in some discussions!'
    


    ]);
    
    }
    
     public function about() {
          return view('about')->with([
    'check1' =>
    ['Routing',
     'Layout files with Blade',
     'Sending data to views',
     'Controllers',
     'Database integration through migrations and the Eloquent ORM',
     'Forms including CSRF protection and data modification',
     'Data cleansing and validation',
     'Registration and authentication',
     'Authorisation and Laravel Gate'],
    
    'check2' =>
    ['Mailables',
    'Events and notifications',
    'Collections',
    'Sessions',
    'Test Driven Development with PHPUnit',
    'Eloquent relationships and techniques',
    'Advanced authentication techniques']

    ]);
    }
    
     public function contact() {
         
    return view('contact')->with([
    'contacts' =>
    ['Email address: ThomasGale@gmail.com',
    'Phone number: 07845193244',
    'Address: 21 Fake St',
    'Postcode: WF10 5X3'],
    
    'help' => 'If you have any queries feel free to contact us!'

    ]);
    }
}
