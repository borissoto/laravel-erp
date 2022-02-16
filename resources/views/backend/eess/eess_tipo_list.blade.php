@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <div class="container-full">
      <!-- Content Header (Page header) -->

       <!-- /.content-wrapper -->

   <!-- Modal -->
 <div class="modal center-modal fade" id="modal-center" tabindex="-1">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title">Modal title</h5>
    <button type="button" class="close" data-dismiss="modal">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">
    <p>Your content comes here</p>
    </div>
    <div class="modal-footer modal-footer-uniform">
    <button type="button" class="btn btn-rounded btn-secondary" data-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-rounded btn-primary float-right">Save changes</button>
    </div>
  </div>
  </div>
</div>
<!-- /.modal -->
      
      <!-- Main content -->
      <section class="content">
        <div class="row">          
       
          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Lista Tipo Establecimientos de Salud</h3>
                {{-- <div class="text-xs-right">  --}}
                    <a href="{{ route('eess.tipo.add')}}" style="float: right;" class="btn btn-rounded btn-primary mb-5">Nuevo Tipo EESS</a>
                {{-- </div> --}}
                {{-- <button type="button"  style="float: right;" class="btn btn-rounded btn-info" data-toggle="modal" data-target="#modal-center">
                  Nuevo Tipo EESS
                  </button> --}}

              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>Nro</th>
                              <th>Tipo de EESS</th>
                              <th>Abreviatura</th>                              
                              <th>Acciones</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($eess_tipos as $eess_tipo) 
                          <tr>
                              <td></td>
                              <td>{{ $eess_tipo->tipo_eess}}</td>
                              <td>{{ $eess_tipo->abreviatura}}</td>                                                     
                              <td>
                              {{-- <a href=" {{ route('user.edit', $user->id)}}" class="btn btn-info" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></a>      
                              <a href="" class="btn btn-success" title="Ver"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>      
                              <a href="" class="btn btn-danger" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a>       --}}
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