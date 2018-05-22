@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Usuarios</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'users.create', 'method' => 'get']) !!}
                        {!!   Form::submit('Crear usuario', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Telephone</th>
                                <th>Address</th>
                                <th>DNI</th>
                                <th>Age</th>

                                <th colspan="2">Acciones</th>
                            </tr>

                            @foreach ($users as $user)


                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->surname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->password }}</td>
                                    <td>{{ $user->tlp }}</td>
                                    <td>{{ $user->adrress }}</td>
                                    <td>{{ $user->DNI }}</td>
                                    <td>{{ $user->age }}</td>

                                    <td>
                                        {!! Form::open(['route' => ['users.edit',$user->id], 'method' => 'get']) !!}
                                        {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['users.destroy',$user->id], 'method' => 'delete']) !!}
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