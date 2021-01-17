<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    
    public function index()
    {
        $comments=Comment::latest()->paginate(5);
        return view('comments.index',compact('comments'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    
    public function create()
    {
        return view('comments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'matricno'=>'required',
            'studname'=>'required',
            'studcomments'=>'required',

        ]);

        Comment::create($request->all());

        return redirect()->route('comments.index')
        ->with('success','Your comments created successfully.');
    }

    
    public function show(Comment $comment)
    {
        return view('comments.show',compact('comment'));
    }

    public function edit(Comment $comment)
    {
        return view('comments.edit',compact('comment'));
    }

    public function update(Request $request, Comment $comment)
    {
        $request->validate([

            ]);
            $comment->update($request->all());
    
            return redirect()->route('comments.index')
            ->with('success','Your comments updated successfully');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->route('comments.index')
        ->with('success','Your comments deleted successfully');
    }
}
