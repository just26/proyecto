<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surgery extends Model
{
    //
    protected $fillable = ['date', 'hour', 'operatingroom'];

    public function doctors()
    {
        return $this->belongsTo('App\Doctor');
    }

    public function patients()
    {
        return $this->belongsTo('App\Patient');
    }
}
