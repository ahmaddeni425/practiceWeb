<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhileController extends Controller
{
    public function index()
    {
        
        $products = [
            (object) ['id' => 1, 'name' => 'Produk A', 'stock' => 5],
            (object) ['id' => 2, 'name' => 'Produk B', 'stock' => 0],
            (object) ['id' => 3, 'name' => 'Produk C', 'stock' => 10],
            (object) ['id' => 4, 'name' => 'Produk D', 'stock' => 3],
        ];

        
        $availableProducts = [];
        $index = 0;

        while ($index < count($products)) {
            if ($products[$index]->stock > 0) {
                $availableProducts[] = $products[$index];
            }
            $index++;
        }

        
        return view('while.index', compact('availableProducts'));
    }
}
