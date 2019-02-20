@extends('layouts.master')

@section('content')
    

<form>
        
        <div class="form-group">
          <label for="inputAddress">Tittle</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="title">
        </div>

        <div class="form-group">
                <label for="inputAddress">genre</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="genre">
              </div>
              

        <div class="form-group">
          <label for="inputAddress2">director</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="director">
        </div>
        
        <div class="form-group">
                <label for="inputAddress2">year</label>
                <input type="number" class="form-control" id="inputAddress2" placeholder="year">
        </div>
        

        <div class="form-group">
                <label for="inputAddress2">storyline</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="storyline">
        </div>
        
              
        <button type="submit" class="btn btn-primary">add movie</button>
      </form>
@endsection
