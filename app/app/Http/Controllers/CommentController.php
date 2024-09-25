<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Comment::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'text' => 'required', 
            'like' => 'required|numeric',
            'dislike' => 'required',
            'post_id'=> 'required|numeric'
        ]);

        $comment = new Comment();
        
        $comment->user_id = 1;

        $comment->text = $validated['text'];
        $comment->like = $validated['like'];
        $comment->dislike = $validated['dislike'];
        $comment->post_id = $validated['post_id'];

        $comment->save();

        return redirect()->route('comment')->with('status', 'Comment created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
