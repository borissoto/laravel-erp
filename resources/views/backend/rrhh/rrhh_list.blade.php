@extends('admin.admin_master')
@section('admin')


<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Lista Recursos Humanos</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Inicio</a></li>
          <li class="breadcrumb-item active">RRHH</li>
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
                <h3 class="card-title">Lista Personal</h3>
              </div>
              <!-- /.box-header -->
              <div class="card-body">
                  {{-- <div class="table-responsive"> --}}
                    <table id="example1" class="table table-bordered table-striped text-sm">
                      <thead>
                          <tr>
                              {{-- <th>N°</th> --}}
                              <th>Usuario</th>
                              <th>Nombres</th>
                              <th>Ap Paterno</th>
                              <th>Ap Materno</th>
                              <th>CI</th>
                              <th>Acciones</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($users as $user) 
                          <tr>
                              {{-- <td>{{ $user->firstItem()+$loop->index}}</td> --}}
                              <td>{{ $user->name}}</td>
                              <td>{{ $user->nombres}}</td>
                              <td>{{ $user->ap_paterno}}</td>
                              <td>{{ $user->ap_materno}}</td>
                              <td>{{ $user->ci}}</td>                              
                              <td>
                                <div class="btn-group">
                                  {{-- <button type="button" class="btn btn-secondary">Action</button> --}}
                                  <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bars"></i>
                                    <span class="sr-only">Toggle Dropdown</span>
                                  </button>
                                  <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="{{ route('rrhh.view', $user->id)}}">Ver</a>
                                    <a class="dropdown-item" href="{{ route('rrhh.edit', $user->id)}}">Editar</a>
                                    <a class="dropdown-item" href="#"></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Asignar EESS</a>
                                    <a class="dropdown-item" href="#">Brigada</a>
                                  </div>
                                </div>
                                {{-- <a href="{{ route('rrhh.view', $user->id)}}" class="btn btn-secondary btn-light" title="Ver"><i class="fa fa-eye" aria-hidden="true"></i></a>      
                                <a href="{{ route('rrhh.edit', $user->id)}}" class="btn btn-secondary btn-light" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></a>      
                                <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target="#view-rrhh" >	Modal</button> --}}
                    
                                {{-- <a href="" class="btn btn-secondary btn-light" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a>       --}}
                              </td>                              
                          </tr>
                          @endforeach                         
                        </tbody>                       
                      </table>
                      <div class="d-flex justify-content-start text-muted">
                        Mostrando {{ $users->firstItem() }} to {{ $users->lastItem() }} de {{$users->total()}} registros.
                        </div>
                      <div class="d-flex justify-content-end">
                        {{$users->links('pagination::bootstrap-4')}}                   
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

        <!-- Modal -->
      </div>
    </section>
      <!-- /.content -->
    

</div>   
@endsection