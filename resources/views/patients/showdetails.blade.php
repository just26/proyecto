@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Enfermedades</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'diseases.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Agregar enfermedad', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>

                        <table class="table table-sm table-dark">
                            <tr>
                                <th>Nombre</th>
                            </tr>

                                <tr>
                                    <td>{{ $patient->user->name }}</td>
                                <tr/>

                        </table>

                            <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre</th>
                                <th>Fecha de la enfermedad</th>
                                <th>Sintomas</th>

                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($patient->diseases as $disease)
                                <tr>
                                    <td>{{ $disease->name }}</td>
                                    <td>{{ $disease->pivot->date }}</td>
                                    <td>{{ $disease->pivot->symptom }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection