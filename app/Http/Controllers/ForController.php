<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForController extends Controller
{
    public function index()
    {
        
        $numbers = [];

        for ($i = 1; $i <= 10; $i++) {
            $numbers[] = $i;
        }

        return view('for.index', compact('numbers'));
    }
}
