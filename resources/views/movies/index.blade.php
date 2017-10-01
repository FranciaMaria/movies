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
<<<<<<< HEAD

=======
>>>>>>> 95f8943bdce478774e4328791111756cfd98a6e9
			<h2><a href="/movies/{{$movie->id}}">{{$movie->title}}</a></h2>
			<p>{{strstr($movie->storyline, ".", true)}} ...</p>
		@endforeach
	@endsection

	


</body>
</html>