@extends('admin.admin_master')
@section('admin')


	  <div class="container-full">
		<!-- Content Header (Page header) -->
  

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Añadir Usuario</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
				    <form novalidate>
					    <div class="row">
                            <div class="col-md-4"> 
                                <div class="form-group">
                                    <h5>Nombres <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required"> 
                                    </div>
                                </div>                               

                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Apellido Paterno<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="ap_paterno" class="form-control" required data-validation-required-message="This field is required"> 
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Apellido Materno<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="ap_paterno" class="form-control" required data-validation-required-message="This field is required"> 
                                    </div>
                                </div>

                            </div>
                        </div>                  
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <h5>CI <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input name="number" id="ci" class="form-control" required placeholder="Documento de Identidad" />
                                    </div>
                                </div>                                    
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <h5>Abreviatura <span class="text-danger"></span></h5>
                                    <div class="controls">
                                        <select name="departamento_id" class="form-control" >
                                            <option value="" selected="" disabled="" >Seleccionar</option>
                                            @foreach($departamentos as $departamento)
                                            <option value="{{ $departamento->id }}" {{ $departamento->id == $departamento->departamento_id ? 'selected': ''}}
                                                > {{ $departamento->abreviatura}} </option>
                                              @endforeach                                            
                                        </select>

                                    </div>
                                </div>                                    
                            </div>                                
                        </div>									                      		
                      	<div class="row">
							<div class="col-md-4">
								<div class="form-group">
                                    <h5>Nro Celular <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="number" name="telefono" class="form-control" required data-validation-required-message="This field is required"> 
                                    </div>
                                </div>  
							</div>
							<div class="col-md-4">
                                <div class="form-group">
                                    <h5>Domicilio<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="telefono" class="form-control" required data-validation-required-message="This field is required"> 
                                    </div>
                                </div>
								
							</div>
							<div class="col-md-4">
                                <div class="form-group">
                                    <h5>Item <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="telefono" class="form-control" required data-validation-required-message="This field is required"> 
                                    </div>
                                </div>
								
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-6">
								
							</div>
							<div class="col-md-6">
								
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