<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Movie;
use App\Comment;

class MoviesController extends Controller
{
    public function index(){
    	$movies = Movie::getPublishedMovies();
    	return view('movies.index', compact('movies'));
    }
    public function show($id){
    	$movie = Movie::with('comments')->find($id);
    	return view('movies.show', compact('movie'));
    }

    public function store(Request $request){

    	$request->validate(Movie::STORE_RULES);

    	$movie = Movie::create($request->all());

    	return redirect()->route('all-movies');
    }

    public function create(){
    	return view('movies.create');
    }
}