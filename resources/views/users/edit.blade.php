@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar usuario</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($user, [ 'route' => ['users.update',$user->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Nombre del usuario') !!}
                            {!! Form::text('name',$user->name,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('surname', 'Apellidos del usuario') !!}
                            {!! Form::text('surname',$user->surname,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email del usuario') !!}
                            {!! Form::text('email',$user->nuhsa,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'Password del usuario') !!}
                            {!! Form::text('password',$user->password,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('tlp', 'Telefono del usuario') !!}
                            {!! Form::text('tlp',$user->tlp,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('adrress', 'Direccion del usuario') !!}
                            {!! Form::text('adrress',$user->adrress,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('DNI', 'DNI del usuario') !!}
                            {!! Form::text('DNI',$user->DNI,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('age', 'Age del usuario') !!}
                            {!! Form::text('age',$user->age,['class'=>'form-control', 'required']) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection