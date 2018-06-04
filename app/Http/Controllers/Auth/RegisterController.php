<?php

namespace App\Http\Controllers\Auth;

use App\Doctor;
use App\Nurse;
use App\Patient;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    public function showRegistrationForm()
    {
        $doctors = Doctor::all()->pluck('name', 'id');

        return view('auth.register', ['doctors'=>$doctors]);
    }

    public function showRegistrationForm1()
    {
        $nurses = Nurse::all()->pluck('name', 'id');

        return view('auth.register', ['nurses'=>$nurses]);
    }

    public function showRegistrationForm2()
    {
        $patients = Patient::all()->pluck('name', 'id');

        return view('auth.register', ['patients'=>$patients]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'tlp' => 'required|integer',
            'adrress' => 'required|string|max:255',
            'DNI' => 'required|string|max:255',
            'birthday' => 'required|date|max:255',
            'office' => 'required|string|max:255',
            'nuhsa' => 'required|string|max:255',
            'nurse_id' => 'required|string|max:255'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = new User();
        $user->name = $data['name'];
        $user->surname = $data['surname'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->tlp = $data['tlp'];
        $user->adrress = $data['adrress'];
        $user->DNI = $data['DNI'];
        $user->birthday = $data['birthday'];
        $user->save();

        $valor = $_POST['Tipo'];
        if($valor=="Doctor") {
            $doctor = new Doctor($data);
            $doctor->office = $data['office'];

            $doctor->user()->associate($user);
            $doctor->save();

            return $user;
        }elseif ($valor=="Enfermero"){
            $nurse = new Nurse($data);
            $nurse->office = $data['office'];

            $nurse->user()->associate($user);
            $nurse->save();

            return $user;
        }else{
            $patient = new Patient($data);
            $patient->nuhsa = $data['nuhsa'];
            $patient->nurse_id = $data['nurse_id'];

            $patient->user()->associate($user);
            $patient->save();

            return $user;
        }
    }
}
/*return User::create([
    'name' => $data['name'],
    'surname' => $data['surname'],
    'email' => $data['email'],
    'password' => Hash::make($data['password']),
    'tlp' => $data['tlp'],
    'adrress' => $data['adrress'],
    'DNI' => $data['DNI'],
    'age' => $data['age'],
    'office' => $data['office'],
]);*/