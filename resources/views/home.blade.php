@extends('layouts.app')
@section('custom-css')
<link rel="stylesheet" href="css/home.css">
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
                    <div class="card my-3 mx-auto w-50 shadow-sm">
                        <div class="card-header">
                        <h4>Opciones de {{Str::title(auth()->user()->roles()->first()->name)}}</h4>
                        </div>
                        <div class="card-body my-2">
                            <div class="text-center">
                                <a href="{{route('users.index')}}">
                                    <button class="btn btn-primary">Gestionar Usuarios</button>
                                </a>
                            </div>
                            @if (auth()->user()->hasRole('super-admin'))
                            <div class="text-center my-2">
                                <a href="{{route('organizations.index')}}">
                                    <button class="btn btn-success">Gestionar Farmacias</button>
                                </a>
                            </div>
                            <div class="text-center my-2">
                                <a href="#">
                                    <button class="btn btn-info disabled" disabled>
                                        Gestionar Afiliados
                                    </button>
                                </a>
                            </div>
                            <div class="text-center my-2">
                                <a href="{{route('products.index')}}">
                                    <button class="btn btn-warning">Vademecum</button>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
