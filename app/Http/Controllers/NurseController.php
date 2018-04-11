<?php

namespace App\Http\Controllers;

use App\Nurse;
use Illuminate\Http\Request;

class NurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nurses = Nurse::all();
        return view('nurses/index', ['nurses'=>$nurses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nurses/create');
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
        $nurse = new Nurse($request->all());
        $nurse->save();

        flash('Enfermero creado correctamente');

        return redirect()-> route('nurses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function show(Nurse $nurse)
    {
        return view('nurses/show', ['nurse'=>$nurse]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nurse = Nurse::find($id);

        return view('nurses/edit',['nurse'=> $nurse]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
        $nurse = Nurse::find($id);
        $nurse->fill($request->all());

        $nurse->save();

        flash('Enfermero modificado correctamente');

        return redirect()-> route('nurses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nurse  $nurse
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nurse = Nurse::find($id);
        $nurse->delete();
        flash('Enfermero borrado correctamente');

        return redirect()->route('nurses.index');
    }

    public function destroyAll()
    {
        Nurse::truncate();
        flash('Todos los enfermeros han sido borrados');

        return redirect()->route('nurses.index');
    }
}
