@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Doctor</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($doctor, [ 'route' => ['doctors.update',$doctor->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('office', 'Despacho del Doctor') !!}
                            {!! Form::text('office',$doctor->office,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection