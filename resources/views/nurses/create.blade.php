@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Enfermero</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'nurses.store']) !!}
                        <div class="form-group">
                            {!! Form::label('office', 'Despacho del Enfermero') !!}
                            {!! Form::text('office',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('user_id', 'Id (usuario) del Enfermero') !!}
                            {!! Form::text('user_id',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('patient_id', 'Id (paciente) del Enfermero') !!}
                            {!! Form::text('patient_id',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection