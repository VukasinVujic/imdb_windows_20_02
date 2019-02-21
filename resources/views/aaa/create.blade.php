@extends('layouts.master')

@section('content')
    

  <div class="container">
    <h1 class="jumbotron-heading">Add new movie</h1>

    <form method="POST" action="{{ route('createMovie') }}">
        @csrf

      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Title</label>
        <div class="col-8">

                <input id="text" name="title" type="text" class="form-control
                {{ $errors->has('title')? 'is-invalid':'' }}"value='{{ old('title') }}'>
                @include('partials.invalid-feedback',['field'=>'title'])   
        </div>
      </div>

      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">genre</label>
        <div class="col-8">

          <input id="text" name="genre" type="text" class="form-control
                {{ $errors->has('genre')? 'is-invalid':'' }}"value='{{ old('genre') }}'>
                @include('partials.invalid-feedback',['field'=>'genre'])     
        </div>
      </div>

      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">director</label>
        <div class="col-8">
                <input id="text" name="director" type="text" class="form-control
                {{ $errors->has('director')? 'is-invalid':'' }}"value='{{ old('director') }}'>
                @include('partials.invalid-feedback',['field'=>'director'])     
        </div>
      </div>

      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">year</label>
        <div class="col-8">
                <input id="text" name="year" type="text" class="form-control
                {{ $errors->has('year')? 'is-invalid':'' }}"value='{{ old('year') }}'>
                @include('partials.invalid-feedback',['field'=>'year'])     
        </div>
      </div>

      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">storyline</label>
        <div class="col-8">
                <input id="text" name="storyline" type="text" class="form-control
                {{ $errors->has('storyline')? 'is-invalid':'' }}"value='{{ old('storyline') }}'>
                @include('partials.invalid-feedback',['field'=>'storyline'])     
        </div>
      </div>
     
      <div class="form-group row">
          <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Add movie</button>
        </div>
      </div>

  </form>
</div>

@endsection
