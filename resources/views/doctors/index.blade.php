@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Doctores</div>

                    <div class="panel-body">


                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre</th>
                                <th>Despacho</th>
                                <th>Valoración</th>


                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($doctors as $doctor)


                                <tr>
                                    <td>{{ $doctor->user->name }}</td>
                                    <td>{{ $doctor->office }}</td>
                                    <td>{{ $doctor->assessment }}</td>



                                    <td>
                                        {!! Form::open(['route' => ['doctors.edit',$doctor->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Edit', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection