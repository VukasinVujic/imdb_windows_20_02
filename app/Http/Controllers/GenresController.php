<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;

class GenresController extends Controller
{
    public function show($genre)
    {
        $movies = Movie::where('genre', $genre)->get();
        return view('aaa.index', compact('movies'));
    }
}
