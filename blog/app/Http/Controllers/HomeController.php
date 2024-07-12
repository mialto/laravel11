<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //__invoke solo se usa cuando el controlador solo tiene un método.
    public function __invoke(){
        return view('home');
    }
}
