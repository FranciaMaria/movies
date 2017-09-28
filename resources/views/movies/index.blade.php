<!DOCTYPE html>
<html>
<head>
	<title>Movies</title>
</head>
<body>
	<h1>Movies:</h1>
	<ul>
		@foreach($movies as $movie)
			<h2><li><a href="">{{$movie->title}}</a></li></h2>
			<p>{{$movie->storyline}}</p>
		@endforeach
	</ul>


</body>
</html>