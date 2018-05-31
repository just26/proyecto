@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar operaciones</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($surgery, [ 'route' => ['surgeries.update',$surgery->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('date', 'Fecha de la paciente') !!}
                            {!! Form::text('date',$surgery->date,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('operatingroom', 'Operatorio de la paciente') !!}
                            {!! Form::text('operatingroom',$surgery->operatingroom,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection