<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    static function getPublishedMovies(){

    	return self::where('created_at', null)->get();
    }
}


