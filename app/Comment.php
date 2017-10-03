<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Movie;

class Comment extends Model
{
    protected $guarded = ['id'];

    protected $fillable = ['content', 'movie_id'];
    
    const STORE_RULES = [
    		'content' => 'required | min:2',
    		'movie_id' => 'required'
    	];

    public function movie(){

    	return $this->belongsTo(Movie::class);
    }

}
