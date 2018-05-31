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
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'tlp' => 'required',
            'adrress' => 'required',
            'DNI' => 'required',
            'age' => 'required',
            'office' => 'required|max:255',
        ]);

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
        $nurse = new Nurse();
        $nurse->office = $request->office;
        $nurse->user_id = $user->id;
        $nurse->save();

        //$nurse = new Nurse($request->all());
        //$nurse->save();

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
        $nurse = User::find($nurse->user());

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
            'office' => 'required|max:255',
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
