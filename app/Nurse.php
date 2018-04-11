<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    //
    protected $fillable = ['name', 'surname', 'email', 'password', 'tlp', 'address', 'DNI,NIF', 'age', 'office'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function patients()
    {
        return $this->hasMany('App\Patient');
    }
}
