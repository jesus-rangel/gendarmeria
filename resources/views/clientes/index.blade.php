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
                    <form action="{{route('clientes.index')}}" method="get" class="form-inline justify-content-center">
                        <div class="input-group mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-address-card"></i>
                                </div>
                            </div>
                            <input type="text" name="search_dni" id="search_dni" class="form-control" placeholder="Buscar por DNI">
                        </div>
                        
                        <button type="submit" class="btn btn-info mr-sm-2">Buscar</button>
                        <a href="{{route('clientes.index')}}" class="btn btn-warning">Limpiar Filtros</a>
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
                                            <h2>Administración de <b>Afiliados</b></h2>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th width="20%">Nombre</th>
                                            <th class="text-center">DNI</th>
                                            <th class="text-center">Código Estadístico</th>
                                            <th class="text-center">Parentesco</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clientes as $cliente)
                                        <tr>
                                            <td width="20%">
                                              {{ucwords(strtolower($cliente->nombre . ' ' .$cliente->apellido))}}
                                            </td>
                                            <td class="text-center">
                                              {{$cliente->dni}}
                                            </td>
                                            <td class="text-center">
                                                {{$cliente->codest}}
                                            </td>
                                            <td class="text-center">
                                                @if($cliente->parentesco == 1) {{'Padre'}}
                                                @elseif($cliente->parentesco == 2){{'Madre'}}
                                                @elseif($cliente->parentesco == 3){{'Hijo/a'}}
                                                @elseif($cliente->parentesco == 4){{'Suegro/a'}}
                                                @elseif($cliente->parentesco == 5){{'Yerno'}}
                                                @elseif($cliente->parentesco == 6){{'Nuera'}}
                                                @elseif($cliente->parentesco == 7){{'Abuelo/a'}}
                                                @elseif($cliente->parentesco == 8){{'Nieto/a'}}
                                                @elseif($cliente->parentesco == 9){{'Hermano/a'}}
                                                @elseif($cliente->parentesco == 10){{'Cuñado/a'}}
                                                @elseif($cliente->parentesco == 11){{'Tío/a'}}
                                                @elseif($cliente->parentesco == 12){{'Sobrino/a'}}
                                                @elseif($cliente->parentesco == 13){{'Cónyuge'}}
                                                @elseif($cliente->parentesco == 14){{'Conviviente'}}
                                                @elseif($cliente->parentesco == 15){{'Hijastro/a'}}
                                                @elseif($cliente->parentesco == 16 
                                                    || $cliente->parentesco == ''){{'Otro'}}
                                                @elseif($cliente->parentesco > 17){{'Titular'}}
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <a href="{{route('clientes.show', $cliente->dni)}}" class='edit'>
                                                  <i class="fas fa-search"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$clientes->withQueryString()->links()}}
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-n4">
                            <a href="{{route('home')}}" class="btn btn-secondary">Volver</a>
                        </div>        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection