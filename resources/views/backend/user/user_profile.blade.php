@extends('admin.admin_master')
@section('admin')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>
          Mi Perfil
          <small><i class="fa fa-info-circle w-20"></i></small>
        </h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Inicio</a></li>
          <li class="breadcrumb-item active">Mi Perfil</li>
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
                <img class="profile-user-img img-fluid img-circle"
                src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg')}}" alt="Foto de perfil">
                     
              </div>

              <h3 class="profile-username text-center">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno}}</h3>

              <p class="text-muted text-center"><i class="fa fa-hospital-alt w-20"></i>{{$user->establecimiento->nom_establecimiento}}</p>             
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <a href="{{ route('user.profile.edit')}}" style="float: right;" class="btn btn-rounded btn-success">Editar</a>

        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" href="#personal" data-toggle="tab">Inf. Personal</a></li>
                <li class="nav-item"><a class="nav-link" href="#establecimiento" data-toggle="tab">Establecimiento</a></li>
                <li class="nav-item"><a class="nav-link" href="#educacion" data-toggle="tab">Educacion</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="personal">
                  <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                          <label for="nombres" class="col-sm-3 col-form-label">Usuario</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $user->name}}" id="nombres">
                          </div>
                        </div>                                                
                        <div class="form-group row">
                          <label for="nombres" class="col-sm-3 col-form-label">Nombres</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $user->nombres}}" id="nombres">
                          </div>
                        </div>                                                
                        <div class="form-group row">
                          <label for="ap-paterno" class="col-sm-3 col-form-label">Apellido Paterno</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $user->ap_paterno}}" id="ap-paterno">
                          </div>
                        </div>                                                
                        <div class="form-group row">
                          <label for="ap-materno" class="col-sm-3 col-form-label">Apellido Materno</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $user->ap_materno}}" id="ap-materno">
                          </div>
                        </div>                                                
                        <div class="form-group row">
                          <label for="ci" class="col-sm-3 col-form-label">Carnet Identidad</label>
                          <div class="col-sm-5">
                            <input class="form-control" type="number" disabled value="{{ $user->ci }}" id="ci">
                          </div>
                          <label for="extension" class="col-sm-1 col-form-label">Exp</label>
                          <div class="col-sm-3" >
                            <input class="form-control" type="text" disabled value="{{ $user->departamento->abreviatura }}" id="ci">
                          </div>                                                  
                        </div>                                                
                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-3 col-form-label">Fecha Nacimiento</label>                                                                                                  
                            <div class="col-sm-5"> 
                                <input class="form-control" type="date" disabled value="{{\Carbon\Carbon::parse($user->fecha_nac)->format('Y-m-d')}}" id="example-date-input">
                            </div>
                            <label for="extension" class="col-sm-1 col-form-label">Sexo</label>
                            <div class="col-sm-3" >
                              <input class="form-control" type="text" disabled value="{{ $user->sexo}}">                                    
                            </div>                                                  
                        </div>                                                
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="email" disabled value="{{ $user->email}}" id="email">
                            </div>
                        </div>                                                
                        <div class="form-group row">
                          <label for="telefono" class="col-sm-3 col-form-label">Telefono</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="number" disabled value="{{ $user->telefono }}" id="telefono">
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="domicilio" class="col-sm-3 col-form-label">Domicilio</label>
                            <div class="col-sm-9">
                              <input class="form-control" type="text" disabled value="{{ $user->domicilio}}" id="domicilio">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="incorporacion" class="col-sm-3 col-form-label">Incorporacion</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="date" disabled value="{{\Carbon\Carbon::parse($user->incorporacion)->format('Y-m-d')}}" id="incorporacion">
                            </div>
                            <label for="item" class="col-sm-1 col-form-label">Item</label>
                            <div class="col-sm-3">
                                <input class="form-control" type="number" disabled value="{{ $user->item }}" id="item">
                            </div>                                                 
                        </div>   
                        <div class="form-group row">
                            <label for="incorporacion" class="col-sm-3 col-form-label">Observaciones</label>
                            <div class="col-sm-5">
                              <input class="form-control" type="textarea" disabled value="{{ $user->obs}}" id="nombres">
                            </div>
                            <label for="item" class="col-sm-1 col-form-label">Docente</label>
                            <div class="col-sm-3">
                              <input class="form-control" type="text" disabled value="{{ $user->docente}}" id="nombres">
                            </div>                                                 
                        </div>                                           
                    </div>
                    <!-- /.col -->
                  </div>  
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="establecimiento">
                  <div class="row">
                    <div class="col-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nombre </label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $user->establecimiento->nom_establecimiento}}" >
                          </div>
                        </div>                                                
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Tipo</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $user->establecimiento->tipo}}" >
                          </div>
                        </div>                                                
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Municipio</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $user->establecimiento->municipio->nom_municipio}}" >
                          </div>
                        </div>                                                
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Codigo Red</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $user->establecimiento->municipio->cod_red}}">
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label  class="col-sm-3 col-form-label">Departamento</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $user->establecimiento->municipio->departamento->nom_departamento}}">
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label  class="col-sm-3 col-form-label">Subsector</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $user->establecimiento->subsector}}">
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label  class="col-sm-3 col-form-label">Ambito</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $user->establecimiento->ambito}}">
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label  class="col-sm-3 col-form-label">Dependencia</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $user->establecimiento->dependencia}}">
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label  class="col-sm-3 col-form-label">Nivel</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $user->establecimiento->nivel}}">
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label  class="col-sm-3 col-form-label">Codigo SNIS</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $user->establecimiento->codsnis}}">
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label  class="col-sm-3 col-form-label">Soaps</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" disabled value="{{ $user->establecimiento->soaps}}">
                          </div>
                        </div> 
                    </div>
                    <!-- /.col -->
                  </div>                                        
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="educacion">
                  
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