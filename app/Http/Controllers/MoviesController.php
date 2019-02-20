<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('aaa.index', compact('movies'));
    }

    public function show($id)

    {
        $movie = Movie::findOrFail($id);
        return view('aaa.show', compact('movie'));
    }

}
