@extends('layouts.master')

@section('title')

INDEX BLADE 
<br>    
@endsection

@section('content')
<div class="container">

@foreach ($movies as $movie)

      <a href="{{'http://localhost/VIVIFY/napredni/Laravel/radOdKuce_20_02_IMDB/imdb/public/movies/' .$movie->id }}"> {{ $movie->title }}</a>   ;  {{ $movie->storyline }} <br>
    
@endforeach
<br><br>

</div>    
@endsection




