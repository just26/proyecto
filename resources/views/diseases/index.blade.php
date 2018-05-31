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
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre</th>
                                <th>Fecha de inicio de la Enfermedad y Sintomas</th>

                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($diseases as $disease)


                                <tr>
                                    <td>{{ $disease->name }}</td>
                                    <td>{{ $disease->patients }}</td>

                                    <td>
                                        {!! Form::open(['route' => ['diseases.edit',$disease->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Edit', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['diseases.destroy',$disease->id], 'method' => 'delete']) !!}
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