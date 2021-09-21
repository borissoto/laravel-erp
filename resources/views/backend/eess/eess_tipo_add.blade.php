@extends('admin.admin_master')
@section('admin')


	  <div class="container-full">
		<!-- Content Header (Page header) -->
  

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Añadir Tipo de Establecimiento de Salud</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
				    <form method="post" action="{{ route('eess.tipo.store')}}" enctype="multipart/form-data">
						@csrf

					    <div class="row">
                            <div class="col-md-4"> 
                                <div class="form-group">
                                    <h5>Nombre del Tipo de EESS <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="tipo_eess" class="form-control" required data-validation-required-message="This field is required"> 
										
                                    </div>
                                </div>                               

                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Abreviatura<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="abreviatura" class="form-control" required data-validation-required-message="This field is required"> 
                                    </div>
                                </div>

                            </div>
                            
                        </div>                                        								                      		                      
						<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Guardar"  >
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>


    
@endsection