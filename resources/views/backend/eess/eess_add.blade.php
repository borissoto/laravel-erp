@extends('admin.admin_master')
@section('admin')


	  <div class="container-full">
		<!-- Content Header (Page header) -->
  

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Añadir Establecimiento</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form novalidate>
					  <div class="row">
						<div class="col-12">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="class-group">
                                    <h5>Departamento <span class="text-danger"></span></h5>
                                    <div class="controls">
                                        <select name="departamento_id" class="form-control" >
                                            <option value="" selected="" disabled="" >Seleccionar</option>
                                            @foreach($departamentos as $departamento)
                                            <option value="{{ $departamento->id }}" {{ $departamento->id == $departamento->departamento_id ? 'selected': ''}}
                                                > {{ $departamento->nom_departamento}} </option>
                                              @endforeach                                            
                                        </select>

                                    </div>
                                </div>

                            </div>
                            {{-- <div class="col-md-3">
                                <div class="class-group">
                                    <h5>Provincia <span class="text-danger"></span></h5>
                                    <div class="controls">
                                        <select name="provincia_id" class="form-control" >
                                            <option value="" selected="" disabled="" >Seleccionar</option>
                                            @foreach($provincias as $provincia)
                                            <option value="{{ $provinicia->id }}" {{ $provincia->id == $provincia->provincia_id ? 'selected': ''}}
                                                > {{ $provincia->nom_provincia}} </option>
                                              @endforeach                                            
                                        </select>

                                    </div>
                                </div>

                            </div> --}}
                            <div class="col-md-3">
                                <div class="class-group">
                                    <h5>Municipio <span class="text-danger"></span></h5>
                                    <div class="controls">
                                        <select name="municipio_id" class="form-control" >
                                            <option value="" selected="" disabled="" >Seleccionar</option>
                                            @foreach($municipios as $municipio)
                                            <option value="{{ $municipio->id }}" {{ $municipio->id == $municipio->municipio_id ? 'selected': ''}}
                                                > {{ $municipio->nom_municipio}} </option>
                                              @endforeach                                            
                                        </select>

                                    </div>
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="class-group">
                                    <h5>Red <span class="text-danger"></span></h5>
                                    <div class="controls">
                                        <select name="red_id" class="form-control" >
                                            <option value="" selected="" disabled="" >Seleccionar</option>
                                            @foreach($redes as $red)
                                            <option value="{{ $red->id }}" {{ $red->id == $red->red_id ? 'selected': ''}}
                                                > {{ $red->nom_red}} </option>
                                              @endforeach                                            
                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>    
                        
							<div class="form-group">
								<h5>Nombre EESS <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="email" name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
							</div>
							<div class="form-group">
								<h5><span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"> </div>
							</div>
							
						</div>
						<div class="col-12">							
							<div class="form-group">
								<h5>Tipo EESS <span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="eess_tipo" class="form-control" >
										<option value="" selected="" disabled="" >Seleccionar</option>
										@foreach($eess_tipos as $eess_tipo)
										<option value="{{ $eess_tipo->id }}" {{ $eess_tipo->id == $eess_tipo->eess_tipo_id ? 'selected': ''}}
											> {{ $eess_tipo->eess_tipo}} </option>
										  @endforeach                                            
									</select>
								</div>
							</div>
							<div class="form-group">
								<h5>Textarea <span class="text-danger">*</span></h5>
								<div class="controls">
									<textarea name="textarea" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>
								</div>
							</div>
						</div>
					  </div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<h5>Checkbox <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="checkbox" id="checkbox_1" required value="single">
										<label for="checkbox_1">Check this custom checkbox</label>
									</div>								
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<h5>Checkbox Group <span class="text-danger">*</span></h5>
									<div class="controls">
										<fieldset>
											<input type="checkbox" id="checkbox_2" required value="x">
											<label for="checkbox_2">I am unchecked Checkbox</label>
										</fieldset>
										<fieldset>
											<input type="checkbox" id="checkbox_3" value="y">
											<label for="checkbox_3">I am unchecked too</label>
										</fieldset>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<h5>Radio Buttons <span class="text-danger">*</span></h5>
									<fieldset class="controls">
										<input name="group1" type="radio" id="radio_1" value="1" required>
										<label for="radio_1">Check Me</label>
									</fieldset>
									<fieldset>
										<input name="group1" type="radio" id="radio_2" value="2">
										<label for="radio_2">Or Me</label>									
									</fieldset>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<h5>Inline Radio Buttons <span class="text-danger">*</span></h5>
									<div class="controls">
										<fieldset>
											<input name="group2" type="radio" id="radio_3" value="Yes" required>
											<label for="radio_3">Check Me</label>
										</fieldset>
										<fieldset>
											<input name="group2" type="radio" id="radio_4" value="No">
											<label for="radio_4">Or Me</label>
										</fieldset>
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