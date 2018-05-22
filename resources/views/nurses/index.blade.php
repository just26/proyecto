@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Enfermeros</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'nurses.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear Enfermero', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Despacho</th>

                                <th colspan="2">Actions</th>
                            </tr>

                            @foreach ($nurses as $nurse)


                                <tr>
                                    <td>{{ $nurse->office }}</td>

                                    <td>
                                        {!! Form::open(['route' => ['nurses.edit',$nurse->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Edit', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['nurses.destroy',$nurse->id], 'method' => 'delete']) !!}
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