<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    protected $fillable = ['name', 'surname', 'email', 'password', 'tlp', 'address', 'DNI,NIF', 'age'];
}
