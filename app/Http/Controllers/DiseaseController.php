<?php

namespace App\Http\Controllers;

use App\Disease;
use App\Patient;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diseases = Disease::all();
        //return view('diseases/index', ['diseases'=>$diseases]);
        //foreach ($patient->diseases as $disease){
          //  $disease->pivot->date;
        //}
        return view('diseases/index', ['diseases'=>$diseases]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diseases/create');
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
        ]);
        $disease = new Disease($request->all());
        $disease->save();

        flash('Enfermedad creada correctamente');

        return redirect()-> route('diseases.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Disease $disease)
    {
        return view('diseases/show', ['diseases'=>$disease]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disease = Disease::find($id);

        return view('diseases/edit',['diseases'=> $disease]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);
        $disease = Disease::find($id);
        $disease->fill($request->all());

        $disease->save();

        flash('Enfermedad modificada correctamente');

        return redirect()-> route('diseases.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disease = Disease::find($id);
        $disease->delete();
        flash('Enfermedad borrada correctamente');

        return redirect()->route('diseases.index');
    }

    public function destroyAll()
    {
        Disease::truncate();
        flash('Todos las enfermedades han sido borradas');

        return redirect()->route('diseases.index');
    }
}
