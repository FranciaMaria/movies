@extends('layout.master')

<!DOCTYPE html>
<html>
<head>
	<title>{{$movie->title}}</title>
</head>
<body>
	@section('single-title')
	<h1>{{$movie->title}}</h1>
	@endsection
	@section('single-content')
	<p><strong>Genre:</strong> {{$movie->genre}}</p>
	<p><strong>Director:</strong> {{$movie->director}}</p>
	<p><strong>Released in:</strong> {{$movie->released_in}}</p>
	<p><strong>Storyline:</strong> {{$movie->storyline}}</p>
	@endsection
</body>
</html>