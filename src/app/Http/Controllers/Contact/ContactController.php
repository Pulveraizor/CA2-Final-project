<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Messages;

class ContactController extends Controller
{
    public function contact()
    {
        return view('pages.contact');
    }

    public function message(Request $request)
    {

        $message = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|Email|max:150',
            'message' => 'required|max:1000'
        ]);

        $message = Messages::create($message);

        return view('pages.message');
    }

    public function about()
    {
        return view('pages.about');
    }
}
