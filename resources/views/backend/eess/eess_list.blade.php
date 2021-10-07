@extends('admin.admin_master')
@section('admin')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Lista Establecimientos de Salud</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Inicio</a></li>
          <li class="breadcrumb-item active">Eess</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
      
      <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">      
       
          <div class="col-12">

           <div class="card">
              <div class="card-header">
                {{-- <a href="{{ route('eess.tipo.add')}}" style="float: right;" class="btn btn-rounded btn-primary mb-5">Nuevo Tipo EESS</a> --}}
                <h3 class="card-title">Lista Establecimientos</h3>
                {{-- <div class="text-xs-right">  --}}
                {{-- </div> --}}
                {{-- <button type="button"  style="float: right;" class="btn btn-rounded btn-info" data-toggle="modal" data-target="#modal-center">
                  Nuevo Tipo EESS
                  </button> --}}

              </div>
              <!-- /.box-header -->
              <div class="card-body">
                  {{-- <div class="table-responsive"> --}}
                    <table id="example1" class="table table-bordered table-striped text-sm">
                      <thead>
                          <tr>
                              {{-- <th>N°</th> --}}
                              <th>Establecimiento</th>
                              <th>Dpto</th>
                              <th>Municipio</th>                              
                              <th>Cod-Red</th>
                              <th>Tipo</th>
                              {{-- <th>SubSector</th>
                              <th>Ambito</th>
                              <th>Dependencia</th> --}}
                              <th>Nivel</th>
                              <th>Cod-SNIS</th>
                              {{-- <th>Latitud</th> --}}
                              {{-- <th>Longitud</th> --}}
                              {{-- <th>Soaps</th> --}}
                              {{-- <th>Estado</th> --}}
                              <th>Acciones</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($establecimientos as $establecimiento) 
                          <tr>
                              {{-- <td></td> --}}
                              <td>{{ $establecimiento->nom_establecimiento}}</td>                                                     
                              <td>{{ $establecimiento->departamento->abreviatura}}</td>
                              <td>{{ $establecimiento->municipio->nom_municipio}}</td>                                                     
                              <td>{{ $establecimiento->cod_red}}</td>                                                     
                              <td>{{ $establecimiento->tipo}}</td>                                                     
                              {{-- <td>{{ $establecimiento->subsector}}</td>                                                     
                              <td>{{ $establecimiento->ambito}}</td>                                                     
                              <td>{{ $establecimiento->dependencia}}</td>                                                      --}}
                              <td>{{ $establecimiento->nivel}}</td>                                                     
                              <td>{{ $establecimiento->codsnis}}</td>                                                     
                              {{-- <td>{{ $establecimiento->lat}}</td>                                                      --}}
                              {{-- <td>{{ $establecimiento->long}}</td>                                                      --}}
                              {{-- <td>{{ $establecimiento->soaps}}</td>                                                      --}}
                              {{-- <td>{{ $establecimiento->estado}}</td>                                                      --}}
                              <td>
                                <div class="btn-group">
                                  {{-- <button type="button" class="btn btn-secondary">Action</button> --}}
                                  <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bars"></i>
                                    <span class="sr-only">Toggle Dropdown</span>
                                  </button>
                                  <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="{{ route('eess.view', $establecimiento->id)}}">Ver</a>
                                    <a class="dropdown-item" href="#">Editar</a>
                                    <a class="dropdown-item" href="#"></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Asignar EESS</a>
                                    <a class="dropdown-item" href="#">Brigada</a>
                                  </div>
                                </div>                            
                            </td>                              
                          </tr>
                          @endforeach                         
                      </tbody>                      
                       
                    </table>
                    <div class="d-flex justify-content-start text-muted">
                    Mostrando {{ $establecimientos->firstItem() }} to {{ $establecimientos->lastItem() }} de {{$establecimientos->total()}} registros.
                    </div>
                    <div class="d-flex justify-content-end">
                    {{$establecimientos->links('pagination::bootstrap-4')}}                   
                    </div>
                  {{-- </div> --}}
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->          
                    
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </section>
      <!-- /.content -->

</div>



@endsection