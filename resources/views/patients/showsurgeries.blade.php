@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Operaciones</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'patients.createsurgeries', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear operaciones', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>

                        <table class="table table-sm table-primary">
                            <tr>
                                <th>Nombre del paciente</th>
                            </tr>

                            <tr>
                                <td>{{ $patient->user->name }}</td>
                            <tr/>

                        </table>

                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Fecha</th>
                                <th>Quirófano</th>
                                <th>Nombre del doctor</th>
                                <th>Despacho del doctor</th>


                                <th colspan="2">Actions</th>
                            </tr>

                            @foreach ($patient->surgeries as $surgery)


                                <tr>
                                    <td>{{ $surgery->date }}</td>
                                    <td>{{ $surgery->operatingroom}}</td>
                                    <td>{{ $surgery->doctor->user->name }}</td>
                                    <td>{{ $surgery->doctor->office }}</td>


                                    <td>
                                        {!! Form::open(['route' => ['surgeries.destroy',$surgery->id], 'method' => 'delete']) !!}
                                        {!!   Form::submit('Delete', ['class'=> 'btn btn-danger' ,'onclick' => 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
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