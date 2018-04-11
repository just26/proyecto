<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    protected $fillable = ['office'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function surgeries()
    {
        return $this->hasMany('App\Surgery');
    }
}
