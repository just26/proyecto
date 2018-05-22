@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Doctores</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'doctors.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear Doctor', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Despacho</th>

                                <th colspan="2">Actions</th>
                            </tr>

                            @foreach ($doctors as $doctor)


                                <tr>
                                    <td>{{ $doctor->office }}</td>

                                    <td>
                                        {!! Form::open(['route' => ['doctors.edit',$doctor->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Edit', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['doctors.destroy',$doctor->id], 'method' => 'delete']) !!}
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