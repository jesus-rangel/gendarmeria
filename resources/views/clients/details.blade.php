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
        <div class="container-xl">
          <div class="table-responsive">
            <div class="table-wrapper">
              <div class="table-title">
                <div class="row">
                  <div class="col-sm-6">
                    <h3><b>Medicamentos</b> adquiridos este mes</h3>
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
                    <th>Troquel</th>
                    <th>Descuento</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($client->products as $product)
                    <tr>
                      <td>{{$product->monodroga}}</td>
                      <td>{{$product->nombre}}</td>
                      <td>{{$product->laboratorio}}</td>
                      <td>{{$product->presentacion}}</td>
                      <td>{{$product->troquel}}</td>
                      <td class="text-center">Hasta: {{$product->farmacias_convenidas}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="d-flex justify-content-end mt-n4">
            <a href="{{url()->previous()}}" class="btn btn-secondary">Volver</a>
          </div>
        </div>
        <div class="card-footer card-footer-client">
          <div class="row">
            <a href="{{route('clients.add-product', $client->id)}}" class="btn btn-info my-2"
              {{$client->A_farmacos + $client->A_farmacosextra >= 6 ? 'disabled' : ''}}
            >
              Agregar Medicamento
            </a>
          </div>
          <div class="row">
            <small class="text-muted text-center">
              *El máximo de medicamentos que este afiliado puede adquirir al mes es de: 
              <b>{{$client->A_farmacos + $client->A_farmacosextra}}</b>
            </small>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection
@section('custom-js')
<script src="js/user-dashboard.js"></script>
@endsection