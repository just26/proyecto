@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pacientes</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'patients.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Create patient', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nuhsa</th>
                                <th>Nombre</th>

                                <th colspan="4">Acciones</th>
                            </tr>

                            @foreach ($patients as $patient)


                                <tr>
                                    <td>{{ $patient->nuhsa }}</td>
                                    <td>{{ $patient->user->name}}</td>

                                    <td>
                                        {!! Form::open(['route' => ['patients.edit',$patient->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Edit', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['patients.destroy',$patient->id], 'method' => 'delete']) !!}
                                        {!!   Form::submit('Delete', ['class'=> 'btn btn-danger' ,'onclick' => 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['surgeries.index',$patient->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Ver operaciones', ['class'=> 'btn btn-success'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['patients.showdetails',$patient->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Ver enfermedades', ['class'=> 'btn btn-info'])!!}
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