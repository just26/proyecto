<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

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

        return view('patients/index', ['patients'=>$patients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|255',
            'password' => 'required|255',
            'tlp' => 'required|255',
            'address' => 'required|255',
            'DNI/NIF' => 'required|255',
            'age' => 'required|255'
        ]);
        $patient = new Patient($request->all());
        $patient->save();

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
        return view('patients/show', ['patient'=>$patient]);
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
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|255',
            'password' => 'required|255',
            'tlp' => 'required|255',
            'address' => 'required|255',
            'DNI/NIF' => 'required|255',
            'age' => 'required|255'
        ]);
        $patient = Patient::find($id);
        $patient->fill($request->all());

        $patient->save();

        flash('Paciente modificado correctamente');

        return redirect()-> route('patient.index');

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
        flash('Todas las especialidades han sido borradas');

        return redirect()->route('patients.index');
    }
}
