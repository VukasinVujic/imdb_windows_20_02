@extends('layouts.master')

@section('title')

SHOW BLADE 
<br>    
@endsection

@section('content')
<ul>
<li>{{ $movie->title }}</li>
<li>{{ $movie->genre }}</li>
<li>{{ $movie->director }}</li>
<li>{{ $movie->year }}</li>
</ul>
    
@endsection

