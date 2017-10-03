<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Comment;

class Movie extends Model
{
	protected $guarded = ['id'];

    protected $fillable = ['title', 'genre', 'director', 'released_in', 'storyline'];

    const STORE_RULES = [
    			'title' => 'required | max: 25',
    			'genre' => 'required | max: 15',
    			'director' => 'required | max: 25',
    			'released_in' => 'required | integer | min:1900 | max:date("Y")',
    			'storyline' => 'required | max: 1000'
    		];

    static function getPublishedMovies(){
    	return self::get();
    }

    static function getPublishedMoviesByGenre($genre) {
        return self::where('genre', "$genre")->get();
    }

    public function comments(){

        return $this->hasMany(\App\Comment::class);
    }

    public function addComment($content){

        /*$this->comments()->create([
            'content' => $content,
            'movie_id' => $this->id,
            'created_at' => date('Y-m-d h:i:s'),
        ]);*/

        $this->comments()->create(compact('content'));

    }

}