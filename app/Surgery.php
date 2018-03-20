<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surgery extends Model
{
    //
    protected $fillable = ['date', 'hour', 'operatingroom'];
}
