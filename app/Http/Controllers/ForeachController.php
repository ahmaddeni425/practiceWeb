<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForeachController extends Controller
{
    public function index()
    {
        
        $products = [
            (object) ['id' => 1, 'name' => 'Produk A', 'price' => 150],
            (object) ['id' => 2, 'name' => 'Produk B', 'price' => 90],
            (object) ['id' => 3, 'name' => 'Produk C', 'price' => 200],
            (object) ['id' => 4, 'name' => 'Produk D', 'price' => 80],
        ];

        
        $expensiveProducts = [];

        
        foreach ($products as $product) {
            
            if ($product->price > 100) {
                $expensiveProducts[] = $product;
            }
        }

       
        return view('foreach.index', compact('expensiveProducts'));
    }
}
