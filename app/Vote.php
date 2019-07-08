<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = ['mark', 'user_id', 'subject_id'];

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
}
