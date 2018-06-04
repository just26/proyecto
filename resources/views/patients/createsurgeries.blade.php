@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Operacion</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'patients.storesurgeries']) !!}
                        <div class="form-group">
                            {!! Form::label('date', 'Fecha y hora de la operacion') !!}


                            <input type="datetime-local" id="date" name="date" class="form-control" value="{{Carbon\Carbon::now()->format('Y-m-d\Th:i')}}" />


                        </div>
                        <div class="form-group">
                            {!! Form::label('operatingroom', 'Operatorio') !!}
                            {!! Form::text('operatingroom',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('doctor_id', 'Doctor') !!}
                            <br>
                            {!! Form::select('doctor_id', $doctors, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('patient_id', 'Patient') !!}
                            <br>
                            {!! Form::select('patient_id', $patients, ['class' => 'form-control']) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection