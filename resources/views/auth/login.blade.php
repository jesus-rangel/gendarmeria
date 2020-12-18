@extends('layouts.app')
@section('custom-css')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection
@section('content')
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="{{asset('img/circle-shield.png')}}" alt="Logo" class="brand_logo">
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input id="username" type="text" class="form-control input_user @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username" autofocus placeholder="usuario">
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input id="password" type="password" class="form-control input_pass @error('password') is-invalid @enderror" name="password"  autocomplete="current-password" placeholder="contraseña">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {{-- Funcionalidad para recordar usuario comentada pues no se finalizó --}}
                    {{-- <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="remember">
                                {{ __('Recordar esta cuenta') }}
                            </label>
                        </div>
                    </div> --}}

                    <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" class="btn btn-primary login_btn">
                                {{ __('Login') }}
                            </button>
                    </div>
                </form>
            </div>
            <div class="mt-4">
                <div class="d-flex justify-content-center links">
                    Ha olvidado su contraseña?
                </div>
                <div class="d-flex justify-content-center links">
                    <a href="{{route('password.request')}}">Reestablecer Contraseña</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
