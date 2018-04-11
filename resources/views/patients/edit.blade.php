@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar paciente</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($patient, [ 'route' => ['patients.update',$patient->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Nombre del paciente') !!}
                            {!! Form::text('name',$patient->name,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('surname', 'Apellidos del paciente') !!}
                            {!! Form::text('surname',$patient->surname,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email del paciente') !!}
                            {!! Form::text('email',$patient->nuhsa,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'Password del paciente') !!}
                            {!! Form::text('password',$patient->password,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('tlp', 'Telefono del paciente') !!}
                            {!! Form::text('tlp',$patient->tlp,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('address', 'Direccion del paciente') !!}
                            {!! Form::text('address',$patient->address,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('DNI/NIF', 'DNI/NIF del paciente') !!}
                            {!! Form::text('DNI/NIF',$patient->DNI/NIF,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('age', 'Age del paciente') !!}
                            {!! Form::text('age',$patient->age,['class'=>'form-control', 'required']) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection