<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $string = "Hello";

        return view("home", compact("string"));
    }
}
