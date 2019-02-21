<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Movie;

class CommentsController extends Controller
{
    public function store(Request $request,$movie_id)
    {
        $request -> validate([
            'content' => 'required'
        ]);

        $movie = Movie::find($movie_id);

        Comment::create([
            'content'=>$request->get('content'),
            'movie_id'=>$movie->id
        ]);

        return redirect()->route('movie', ['id' => $movie_id]);
    
    }



}
