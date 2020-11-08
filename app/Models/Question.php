<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $table = 'questions';
    
    protected $fillable = ['title', 'question', 'poll_id'];


    public function poll()
    {
    	# code...
    	return $this->belongsTo(Poll::class,'poll_id');
    }


    public function answers()
    {
    	# code...
    	return $this->hasMany(Answer::class);
    }
}
