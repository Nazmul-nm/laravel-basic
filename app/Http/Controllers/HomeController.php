<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function one(){
    return view('home');
   }
   
   public function about(){
    return view('frontend.about');
   } 
   
   public function contacts(){
     return view('frontend.contacts');
   }
}
