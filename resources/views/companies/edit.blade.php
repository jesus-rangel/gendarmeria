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
                    <div class="card my-3 mx-auto w-50 shadow">
                        <div class="card-header">
                            <h4>Editar Farmacia</h4>
                        </div>
                        <div class="card-body my-2">
                          <form action="{{route('organizations.update', $organization->id)}}" method="post">
                            @csrf
                            @method('PUT')
                          <div class="form-group">
                            <label>Nombre</label>
                          <input type="text" name="name"  id="name" class="form-control" required value="{{$organization->name}}">
                          </div>
                          <div class="form-group">
                              <label>Domicilio</label>
                              <input type="text" name="domicilio" id="domicilio" class="form-control" required value="{{$organization->domicilio}}">
                          </div>
                          <div class="form-group">
                              <label>Provincia</label>
                              <input type="text" class="form-control" name="provincia" id="provincia" required value="{{$organization->provincia}}">
                          </div>
                          <div class="form-group">
                              <label>Telefono</label>
                              <input type="text" class="form-control" name="telefono" id="telefono" required value="{{$organization->telefono}}">
                          </div>					
                          </div>
                          <div class="card-footer">
                            <a href="{{url()->previous()}}" class="btn btn-default">
                              Cancelar
                            </a>
                            <input type="submit" class="btn btn-success" value="Guardar Cambios">
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection