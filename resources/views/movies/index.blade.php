@extends('layout.master')

<!DOCTYPE html>
<html>
<head>
	<title>Movies</title>
</head>
<body>
	<h1>Movies:</h1>
	@section('content')
		@foreach($movies as $movie)

			<h2><a href="/movie/{{$movie->id}}">{{$movie->title}}</a></h2>

			<h2><a href="/movies/{{$movie->id}}">{{$movie->title}}</a></h2>
			<p>{{strstr($movie->storyline, ".", true)}} ...</p>
		@endforeach
	@endsection

	


</body>
</html>