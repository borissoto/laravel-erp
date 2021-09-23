@extends('admin.admin_master')
@section('admin')


    <div class="container-full">
      <!-- Content Header (Page header) -->
      
      <!-- Main content -->
      <section class="content">
        <div class="row">          
       
          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Lista Personal</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
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
                              <td>{{ $user->name}}</td>
                              <td>{{ $user->nombres}}</td>
                              <td>{{ $user->ap_paterno}}</td>
                              <td>{{ $user->ap_materno}}</td>
                              <td>{{ $user->ci}}</td>                              
                              <td>
                              <a href=" {{ route('user.edit', $user->id)}}" class="btn btn-secondary btn-light" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></a>      
                              <a href="" class="btn btn-secondary btn-light" title="Ver"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>      
                              <a href="" class="btn btn-secondary btn-light" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a>      
                            </td>                              
                          </tr>
                          @endforeach                         
                      </tbody>
                      <tfoot>
                       
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->          
                    
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    

</div>

@endsection