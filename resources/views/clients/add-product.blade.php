@extends('layouts.app')
@section('custom-css')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="{{asset('css/main-dashboard.css')}}">
<link rel="stylesheet" href="{{asset('css/client-details.css')}}">
@endsection
@section('content')
<div class="container" id="main-container">
  <div class="row justify-content-center align-items-center">
    <div class="card card-client">
      <div class="card-header card-header-client">
        <div class="profile_pic">
        <img src="{{asset('img/client.png')}}">
        </div>
      </div>
      <div class="card-body card-body-client">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="d-flex justify-content-center flex-column">
          <div class="name_container">
            <div class="name">
              {{ucwords(strtolower($client->A_nombre . ' ' . $client->A_apellido))}}
            </div>
          </div>
          <div class="address">
              {{ucwords(strtolower("{$client->A_domicilio}, {$client->A_localidad}, {$client->A_provincia}"))}}
            </div>
            <div class="dni"><strong>DNI:&nbsp;</strong>{{$client->A_dni}}</div>
            <div class="codigo_estadistico">
              <b>Código Estadístico:&nbsp;</b>{{$client->A_codest}}
            </div>
        </div>
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
      </div>
        <div class="container-xl">
          <div class="table-responsive">
              <div class="table-wrapper">
                  <div class="table-title">
                      <div class="row">
                          <div class="col-sm-6">
                              <h3>Agregar <b>Medicamentos</b></h3>
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
                              <th>Acciones</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($products as $product)
                          <tr>
                              <td>{{$product->monodroga}}</td>
                              <td>{{$product->nombre}}</td>
                              <td>{{$product->laboratorio}}</td>
                              <td>{{$product->presentacion}}</td>
                              <td> {{$product->troquel}}</td>
                              <td class="text-center">
                                <a href="{{route('products.show', $product->id)}}" class="btn btn-success text-white">
                                    Agregar
                                  </a>
                              </td>
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
        <div class="card-footer card-footer-client">
      
        </div>
    </div>
  </div>
</div>
@endsection
@section('custom-js')
<script src="js/user-dashboard.js"></script>
@endsection