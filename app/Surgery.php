<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surgery extends Model
{
    //
    protected $fillable = ['date', 'operatingroom', 'doctor_id', 'patient_id'];

    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }
}
