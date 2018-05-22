@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Doctor</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'doctors.store']) !!}
                        <div class="form-group">
                            {!! Form::label('office', 'Despacho del Doctor') !!}
                            {!! Form::text('office',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('user_id', 'Id (usuario) del Doctor') !!}
                            {!! Form::text('user_id',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection