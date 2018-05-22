<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    //
    protected $fillable = ['office', 'user_id', 'patient_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function patients()
    {
        return $this->hasMany('App\Patient');
    }
}
