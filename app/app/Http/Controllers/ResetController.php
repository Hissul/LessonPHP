<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ResetController extends Controller
{

    public function index()
    {
        return view("login.reset");
    }

    public function post(Request $request)
    {
       
        
       
        

        $validated = $request->validate([            
            'email' => 'required|email'            
        ]);

        echo "Sending email";

        return redirect()->route('main');
    }

    
}