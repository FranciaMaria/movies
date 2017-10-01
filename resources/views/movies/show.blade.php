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

	<p><strong>Genre: </strong><a href="/movies/genres/{{$movie->genre}}">{{$movie->genre}}</a></p>
	<p><strong>Director:</strong> {{$movie->director}}</p>
	<p><strong>Released in:</strong> {{$movie->released_in}}</p>
	<p><strong>Storyline:</strong> {{$movie->storyline}}</p>


    @if(count($movie->comments))

        <hr/>

        <h4>Comments:</h4>

        <ul class="list-unstyled">

            @foreach($movie->comments as $comment)

                <li>

                    <p>

                        <strong>Created at:</strong> {{ $comment->created_at }}

                    </p>

                    <p>

                        {{ $comment->content }}

                    </p>

                </li>

            @endforeach

        </ul>

    @endif

     <h4>Post a comment</h4>

    <form method="POST" action="{{ route('comments-movie', ['movie_id' => $movie->id]) }}">

        {{ csrf_field() }}

        <div class="form-group">

            <label for="content">Comment:</label>

            <textarea class="form-control" id="content" name="content"></textarea>

            @include('partials.error-message', ['fieldTitle' => 'content'])

        </div>

        <div class="form-group">

            <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </form>

@endsection

</body>
</html>