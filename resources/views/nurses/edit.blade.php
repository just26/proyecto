@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Enfermero</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($nurse, [ 'route' => ['nurses.update',$nurse->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('office', 'Despacho del Enfermero') !!}
                            {!! Form::text('office',$nurse->office,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection