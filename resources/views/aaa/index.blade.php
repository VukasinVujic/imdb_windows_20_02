<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>INDEX BLADE</h1>

    @foreach ($movies as $movie)

          <a href="{{'http://localhost/VIVIFY/napredni/Laravel/radOdKuce_20_02_IMDB/imdb/public/movies/' .$movie->id }}"> {{ $movie->title }}</a>   ;  {{ $movie->storyline }} <br>
        
    @endforeach
    
</body>
</html>