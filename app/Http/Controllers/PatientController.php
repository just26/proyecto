<?php

namespace App\Http\Controllers;

use App\Patient;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $patients = Patient::all();
        //$patient = User::find($patient->user());
        //$patients = App\Patient::with('users')->get();
        //$patients = Patient::with('users:id,name')->get();
        //$users = User::all();

        //foreach ($users as $user){
          //  echo $user->patients->nuhsa;   //= (string)$users;
        //}
        //return view('patients/index', ['patients'=>$patients], 'users/index', ['users'=>users]);
        //foreach ($patients as $patient){
          //  echo $patient->users;
        //}
        return view( 'patients/index', ['patients'=>$patients]);

        /*foreach ($patients as $patient => $users){
            return view( 'users/index', ['users'=>$users]);
        view( 'users/index', ['users'=>$users]);
        }*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //$user= new User(users.$this->create());

        return view('patients/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [

            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'tlp' => 'required',
            'adrress' => 'required',
            'DNI' => 'required',
            'age' => 'required',
            'nuhsa' => 'required|max:255',
            //agregar las validaciones propias de los campos propios de usuario
        ]);

        // 1: Crear un user, con los campos del formulario propios del user
        $user = new User();
            $user->name = $request->name;
            $user->surname = $request->surname;
            $user->email = $request->email;
            $user->tlp = $request->tlp;
            $user->adrress = $request->adrress;
            $user->DNI = $request->DNI;
            $user->password = Hash::make($request->DNI);
            $user->age = $request->age;
            // new User. $user->name = $request->name... etc etc para todos los campos
            $user->save();
            // $user->save()

            // una vez ejecutado el save, puedes acceder al user_id asi: $user->id o $user->user_id

        // 2: Recuperar el user_id que se acaba de crear
            $user->id;
        // 3: Crear el patient, con los datos propios de paciente, más el user_id recuperado
        $patient = new Patient();
            $patient->nuhsa = $request->nuhsa;
            $patient->user_id = $user->id;
            $patient->save();
        //


        flash('Paciente creado correctamente');

        return redirect()-> route('patients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        $patient = User::find($patient->user());

        return view('patients/show', ['patient'=>$patient]);
    }

    public function showdetails($id){
        $patient = Patient::find($id);
        //foreach ($patient->diseases as $disease){
          //  echo $disease->pivot->date;
        //}
        //$patient = User::find($patient->user());
        //foreach ($patient->diseases as $disease){
          //  echo $disease->pivot->date;
        //}
        //$diseases = Patient::find(22)->diseases;
        //return view('patients/patientdetails')->with('diseases',$diseases);

        return view('patients/showdetails', ['patient'=>$patient]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $patient = Patient::find($id);

        return view('patients/edit',['patient'=> $patient]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'nuhsa' => 'required|max:255',

        ]);
        $patient = Patient::find($id);
        $patient->fill($request->all());

        $patient->save();

        flash('Paciente modificado correctamente');

        return redirect()-> route('patients.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $patient = Patient::find($id);
        $patient->delete();
        flash('Paciente borrado correctamente');

        return redirect()->route('patients.index');
    }

    public function destroyAll()
    {
        Patient::truncate();
        flash('Todos los pacientes han sido borrados');

        return redirect()->route('patients.index');
    }
}
