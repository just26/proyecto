<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    protected $fillable = ['office', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function surgerie()
    {
        return $this->hasMany('App\Surgery');
    }
}
