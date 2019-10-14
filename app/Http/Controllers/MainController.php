<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        return view('welcome');
    }
    
     public function about() {
         return view('about');
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
