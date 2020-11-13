@extends('layouts.app')
@section('custom-css')
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="css/main-dashboard.css">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <form action="{{route('organizations.index')}}" method="GET" class="form-inline justify-content-center">
                        <div class="input-group mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-clinic-medical"></i>
                                </div>
                            </div>
                            <input type="text" name="search_name" id="search_name" class="form-control" placeholder="Buscar por nombre">
                        </div>
                        <div class="input-group mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-globe-americas"></i>
                                </div>
                            </div>
                            <input type="text" name="search_province" id="search_province" class="form-control" placeholder="Buscar por provincia">
                        </div>
                        {{-- <div class="input-group mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-road"></i>
                                </div>
                            </div>
                            <input type="text" name="search_address" id="search_address" class=" form-control" placeholder="Buscar por domicilio">
                        </div> --}}
                        <button type="submit" class="btn btn-info mr-sm-2">
                            Buscar
                        </button>
                        <a href="{{route('companies')}}" class="btn btn-warning">Limpiar Filtros</a>
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
                                            <h2>Gestionar <b>Farmacias</b></h2>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
                                                <i class="material-icons">&#xE147;</i> <span>Agregar Farmacia</span>
                                            </a>
                                        </div>						
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Domicilio</th>
                                            <th>Provincia</th>
                                            <th>Telefono</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($organizations as $organization)
                                        <tr>
                                            <td>{{$organization->name}}</td>
                                            <td>{{$organization->domicilio}}</td>
                                            <td>{{$organization->provincia}}</td>
                                            <td>{{$organization->telefono}}</td>
                                            <td class="text-center">
                                                <a href="{{route('organizations.edit', $organization->id)}}" class='edit' >
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <a href="{{route('organizations.delete', $organization->id)}}" class" class='delete'>
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center">
                                    {!!$organizations->withQueryString()->links()!!}
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-n4">
                                <a href="{{url()->previous()}}" class="btn btn-secondary">Volver</a>
                            </div>
                        </div>
                    </div>
                    <!-- Add Modal HTML -->
                    <div id="addEmployeeModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form method="POST" action="{{route('organizations.store')}}">
                                    @csrf
                                    <div class="modal-header">						
                                        <h4 class="modal-title">Agregar Farmacia</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">					
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input type="text" name="name"  id="name" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Provincia</label>
                                            <input type="text" name="provincia" id="provincia" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Localidad</label>
                                            <input type="text" class="form-control" name="localidad" id="localidad" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Domicilio</label>
                                            <input type="text" class="form-control" name="domicilio" id="domicilio" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Telefono</label>
                                            <input type="text" class="form-control" name="telefono" id="telefono">
                                        </div>
                                        <div class="form-group">
                                            <label>Notas</label>
                                            <input type="text" class="form-control" name="notas" id="notas">
                                        </div>					
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                        <input type="submit" class="btn btn-info" value="Agregar">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Delete Modal HTML -->
                    <div id="deleteEmployeeModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form>
                                    <div class="modal-header">						
                                        <h4 class="modal-title">Delete Employee</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">					
                                        <p>Are you sure you want to delete these Records?</p>
                                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                        <input type="submit" class="btn btn-danger" value="Delete">
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