<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
	protected $guarded = ['id'];

    protected $fillable = ['title', 'genre', 'director', 'released_in', 'storyline'];

    const STORE_RULES = [
    			'title' => 'required | max: 25',
    			'genre' => 'required | max: 15',
    			'director' => 'required | max: 25',
    			'released_in' => 'required | max: 4',
    			'storyline' => 'required | min: 15'
    		];

    static function getPublishedMovies(){
    	return self::get();
    }
}