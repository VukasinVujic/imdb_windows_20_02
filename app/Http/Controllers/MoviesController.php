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

    public function create(){

        return view('aaa.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title'=>'required|min:3',
            'genre'=> 'required|min:3',
            'director'=> 'required',
            'year'=> 'required|numeric|between:1900,'.date('Y'),
            'storyline' => 'required'
            ]);
            Movie::create($request->all());

           return redirect('/movies');
    }

}
