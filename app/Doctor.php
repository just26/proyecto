<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    protected $fillable = ['name', 'surname', 'email', 'password', 'tlp', 'address', 'DNI,NIF', 'age', 'office'];

    public function surgeries()
    {
        return $this->hasMany('App\Surgery');
    }
}
