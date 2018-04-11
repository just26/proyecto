@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pacientes</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'patient.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear paciente', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Tlp</th>
                                <th>Address</th>
                                <th>DNI/NIF</th>
                                <th>Age</th>

                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($patients as $patient)


                                <tr>
                                    <td>{{ $patient->name }}</td>
                                    <td>{{ $patient->surname }}</td>
                                    <td>{{ $patient->email }}</td>
                                    <td>{{ $patient->password }}</td>
                                    <td>{{ $patient->tlp }}</td>
                                    <td>{{ $patient->address }}</td>
                                    <td>{{ $patient->DNI/NIF }}</td>
                                    <td>{{ $patient->age }}</td>

                                    <td>
                                        {!! Form::open(['route' => ['patients.edit',$patient->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['patients.destroy',$patient->id], 'method' => 'delete']) !!}
                                        {!!   Form::submit('Borrar', ['class'=> 'btn btn-danger' ,'onclick' => 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
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