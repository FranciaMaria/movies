<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class GenresController extends Controller
{
    public function show($genre){

    	$movies = Movie::getPublishedMoviesByGenre($genre);
    	return view('movies.genre', compact('movies'));
    	
    }
}
