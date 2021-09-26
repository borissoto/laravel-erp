@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


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
                                <a href="{{ route('rrhh.view', $user->id)}}" class="btn btn-secondary btn-light" title="Ver"><i class="fa fa-eye" aria-hidden="true"></i></a>      
                              <a href="{{ route('rrhh.edit', $user->id)}}" class="btn btn-secondary btn-light" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></a>      
                              <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target="#smallModal" id="smallButton">	Modal</button>
                    
                              {{-- <a href="" class="btn btn-secondary btn-light" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a>       --}}
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

        <!-- Modal -->
 
      </section>
      <!-- /.content -->
    

</div>

{{-- <div class="modal center-modal fade" id="modal-center" tabindex="-1">
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
    <button type="button" class="btn btn-rounded btn-secondary" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-rounded btn-primary float-right">Save changes</button>
    </div>
  </div>
  </div>
</div> --}}
<!-- /.modal -->

    <!-- small modal -->
    <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="smallBody">
                    <div>
                        <!-- the result to be displayed apply here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
  // display a modal (small modal)
  $(document).on('click', '#smallButton', function(event) {
      event.preventDefault();
      let href = $(this).attr('data-attr');
      $.ajax({
          url: href,
          beforeSend: function() {
              $('#loader').show();
          },
          // return the result
          success: function(result) {
              $('#smallModal').modal("show");
              $('#smallBody').html(result).show();
          },
          complete: function() {
              $('#loader').hide();
          },
          error: function(jqXHR, testStatus, error) {
              console.log(error);
              alert("Page " + href + " cannot open. Error:" + error);
              $('#loader').hide();
          },
          timeout: 8000
      })
  });

</script>
@endsection