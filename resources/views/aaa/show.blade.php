@extends('layouts.master')

@section('title')

SHOW BLADE 
<br>    
@endsection

@section('content')
<div class="container">
<ul>
<li>{{ $movie->title }}</li>
<li>{{ $movie->genre }}</li>
<li>{{ $movie->director }}</li>
<li>{{ $movie->year }}</li>
</ul>

@foreach ($movie->comments as $comment)

<div class='p-4 alert-success'>
        <div class="text-muted"> {{ $comment->content }}   </div>
    
    </div>        
@endforeach


<div class="container">
        <p>Leave a comment</p>
 
        <div class="container">
          <form method="POST" action="{{ route('addingComment', ['movie_id' => $movie->id]) }}">
            @csrf
            <div class="form-group row">
              <textarea
                id="textarea"
                name="content"
                cols="40"
                rows="5"
                class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}"></textarea>
                @include('partials.invalid-feedback', ['field' => 'content'])
            </div>
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>


@endsection

