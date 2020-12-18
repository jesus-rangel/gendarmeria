@extends('layouts.app')
@section('custom-css')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="{{asset('css/main-dashboard.css')}}">
@endsection
@section('content')
<div class="container" id="main-container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <form action="{{route('vademecum.index')}}" method="GET" class=" justify-content-center">
                        <div class="form-inline mb-2 justify-content-center">
                            <div class="input-group mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-file-signature"></i>
                                    </div>
                                </div>
                                <input type="text" name="search_nombre" id="search_nombre" class="form-control" placeholder="Buscar por nombre">
                            </div>
                            <div class="input-group mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-flask"></i>
                                    </div>
                                </div>
                                <input type="text" name="search_monodroga" id="search_monodroga" class="form-control" placeholder="Buscar por monodroga">
                            </div>
                            <div class="input-group mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-vials"></i>
                                    </div>
                                </div>
                                <input type="text" name="search_lab" id="search_lab" class=" form-control" placeholder="Buscar por laboratorio">
                            </div>
                            <div class="input-group mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-barcode"></i>
                                    </div>
                                </div>
                                <input type="text" name="search_troquel" id="search_troquel" class=" form-control" placeholder="Buscar por troquel">
                            </div>
                        </div>
                        <div class="form-inline justify-content-center">
                            <button type="submit" class="btn btn-info mr-sm-2">
                                Buscar
                            </button>
                            <a href="{{route('vademecum.index')}}" class="btn btn-warning">Limpiar Filtros</a>
                        </div>
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
                                            <h2>Administración de <b>Medicamentos</b></h2>
                                        </div>                               	
                                    </div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Monodroga</th>
                                            <th>Laboratorio</th>
                                            <th>Presentación</th>
                                            <th>Troquel</th>
                                            <th>Descuento</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($vademecum as $medicamento)
                                        <tr>
                                            <td>{{$medicamento->nombre}}</td>
                                            <td>{{$medicamento->monodroga}}</td>
                                            <td>{{$medicamento->laboratorio}}</td>
                                            <td>{{$medicamento->presentacion}}</td>
                                            <td> {{$medicamento->troquel}}</td>
                                            <td class="text-center">
                                                Hasta: {{$medicamento->farmacias_convenidas}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center">
                                    {!!$vademecum->withQueryString()->links()!!}
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
</div>
@endsection