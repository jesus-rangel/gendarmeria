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
                    <form action="{{route('users.index')}}" method="get" class="form-inline justify-content-center">
                        <div class="input-group mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <input type="text" name="search_name" id="search_name" class="form-control" placeholder="Buscar por nombre">
                        </div>
                        <div class="input-group mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-address-card"></i>
                                </div>
                            </div>
                            <input type="text" name="search_dni" id="search_dni" class="form-control" placeholder="Buscar por DNI">
                        </div>
                        
                        <button type="submit" class="btn btn-info mr-sm-2">Buscar</button>
                        <a href="{{route('users.index')}}" class="btn btn-warning">Limpiar Filtros</a>
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
                                            <h2>Gestionar <b>Usuarios</b></h2>
                                        </div>
                                        @if (auth()->user()->hasRole(['super-admin', 'admin']))
                                        <div class="col-sm-6">
                                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
                                                <i class="material-icons">&#xE147;</i> <span>Agregar Usuario</span>
                                            </a>					
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>DNI</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->username}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->dni}}</td>
                                            <td class="text-center">
                                                <a href="{{route('users.edit', $user->id)}}" class='edit'>
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <a href=" {{route('users.delete', $user->id)}} " class='delete'>
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                                {{-- <a href=" {{route('users.change-password-email')}} " class='password'>
                                                    <i class='fas fa-key'></i>
                                                </a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$users->withQueryString()->links()}}
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-n4">
                            <a href="{{url()->previous()}}" class="btn btn-secondary">Volver</a>
                        </div>        
                    </div>
                    <!-- Add Modal HTML -->
                    <div id="addEmployeeModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form method="POST" action=" {{route('users.store')}} ">
                                    @csrf
                                    <div class="modal-header">						
                                        <h4 class="modal-title">Agregar Usuario</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">					
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input type="text" name="name"  id="name" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>User Name</label>
                                            <input type="text" name="username" id="username" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" id="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>DNI</label>
                                            <input type="text" class="form-control" name="dni" id="dni" required>
                                        </div>
                                        @if (auth()->user()->hasRole('super-admin'))
                                        <div class="form-group">
                                            <label for="user_role">Rol</label>
                                            <select name="user_role" id="user_role" class="form-control">
                                                @foreach($roles as $role)
                                                <option value="{{$role->id}}">
                                                    {{$role->name}}
                                                </option>
                                                @endforeach   
                                            </select>    
                                        </div>
                                        @endif					
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                        <input type="submit" class="btn btn-info" value="Agregar">
                                    </div>
                                </form>
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


