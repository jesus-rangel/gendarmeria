@extends('layouts.app')
@section('custom-css')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="{{asset('css/main-dashboard.css')}}">
@endsection
@section('content')
<div class="container"vid="main-container">
    <div class="row justify-content-center" >
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{-- {{ __('Dashboard') }} --}}
                    <form action="{{route('clients.index')}}" method="get" class="form-inline justify-content-center">
                        <div class="input-group mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-address-card"></i>
                                </div>
                            </div>
                            <input type="text" name="search_dni" id="search_dni" class="form-control" placeholder="Buscar por DNI">
                        </div>
                        
                        <button type="submit" class="btn btn-info mr-sm-2">Buscar</button>
                        <a href="{{route('clients.index')}}" class="btn btn-warning">Limpiar Filtros</a>
                    </form>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="container-xl">
                        <div class="table-responsive">
                            <div class="table-wrapper">
                                <div class="table-title">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2>Gestionar <b>Afiliados</b></h2>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>DNI</th>
                                            <th>Domicilio</th>
                                            <th>Provincia</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clients as $client)
                                        <tr>
                                            <td>
                                              {{ucwords(strtolower($client->A_nombre . ' ' .$client->A_apellido))}}
                                            </td>
                                            <td>
                                              {{ucwords(strtolower($client->A_dni))}}
                                            </td>
                                            <td>
                                              {{ucwords(strtolower($client->A_domicilio))}}
                                            </td>
                                            <td>
                                              {{ucwords(strtolower($client->A_provincia))}}
                                            </td>
                                            <td class="text-center">
                                                <a href="{{route('clients.show', $client->id)}}" class='edit'>
                                                  <i class="fas fa-search"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$clients->withQueryString()->links()}}
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-n4">
                            <a href="{{url()->previous()}}" class="btn btn-secondary">Volver</a>
                        </div>        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('custom-js')
<script src="js/client-dashboard.js"></script>
@endsection