<?php

namespace App\Http\Controllers;

use App\Surgery;
use Illuminate\Http\Request;

class SurgeryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surgeries = Surgery::all();
        return view('surgeries/index', ['surgeries'=>$surgeries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('surgeries/create');
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
            'date' => 'required|255',
            'operatingroom' => 'required|255',
        ]);
        $surgery = new Surgery($request->all());
        $surgery->save();

        flash('Operacion creado correctamente');

        return redirect()-> route('surgeries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Surgery  $surgery
     * @return \Illuminate\Http\Response
     */
    public function show(Surgery $surgery)
    {
        return view('surgeries/show', ['surgery'=>$surgery]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Surgery  $surgery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surgery = Surgery::find($id);

        return view('surgeries/edit',['surgery'=> $surgery]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Surgery  $surgery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'date' => 'required|255',
            'operatingroom' => 'required|255',
        ]);
        $surgery = Surgery::find($id);
        $surgery->fill($request->all());

        $surgery->save();

        flash('Operacion modificada correctamente');

        return redirect()-> route('surgeries.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Surgery  $surgery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surgery = Surgery::find($id);
        $surgery->delete();
        flash('Operacion borrada correctamente');

        return redirect()->route('surgeries.index');
    }

    public function destroyAll()
    {
        Surgery::truncate();
        flash('Todos las operaciones han sido borradas');

        return redirect()->route('surgeries.index');
    }
}
