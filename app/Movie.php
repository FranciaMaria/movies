<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Comment;

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

    public function comments(){

        return $this->hasMany(\App\Comment::class);
    }
}