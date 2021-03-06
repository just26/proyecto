@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear usuario</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'users.store']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre del usuario') !!}
                            {!! Form::text('name',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('surname', 'Apellido del usuario') !!}
                            {!! Form::text('surname',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'E-mail del usuario') !!}
                            {!! Form::text('email',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'Password del usuario') !!}
                            {!! Form::text('password',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('tlp', 'Telefono del usuario') !!}
                            {!! Form::text('tlp',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('adrress', 'Direccion del usuario') !!}
                            {!! Form::text('adrress',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('DNI', 'DNI del usuario') !!}
                            {!! Form::text('DNI',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('birthday', 'Fecha de nacimiento del usuario (aaaa-mm-dd)') !!}
                            {!! Form::text('birthday',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection