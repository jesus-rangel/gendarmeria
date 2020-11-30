@extends('layouts.app')
@section('custom-css')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="{{asset('css/main-dashboard.css')}}">
<link rel="stylesheet" href="{{asset('css/product-details.css')}}">
@endsection
@section('content')
<div class="container" id="main-container">
  <div class="row justify-content-center align-items-center">
    <div class="col-md-12 row justify-content-center">
      <div class="card card-product">
        <div class="card-header">
          <h3>{{$product->nombre}}</h3>
        </div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group row">
             <label for="monodroga" class="col-sm-3 col-form-label">
               <b>Monodroga</b>
              </label>
              <div class="col-sm-9">
                <input type="text" name="monodroga" id="monodroga" class="form-control-plaintext" readonly value="{{$product->monodroga}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="presentacion" class="col-sm-3 col-form-label">
                <b>Presentación</b>
              </label>
              <div class="col-sm-9">
                <input type="text" name="" id="presentacion" class="form-control-plaintext" readonly value="{{$product->presentacion}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="laboratorio" class="col-sm-3 col-form-label">
                <b>Laboratorio</b>
              </label>
              <div class="col-sm-9">
                <input type="text" name="laboratorio" id="laboratorio" class="form-control-plaintext" readonly value="{{$product->laboratorio}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="troquel" class="col-sm-3 col-form-label">
                <b>Troquel</b>
              </label>
              <div class="col-sm-9">
                <input type="text" name="troquel" id="troquel" class="form-control-plaintext" readonly value="{{$product->troquel}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="registro" class="col-sm-3 col-form-label">
                <b>Registro</b>
              </label>
              <div class="col-sm-9">
                <input type="text" name="registro" id="registro" class="form-control-plaintext" readonly value="{{$product->registro}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="descuento" class="col-sm-3 col-form-label">
                <b>Descuento</b>
              </label>
              <div class="col-sm-9">
                <input type="text" name="descuento" id="descuento" class="form-control-plaintext" readonly value="Hasta: {{$product->farmacias_convenidas}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="vademecum" class="col-sm-3 col-form-label">
                <b>Vademecum</b>
              </label>
              <div class="col-sm-9">
                <input type="text" name="vademecum" id="vademecum" class="form-control-plaintext" readonly value="{{$product->vademecum}}">
              </div>
            </div>
            <hr>
            <p>Si desea agregar este medicamento a</p>
            <div class="client_name_container">
              <div class="client_name">
                Edith Beatriz Aguirre
              </div>
            </div>
            <div class="dni">
              <b>DNI: </b>
            </div>
            <div class="codigo_estadistico">
              <b>Código Estadistico: </b>
            </div>
            <p class="mt-2">Haga click aquí</p>
            <a href="#" class="btn btn-success mb-2">Agregar Medicamento</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('custom-js')
<script src="js/user-dashboard.js"></script>
@endsection