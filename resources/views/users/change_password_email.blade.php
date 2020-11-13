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
                    <div class="card my-3 mx-auto w-50 shadow-sm">
                       <div class="card-header">
                         En construcción
                       </div>
                       <div class="card-body">
                         <p class="text-center">
                          Esta vista permitirá enviar un correo manualmente a quien pida cambio de contraseña con un link para poder hacerlo. 
                         </p>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
