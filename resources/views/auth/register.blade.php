@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Registro</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="radio">

                                <label class="col-md-4 col-form-label text-md-right">Tipo de profesional</label>

                                <input type="radio" name="Tipo" id="Tipo" value="Doctor">
                                <label for="Doctor">Doctor</label>
                                <input type="radio" name="Tipo" id="Tipo" value="Enfermero">
                                <label for="Enfermero">Enfermero</label>
                                <input type="radio" name="Tipo" id="Tipo" value="Paciente">
                                <label for="Paciente">Paciente</label>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">Apellidos</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus>

                                @if ($errors->has('surname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tlp" class="col-md-4 col-form-label text-md-right">Telefono</label>

                            <div class="col-md-6">
                                <input id="tlp" type="text" class="form-control{{ $errors->has('tlp') ? ' is-invalid' : '' }}" name="tlp" value="{{ old('tlp') }}" required autofocus>

                                @if ($errors->has('tlp'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tlp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adrress" class="col-md-4 col-form-label text-md-right">Direccion</label>

                            <div class="col-md-6">
                                <input id="adrress" type="text" class="form-control{{ $errors->has('adrress') ? ' is-invalid' : '' }}" name="adrress" value="{{ old('adrress') }}" required autofocus>

                                @if ($errors->has('adrress'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('adrress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="DNI" class="col-md-4 col-form-label text-md-right">DNI</label>

                            <div class="col-md-6">
                                <input id="DNI" type="text" class="form-control{{ $errors->has('DNI') ? ' is-invalid' : '' }}" name="DNI" value="{{ old('DNI') }}" required autofocus>

                                @if ($errors->has('DNI'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('DNI') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">Edad</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" name="age" value="{{ old('age') }}" required autofocus>

                                @if ($errors->has('age'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="office" class="col-md-4 col-form-label text-md-right">Despacho</label>

                            <div class="col-md-6">
                                <input id="office" type="text" class="form-control{{ $errors->has('office') ? ' is-invalid' : '' }}" name="office" value="{{ old('office') }}" required autofocus>

                                @if ($errors->has('office'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('office') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nuhsa" class="col-md-4 col-form-label text-md-right">Nuhsa</label>

                            <div class="col-md-6">
                                <input id="nuhsa" type="text" class="form-control{{ $errors->has('nuhsa') ? ' is-invalid' : '' }}" name="nuhsa" value="{{ old('nuhsa') }}" required autofocus>

                                @if ($errors->has('nuhsa'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nuhsa') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Registrar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
