<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Nurse;
use App\User;
use App\Doctor;
use App\Patient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected function redirectTo(){
        $user = Auth::user();

        $doctors = Doctor::all();
        foreach ($doctors as $doctor) {
            if ($user->id == $doctor->user_id) {
                return '/patients';
            }
        }
        $patients = Patient::all();
        foreach ($patients as $patient){
            if ($user->id == $patient->user_id) {
                return '/doctors';
            }
        }
        $nurses = Nurse::all();
        foreach ($nurses as $nurse){
            if ($user->id == $nurse->user_id) {
                return '/patients';
            }
        }

        return '/home';
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


}
