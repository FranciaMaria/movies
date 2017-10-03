<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Comment;

class CommentsController extends Controller
{
	
    public function store(Movie $movie){

    	$this->validate(request(), Comment::STORE_RULES);

    	$movie->addComment(request('content'));
    	
    	//$movie->comments()->create($request->all()); 

    	//$movie->comments()->;

    	//return redirect()->route('single-movie', [ 'id' => $movieId ]);
    	return back();
    }
}
