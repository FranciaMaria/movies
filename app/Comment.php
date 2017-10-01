<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Movie;
=======
use App\Movie;
>>>>>>> 95f8943bdce478774e4328791111756cfd98a6e9

class Comment extends Model
{
    protected $guarded = ['id'];

<<<<<<< HEAD
    protected $fillable = ['content'];
=======
    protected $fillable = ['content', 'movie_id', 'created_at'];
>>>>>>> 95f8943bdce478774e4328791111756cfd98a6e9

    
    const STORE_RULES = [
    		'content' => 'required',
    		'movie_id' => 'required'
    	];

    public function movie(){

<<<<<<< HEAD
    	return $this->belongsTo(App\Movie::class);
=======
    	return $this->belongsTo(Movie::class);
>>>>>>> 95f8943bdce478774e4328791111756cfd98a6e9
    }

}
