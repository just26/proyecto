@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">ENFERMEDAD/ES DEL PACIENTE</div>

                    <div class="panel-body">


                        <table class="table table-sm table-dark">
                            <tr>
                                <th>Nombre del paciente</th>
                            </tr>

                                <tr>
                                    <td>{{ $patient->user->name }}</td>
                                <tr/>

                        </table>

                            <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre de la enfermedad</th>
                                <th>Fecha de inicio la enfermedad</th>
                                <th>Sintomas</th>

                            </tr>

                            @foreach ($patient->diseases as $disease)
                                <tr>
                                    <td>{{ $disease->name }}</td>
                                    <td>{{ $disease->pivot->date }}</td>
                                    <td>{{ $disease->pivot->symptom }}</td>


                                </tr>
                            @endforeach
                        </table>
                        @include('flash::message')
                            {!! Form::open(['route' => 'diseases.create', 'method' => 'get']) !!}
                            {!!   Form::submit('Añadir enfermedad', ['class'=> 'btn btn-warning'])!!}
                            {!! Form::close() !!}
                        <br><br>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection