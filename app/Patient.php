<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    protected $fillable = [];//'name', 'surname', 'email', 'password', 'tlp', 'address', 'DNI,NIF', 'age'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function surgeries()
    {
        return $this->hasMany('App\Surgery');
    }

    public function nurse()
    {
        return $this->belongsTo('App\Nurse');
    }

    public function diseases()
    {
        return $this->belongsToMany('App\Disease');
    }
}
