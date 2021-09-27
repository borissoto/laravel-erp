@extends('admin.admin_master')
@section('admin')

<div class="container-full">

  {{-- Main Content --}}
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="box box-default">
          <div class="box-header with-border">
            <a href="{{ route('user.profile.edit')}}" style="float: right;" class="btn btn-rounded btn-success">Editar</a>
            <h4 class="box-title"><strong>{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno}}</strong> </h4>
            <h5 class="box-subtitle"><strong>{{ $user->name }}</strong></h5>
          </div>
        <!-- /.box-header -->
        <div class="box-body">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#personal" role="tab"><span><i class="ion-person mr-15"></i>Personal</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#eess" role="tab"><span><i class="ion-home mr-15"></i>Establecimientos</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#educacion" role="tab"><span><i class="fa fa-graduation-cap mr-15"></i>Educacion
            </span></a> </li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content tabcontent-border">
            <div class="tab-pane active" id="personal" role="tabpanel">
              <div class="p-15">
                <h3>Datos Personales</h3>
                <div class="row">
                  <div class="col-12 col-lg-5 col-xl-4">
                    <div class="box box-inverse bg-img" style="background-image: url(../images/gallery/full/1.jpg);" data-overlay="2">
                      <div class="flexbox px-20 pt-20">                                             
                      </div>          
                      <div class="box-body text-center pb-50">
                      <a href="#">
                        <img class="avatar avatar-xxl avatar-bordered" src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg')}}" alt="Foto de perfil" alt="">
                      </a>
                      <h4 class="mt-2 mb-0">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno}}<a class="hover-primary text-white" href="#"></a></h4>
                      <span><i class="fa fa-hospital-o w-20"></i>{{$user->establecimiento->nom_establecimiento}} </span>
                      </div>          
                    </div>	
                    
                  </div>
                  <div class="col-12 col-lg-7 col-xl-8">
                    {{-- <div class="col-lg-10 col-12"> --}}
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
                    {{-- </div> --}}
                                 
                  </div>								                 
                </div> 
              </div>
            </div>
            <div class="tab-pane" id="eess" role="tabpanel">
              <div class="p-15">
                <h3>Establecimiento Actual</h3>
                <div class="row">
                  <div class="col-12 col-lg-5 col-xl-4">
                    <div class="box box-inverse bg-img" style="background-image: url(../images/gallery/full/1.jpg);" data-overlay="2">
                      <div class="flexbox px-20 pt-20">                                             
                      </div>          
                      <div class="box-body text-center pb-50">
                      <a href="#">
                        <img class="avatar avatar-xxl avatar-bordered" src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg')}}" alt="Foto de perfil" alt="">
                      </a>
                      <h4 class="mt-2 mb-0">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno}}<a class="hover-primary text-white" href="#"></a></h4>
                      <span><i class="fa fa-hospital-o w-20"></i>{{$user->establecimiento->nom_establecimiento}} </span>
                      </div>          
                    </div>	
                    
                  </div>
                  <div class="col-12 col-lg-7 col-xl-8">
                    {{-- <div class="col-lg-10 col-12"> --}}
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
                    {{-- </div> --}}
                                 
                  </div>								                 
                </div> 
                
              </div>
            </div>
            <div class="tab-pane" id="educacion" role="tabpanel">
              <div class="p-15">
                <p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
                <h3>Donec vitae laoreet neque, id convallis ante.</h3>
                <h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->           

    </div>  
  </section>
    
</div>
  
  
  

  @endsection