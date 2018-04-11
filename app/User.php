<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password', 'tlp', 'address', 'DNI,NIF', 'age'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function patient()
    {
    return $this->hasOne('App\Patient');
    }

    public function doctors()
    {
        return $this->hasOne('App\Doctor');
    }

    public function nurses()
    {
        return $this->hasOne('App\Nurse');
    }
}
