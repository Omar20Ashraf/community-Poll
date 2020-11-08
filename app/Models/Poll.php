<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    //

    protected $table = 'polls';

    protected $fillable = ['title'];

    public function questions()
    {
    	# code...
    	return $this->hasMany(Question::class);
    }
}
