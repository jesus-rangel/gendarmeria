@extends('layouts.app')
@section('custom-css')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">{{__('Dashboard') }}</div>
        <div class="card-body">
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status')}}
            </div>
          @endif
          <div class="card my-3 mx-auto w-50 shadow">
            <div class="card-header">
              <h4>Editar Usuario</h4>
            </div>
            <div class="card-body my-2">
            <form action="{{route('users.update', $user->id)}}" method="post">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}" required>
              </div>
              <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" name="username" id="username" class="form-control" value="{{$user->username}}" aria-describedby="username_help_text">
                <small class="form-text text-muted" id="username_help_text">
                  *El nombre con el cual el usuario ingresa al sistema
                </small>
              </div>
              <div class="form-group">
                <label for="dni">DNI</label>
                <input type="number" name="dni" id="dni" class="form-control" value="{{$user->dni}}" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}" required>
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

</div>
@endsection