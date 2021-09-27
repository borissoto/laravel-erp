@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Lista Recrusos Humanos</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Simple Tables</li>
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
                                <a href="{{ route('rrhh.view', $user->id)}}" class="btn btn-secondary btn-light" title="Ver"><i class="fa fa-eye" aria-hidden="true"></i></a>      
                                <a href="{{ route('rrhh.edit', $user->id)}}" class="btn btn-secondary btn-light" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></a>      
                                <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target="#view-rrhh" >	Modal</button>
                    
                                {{-- <a href="" class="btn btn-secondary btn-light" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a>       --}}
                              </td>                              
                          </tr>
                          @endforeach                         
                        </tbody>                       
                      </table>
                      {{$users->links('pagination::bootstrap-4')}}
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