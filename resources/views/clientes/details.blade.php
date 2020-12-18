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
              {{ucwords(strtolower($cliente->nombre . ' ' . $cliente->apellido))}}
            </div>
          </div>
          <div class="dni"><strong>DNI:&nbsp;</strong>{{$cliente->dni}}</div>
          <div class="codigo_estadistico">
            <b>Código Estadístico:&nbsp;</b>{{$cliente->codest}}
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
                    <th>Nombre</th>
                    <th>Monodroga</th>
                    <th>Laboratorio</th>
                    <th>Presentación</th>
                    <th>Troquel</th>
                    <th>Descuento</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($operaciones as $operacion)
                    <tr>
                      <td>{{$operacion->vademecum->nombre}}</td>
                      <td>{{$operacion->vademecum->monodroga}}</td>
                      <td>{{$operacion->vademecum->laboratorio}}</td>
                      <td>{{$operacion->vademecum->presentacion}}</td>
                      <td>{{$operacion->vademecum->troquel}}</td>
                      <td class="text-center">Hasta 40%</td>
                      @if ($operacion->purchase_date <= Carbon\Carbon::now()->endOfDay() && $operacion->purchase_date >= Carbon\Carbon::now()->startOfDay())
                      <td class="text-center">
                        <a href="{{route('operacion.destroy', $operacion->id)}}" class="btn btn-danger text-white">Borrar</a>
                      </td>
                      @else
                      <td></td>
                      @endif
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="d-flex justify-content-end mt-n4">
            <a href="{{route('clientes.index')}}" class="btn btn-secondary">Volver</a>
          </div>
        </div>
        <div class="card-footer card-footer-client">
          <div class="row">
            <a href="{{route('clientes.add-product', $cliente->dni)}}" class="btn btn-info my-2">
              Agregar Medicamento
            </a>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection