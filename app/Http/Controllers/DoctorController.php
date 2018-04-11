<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors/index', ['doctors'=>$doctors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|255',
            'password' => 'required|255',
            'tlp' => 'required|255',
            'address' => 'required|255',
            'DNI/NIF' => 'required|255',
            'age' => 'required|255',
            'office' => 'required|255',
        ]);
        $doctor = new Doctor($request->all());
        $doctor->save();

        flash('Doctor creado correctamente');

        return redirect()-> route('doctors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
        return view('doctors/show', ['doctor'=>$doctor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $doctor = Doctor::find($id);

        return view('doctors/edit',['doctor'=> $doctor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
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
            'age' => 'required|255',
            'office' => 'required|255',
        ]);
        $doctor = Doctor::find($id);
        $doctor->fill($request->all());

        $doctor->save();

        flash('Doctor modificado correctamente');

        return redirect()-> route('doctors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $doctor = Doctor::find($id);
        $doctor->delete();
        flash('Doctor borrado correctamente');

        return redirect()->route('doctors.index');
    }

    public function destroyAll()
    {
        Doctor::truncate();
        flash('Todos los doctores han sido borrados');

        return redirect()->route('doctors.index');
    }

}
