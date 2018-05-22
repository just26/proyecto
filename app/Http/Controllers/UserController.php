<?php

namespace App\Http\Controllers;

use App\User;
use App\Patient;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*public function hola()
    {
        $patient = User::find(1)->patient;
        $DNI_patient = $patient->DNI/NIF;
    }*/

    public function index()
    {
        $users = User::all();

        return view('users/index', ['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users/create');
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
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'tlp' => 'required',
            'adrress' => 'required',
            'DNI' => 'required',
            'age' => 'required',
        ]);
        $user = new User($request->all());
        $user->save();

        flash('Usuario creado correctamente');

        return redirect()-> route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users/show', ['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('users/edit',['user'=> $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'tlp' => 'required',
            'adrress' => 'required',
            'DNI' => 'required',
            'age' => 'required'
        ]);
        $user = User::find($id);
        $user->fill($request->all());

        $user->save();

        flash('Usuario modificado correctamente');

        return redirect()-> route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        flash('Usuario borrado correctamente');

        return redirect()->route('users.index');
    }
}
