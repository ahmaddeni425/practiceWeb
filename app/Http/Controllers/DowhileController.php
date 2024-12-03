<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DowhileController extends Controller
{
    public function index()
    {
        
        $transactions = [
            (object) ['id' => 1, 'amount' => 500, 'status' => 'failed'],
            (object) ['id' => 2, 'amount' => 1000, 'status' => 'success'],
            (object) ['id' => 3, 'amount' => 200, 'status' => 'failed'],
            (object) ['id' => 4, 'amount' => 800, 'status' => 'success'],
        ];

        
        $failedTransactions = [];
        $index = 0;

        do {
            if ($transactions[$index]->status == 'failed') {
                $failedTransactions[] = $transactions[$index];
            }
            $index++;
        } while ($index < count($transactions));

        
        return view('dowhile.index', compact('failedTransactions'));
    }
}
