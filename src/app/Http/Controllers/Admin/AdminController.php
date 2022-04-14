<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index (Request $request) {
        if (Auth::user() && Auth::user()->admin) {
            return view('admin.panel');
        }

         return redirect('shop');
    }
}
