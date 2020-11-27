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
                    <form action="{{route('products.index')}}" method="GET" class=" justify-content-center">
                        <div class="form-inline mb-2 justify-content-center">
                            <div class="input-group mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-file-signature"></i>
                                    </div>
                                </div>
                                <input type="text" name="search_name" id="search_name" class="form-control" placeholder="Buscar por nombre">
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
                                <input type="text" name="search_code" id="search_code" class=" form-control" placeholder="Buscar por código">
                            </div>
                        </div>
                        <div class="form-inline justify-content-center">
                            <button type="submit" class="btn btn-info mr-sm-2">
                                Buscar
                            </button>
                            <a href="{{route('products.index')}}" class="btn btn-warning">Limpiar Filtros</a>
                        </div>
                    </form>
                    {{-- <div class="d-flex justify-content-center">
                        <small class="text-center text-secondary mt-1">
                            *Se pueden combinar los filtros de búsqueda como el usuario desee
                        </small>
                    </div> --}}
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
                                            <h2>Gestionar <b>Medicamentos</b></h2>
                                        </div>                               	
                                    </div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Monodroga</th>
                                            <th>Nombre</th>
                                            <th>Laboratorio</th>
                                            <th>Presentación</th>
                                            <th>Código</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                        <tr>
                                            <td>{{$product->monodroga}}</td>
                                            <td>{{$product->nombre}}</td>
                                            <td>{{$product->laboratorio}}</td>
                                            <td>{{$product->presentacion}}</td>
                                            <td class="text-center"> {{$product->troquel}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center">
                                    {!!$products->withQueryString()->links()!!}
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
</div>
@endsection
@section('custom-js')
<script src="js/user-dashboard.js"></script>
@endsection