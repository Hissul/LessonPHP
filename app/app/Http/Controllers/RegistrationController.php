<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use function Laravel\Prompts\alert;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login.registration',['menu' => config('top.menu'), 'page' => 'Registration']);      
    }

  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255', 
            'email' => 'required|email',
            'password' => 'required|min:5|max:32',
            'repeat_password' => 'required|min:5|max:32'
        ]);

        if($validated['password'] === $validated['repeat_password']){
            
            $user = new User();
        
            $user->name = $validated['name'];
            $user->email = $validated['email'];
            $user->password = $validated['password'];

            $user->save();

            return redirect()->route('login')->with('status', 'User created');
        }
        else{
            echo "Wrong Pasword";
            return redirect()->route('registration')->with('status', 'Wrong Pasword');
        }

        
    }

    

 

 
}
