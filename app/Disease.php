<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    //
    protected $fillable = ['name', 'date', 'symptom'];

    protected $guarded = ['id'];
    public function patients()
    {
        return $this->belongsToMany('App\Patient','diseases_patients','disease_id','patient_id')->withPivot('date','symptom');
    }
}
