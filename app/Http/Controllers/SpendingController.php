<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spending;

class SpendingController extends Controller
{
    function index () {
        $spendings = Spending::all();
        return view('spending.indexSpending', [
            "title" => 'Spending',
            'spendings' => $spendings
        ]);
    }
}
