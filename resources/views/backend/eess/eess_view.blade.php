@extends('admin.admin_master')
@section('admin')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>
          Ver Establecimiento
          <small><i class="fa fa-info-circle w-20"></i></small>
        </h1>
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
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body">
              <div class="text-center">
                <div class="small-box bg-info">
                    <div class="icon">
                        <i class="ion ion-home"></i>
                    </div>
                </div>
              </div>

              <h3 class="profile-username text-center">{{ $establecimiento->nom_establecimiento}}</h3>

              <p class="text-muted text-center"><i class="fa fa-location-arrow w-20"></i>{{ $establecimiento->municipio->nom_municipio}}</p>             
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <a href="#" style="float: right;" class="btn btn-rounded btn-success">Editar</a>

        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
              <ul class="nav nav-tabs" role="tablist">                
                <li class="nav-item"><a class="nav-link" href="#establecimiento" data-toggle="tab">Establecimiento</a></li>                
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
               
                <div class="tab-pane active" id="establecimiento">
                  <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nombre </label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $establecimiento->nom_establecimiento}}" >
                          </div>
                        </div>                                                
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Tipo</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $establecimiento->tipo}}" >
                          </div>
                        </div>                                                
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Municipio</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $establecimiento->municipio->nom_municipio}}" >
                          </div>
                        </div>                                                
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Codigo Red</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $establecimiento->municipio->cod_red}}">
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label  class="col-sm-3 col-form-label">Departamento</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $establecimiento->municipio->departamento->nom_departamento}}">
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label  class="col-sm-3 col-form-label">Subsector</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $establecimiento->subsector}}">
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label  class="col-sm-3 col-form-label">Ambito</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $establecimiento->ambito}}">
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label  class="col-sm-3 col-form-label">Dependencia</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $establecimiento->dependencia}}">
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label  class="col-sm-3 col-form-label">Nivel</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $establecimiento->nivel}}">
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label  class="col-sm-3 col-form-label">Codigo SNIS</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $establecimiento->codsnis}}">
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label  class="col-sm-3 col-form-label">Soaps</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $establecimiento->soaps}}">
                          </div>
                        </div> 
                    </div>
                    <!-- /.col -->
                  </div>                                        
                </div>
                <!-- /.tab-pane -->

                  
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  
    
@endsection