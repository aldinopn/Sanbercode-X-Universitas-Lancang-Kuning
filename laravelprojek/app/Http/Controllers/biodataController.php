<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class biodataController extends Controller
{
    public function register ()
    {
        return view('form');
    }
    
    public function home (Request $request)
    {
        $fullname = $request->input('fname');
        $lastname = $request->input('lname');

        return view('home', ['fname' => $fullname, 'lname' => $lastname]);
    }
}
