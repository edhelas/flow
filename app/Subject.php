<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['topic', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function votes()
    {
        return $this->hasMany('App\Vote');
    }

    public function ups()
    {
        return $this->votes()->where('mark', true);
    }

    public function downs()
    {
        return $this->votes()->where('mark', false);
    }
}
