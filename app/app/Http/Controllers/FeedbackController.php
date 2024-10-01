<?php

namespace App\Http\Controllers;

use App\Jobs\FeedbackJob;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        return view("feedback.feedback",['menu' => config('top.menu'), 'page' => 'Feedback']);
    }

    public function post(Request $request)
    {
        $validated = $request->validate([            
            'email' => 'required|email',
            'phone' => 'required',
            'text' => 'required',        
        ]);

        FeedbackJob::dispatch($validated['email'], $validated['phone'], $validated['text']);
       

        return redirect()->route('main')->with('status', 'The leter was sent');
    }
}
