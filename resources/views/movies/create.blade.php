@extends('layout.master')

@section('title')
    Create new movie
@endsection

<<<<<<< HEAD
@section('create-movie-content')
=======
@section('create-content')
>>>>>>> 95f8943bdce478774e4328791111756cfd98a6e9

<h2>Create new movie</h2>

    <form method="POST" action="{{ route('store-movie') }}">

        {{ csrf_field() }}

        <div class="form-group">

            <label for="title">Title</label>

            <input type="text" class="form-control" id="title" name="title"/>
            @include('partials.error-message', ['fieldTitle' => 'title'])
            
            
        </div>

        <div class="form-group">

            <label for="genre">Genre</label>

            <textarea class="form-control" id="genre" name="genre"></textarea>
            @include('partials.error-message', ['fieldTitle' => 'genre'])
            
            
        </div>

        <div class="form-group">

<<<<<<< HEAD
            <label for="director">Director</label>
=======
            <label for="genre">Director</label>
>>>>>>> 95f8943bdce478774e4328791111756cfd98a6e9

            <textarea class="form-control" id="director" name="director"></textarea>
            @include('partials.error-message', ['fieldTitle' => 'director'])
          
            
        </div>

        <div class="form-group">

<<<<<<< HEAD
            <label for="released_in">Released In</label>
=======
            <label for="genre">Released In</label>
>>>>>>> 95f8943bdce478774e4328791111756cfd98a6e9

            <textarea class="form-control" id="released_in" name="released_in"></textarea>
            @include('partials.error-message', ['fieldTitle' => 'released_in'])
           
        </div>

        <div class="form-group">

<<<<<<< HEAD
            <label for="storyline">Storyline</label>
=======
            <label for="genre">Storyline</label>
>>>>>>> 95f8943bdce478774e4328791111756cfd98a6e9

            <textarea class="form-control" id="storyline" name="storyline"></textarea>
            @include('partials.error-message', ['fieldTitle' => 'storyline'])
          
            
        </div>

        <div class="form-group">

            <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </form>

<<<<<<< HEAD
    @section('create-comment-content')

    <form method="POST" action="{{ route('comments-movie', ['movie_id' => $movie->id]) }}">

        {{ csrf_field() }}

        <div class="form-group">

            <label for="content">Content</label>

            <textarea class="form-control" id="content" name="content"></textarea>
            @include('partials.error-message', ['fieldTitle' => 'content'])
          
            
        </div>

        <div class="form-group">

            <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </form>

    @endsection

=======
>>>>>>> 95f8943bdce478774e4328791111756cfd98a6e9
@endsection