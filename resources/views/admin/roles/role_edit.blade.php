@extends('admin.admin_master')
@section('admin')


<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edicion Roles y Permisos</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Inicio</a></li>
          <li class="breadcrumb-item active">Roles</li>
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
                <li class="nav-item"><a class="nav-link active" href="#personal" data-toggle="tab">Usuario</a></li>                
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
                        {{-- <div class="form-group row">
                          <label for="ci" class="col-sm-3 col-form-label">Carnet Identidad</label>
                          <div class="col-sm-5">
                            <input class="form-control" type="number" disabled value="{{ $user->ci }}" id="ci">
                          </div>
                          <label for="extension" class="col-sm-1 col-form-label">Exp</label>
                          <div class="col-sm-3" >
                            <input class="form-control" type="text" disabled value="{{ $user->departamento->abreviatura }}" id="ci">
                          </div>                                                  
                        </div> --}}
                                                              
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