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
                            @if(auth()->user()->hasRole('super-admin') || 
                                auth()->user()->hasRole('admin'))
                            <div class="text-center">
                                <a href="{{route('users.index')}}">
                                    <button class="btn btn-primary">
                                        Administración de Usuarios
                                    </button>
                                </a>
                            </div>
                            @endif
                            @if (auth()->user()->hasRole('super-admin'))
                            <div class="text-center my-2">
                                <a href="{{route('farmacias.index')}}">
                                    <button class="btn btn-success">
                                        Administración de Farmacias
                                    </button>
                                </a>
                            </div>
                            @endif
                            <div class="text-center my-2">
                                <a href="{{route('clientes.index')}}">
                                    <button class="btn btn-info">
                                        Afiliados
                                    </button>
                                </a>
                            </div>
                            <div class="text-center my-2">
                                <a href="{{route('vademecum.index')}}">
                                    <button class="btn btn-warning">Vademecum</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
