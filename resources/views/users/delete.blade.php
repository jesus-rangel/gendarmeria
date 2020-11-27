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
                       <div class="card-body">
                          <h4>Eliminar Usuario</h4>
                          <div class="d-flex justify-content-center">
                            <div class="alert alert-danger w-75">
                                Confirme que desea eliminar al usuario:
                            </div> 
                          </div>
                          <form action=" {{route('users.destroy', $user->id)}} " method="post">
                            @csrf
                            @method('DELETE')
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" id="name" class="form-control disabled" value=" {{$user->name}} ">
                            </div>
                            <div class="form-group">
                                <label for="name">User Name</label>
                                <input type="text" name="username" id="username" class="form-control disabled" value=" {{$user->username}} ">
                            </div>
                            <div class="form-group">
                                <label for="name">DNI</label>
                                <input type="text" name="dni" id="dni" class="form-control disabled" value=" {{$user->dni}} ">
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="text" name="email" id="email" class="form-control disabled" value=" {{$user->email}} ">
                            </div>
                            <div class="card-footer">
                                <a href="{{url()->previous()}}" class="btn btn-default">
                                  Cancelar
                                </a>
                                <input type="submit" class="btn btn-danger" value="Eliminar">
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