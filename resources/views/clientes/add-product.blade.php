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
        <div class="card-header">
        <form action="{{route('clientes.add-product', $cliente->dni)}}" method="GET" class=" justify-content-center">
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
                  <input type="text" name="search_troquel" id="search_troquel" class=" form-control" placeholder="Buscar por troquel">
              </div>
          </div>
          <div class="form-inline justify-content-center">
              <button type="submit" class="btn btn-info mr-sm-2">
                  Buscar
              </button>
              <a href="{{route('clientes.add-product', $cliente->dni)}}" class="btn btn-warning">Limpiar Filtros</a>
          </div>
        </form>
      </div>
      @if($cliente
            ->operaciones()
            ->where('purchase_date', '>=' ,Carbon\Carbon::now()->startOfMonth())
            ->where('purchase_date', '<=' ,Carbon\Carbon::now()) 
            ->count() >= 6)  
        <p class="text-center text-danger mb-n3 mt-2">El afiliado alcanzó el límite mensual de medicamentos a retirar</p>
      @endif
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
                          @foreach ($vademecum as $medicamento)
                          <tr>
                              <td>{{$medicamento->nombre}}</td>
                              <td>{{$medicamento->monodroga}}</td>
                              <td>{{$medicamento->laboratorio}}</td>
                              <td>{{$medicamento->presentacion}}</td>
                              <td> {{$medicamento->troquel}}</td>
                              <td>Hasta 40%</td>
                              <td class="text-center">
                                  @if($cliente
                                    ->operaciones()
                                    ->where('purchase_date', '>=' ,Carbon\Carbon::now()->startOfMonth())
                                    ->where('purchase_date', '<=' ,Carbon\Carbon::now())
                                    ->count() < 6)
                                        <form action="{{route('operacion.store')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="dni_cliente" value="{{$cliente->dni}}">
                                            <input type="hidden" name="id_vademecum" value="{{$medicamento->id}}">
                                            <button type="submit" class="btn btn-success text-white"
                                                onclick="confirmAgregar()">Agregar</button>
                                        </form>
                                    @else
                                        <button class="btn btn-secondary text-secondary" disabled>Agregar</button>
                                    @endif
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                  <div class="d-flex justify-content-center">
                      {!!$vademecum->withQueryString()->links()!!}
                  </div>
              </div>
              <div class="d-flex justify-content-end mt-n4">
                  <a href="{{route('clientes.show', $cliente->dni)}}" class="btn btn-secondary">Volver</a>
              </div>
          </div>
      </div>
        <div class="card-footer card-footer-client">
        

        <!-- Add Modal HTML -->
        <div id="add_product_modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action=" {{route('users.store')}} ">
                        @csrf
                        <div class="modal-header">						
                            <h4 class="modal-title">Agregar Medicamento</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <div class="form-group row">
                                <label for="nombre" class="col-sm-4 col-form-label">
                                    <b>Nombre</b>
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" name="nombre"  id="nombre" class="form-control-plaintext" readonly value="Nombre">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="monodroga" class="col-sm-4 col-form-label">
                                  <b>Monodroga</b>
                                </label>
                                <div class="col-sm-8">
                                   <input type="text" name="monodroga" id="monodroga" class="form-control-plaintext" readonly value="Monodroga">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="laboratorio" class="col-sm-4 col-form-label">
                                    <b>Laboratorio</b>
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control-plaintext" name="laboratorio" id="laboratorio" readonly value="Laboratorio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="presentacion" class="col-sm-4 col-form-label">
                                    <b>Presentación</b>
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control-plaintext" name="presentacion" id="presentacion" readonly value="Presentación">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="troquel" class="col-sm-4 col-form-label">
                                    <b>Troquel</b>
                                </label>
                                <div class="col-sm-8">
                                    <input type="number" name="troquel" id="troquel" class="form-control-plaintext" readonly value="Troquel">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="descuento">
                                    <b>Descuento</b>
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" name="descuento" id="descuento" class="form-control-plaintext" readonly value="Hasta 40%">
                                </div>
                            </div>				
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                            <input type="submit" class="btn btn-success" value="Agregar">
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
@section('custom-js')
<script src="js/user-dashboard.js"></script>
<script>
    function confirmAgregar()
    {
        console.log('entre');
        if(confirm('Esta seguro de querer agregar este medicamento?'))
        {
            alert('Medicamento agregado');
        }
        else
        {
            preventDefault();
            alert('Operación Cancelada');
        }
    }
</script>
@endsection