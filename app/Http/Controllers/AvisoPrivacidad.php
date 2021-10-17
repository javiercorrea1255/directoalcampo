<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvisoPrivacidad extends Controller
{
   public function __invoke() {
    
    return view('privacidad');
   }   
}
