@extends('layouts.app')
@section('custom-css')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>{{ __('Cambio de contraseña') }}</h3>
                    
                    <form action="{{route('users.change-password')}}"  method="post" class="w-50">
                        @csrf
                        {{-- <div class="form-group">
                            <label for="user">Usuario</label>
                            <input type="text" name="user" id="user" class="form-control" value="{{$user->name}}" readonly>
                        </div> --}}
                        <div class="form-group">
                            <label for="old_password">Contraseña actual</label>
                            <input type="password" name="old_password" id="old_password" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="password">Nueva contraseña</label>
                            <input type="password" name="password" id="password" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="password_confirm">Confirmar nueva contraseña</label>
                            <input type="password" name="password_confirm" id="password_confirm" class="form-control" autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-primary shadow-sm">Cambiar Contraseña</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection