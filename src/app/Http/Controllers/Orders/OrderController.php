<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function cart () {

        return view('pages.cart');
    }

    public function add (Request $request) {
        
    }
}
