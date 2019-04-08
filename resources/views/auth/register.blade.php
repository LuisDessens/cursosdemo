@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <div class="card-title h5">{{ __('Crear una cuenta nueva') }}</div>
                    <hr>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name" class="sr-only">{{ __('Nombres') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-user"></i></i></div>
                                        </div>
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nombre" autofocus>
    
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
    
                                <div class="col-md-6">
                                    <label for="surname" class="sr-only">{{ __('Apellidos') }}</label>
                                    <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" placeholder="Apellido" autofocus>
    
                                    @if ($errors->has('surname'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('surname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="email">{{ __('Dirección de correo electrónico') }}</label>

                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-at"></i></div>
                                </div>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="password" >{{ __('Contraseña') }}</label>

                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                                </div>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="password-confirm">{{ __('Confirmar contraseña') }}</label>

                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-check"></i></div>
                                </div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña">
                            </div>
                        </div>
                        
                        <hr>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Registrar') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
