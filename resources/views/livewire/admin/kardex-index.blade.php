<div>
    <x-loading />
    @include('livewire.modals.kardex.info-update')    
    @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">x
          {{ session('message') }}
        </div>
    @endif
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2">
    
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid rounded-lg"
                    src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg')}}" alt="Foto de perfil">
                         
                  </div>
    
                  {{-- <h3 class="profile-username text-center">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno}}</h3> --}}
    
                  {{-- <p class="text-muted text-center"><i class="fa fa-hospital-alt w-20"></i>{{$user->establecimiento->nom_establecimiento}}</p>              --}}
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->                  
    
            </div>
            <!-- /.col -->
            <div class="col-md-10">
              <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header ">                  
                      Informacion Personal
                      
                  

                  
                  {{-- <a href="{{ route('user.profile.edit')}}" style="float: right;" class="btn btn-sm btn-rounded btn-primary mb-0">Editar</a> --}}

                  <div class="btn-group" style="float: right;" >
                    {{-- <button type="button" class="btn btn-secondary">Action</button> --}}
                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle " data-toggle="dropdown">Acciones
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" style="min-width: 1rem;" role="menu">
                      {{-- wire:click="showModal({{$user->id}})" --}}
                    {{-- <a class="dropdown-item" wire:click="showModal({{$user->id}})"  href="javascript:void(0)">Ver</a> --}}
                      <a class="dropdown-item"  wire:click="edit({{ $user->id }})"  data-toggle="modal" data-target="#kardexInfoUpdate"  href="">Editar</a>                      
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" data-toggle="modal" data-target="#modal-default" href="#">Cambiar Contraseña</a>
                      
                    </div>
                  </div>

                  {{-- <button  wire:click="edit({{ $user->id }})"  type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#kardexInfoUpdate" style="float: right;" >
                    Editar
                  </button> --}}
                  
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">   
                    
                      <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                              <label for="name" class="col-sm-2 col-form-label col-form-label-sm">Estado</label>
                              <div class="col-sm-4">
                                <span > {!! $user->estado === 1 ? '<span class="badge bg-success">ACTIVO</span>' : ($user->estado === 2 ?  '<span class="badge bg-warning">BAJA</span>' : '<span class="badge bg-danger">INACTIVO</span>') !!}</span>
                              </div>                                                       
                            </div>   
                            <div class="form-group row">
                              <label for="name" class="col-sm-2 col-form-label col-form-label-sm">Usuario</label>
                              <div class="col-sm-4">
                                <input class="form-control form-control-sm" type="text" disabled value="{{ $user->name}}" id="name">
                              </div>                           
                              <label for="nombres" class="col-sm-2 col-form-label col-form-label-sm">Nombres</label>
                              <div class="col-sm-4">
                                <input class="form-control form-control-sm" type="text" disabled value="{{ $user->nombres}}" id="nombres">
                              </div>
                            </div>                                                
                            <div class="form-group row">
                              <label for="ap-paterno" class="col-sm-2 col-form-label col-form-label-sm">Ap Paterno</label>
                              <div class="col-sm-4">
                                <input class="form-control form-control-sm" type="text" disabled value="{{ $user->ap_paterno}}" id="ap-paterno">
                              </div>                            
                              <label for="ap-materno" class="col-sm-2 col-form-label col-form-label-sm">Ap Materno</label>
                              <div class="col-sm-4">
                                <input class="form-control form-control-sm" type="text" disabled value="{{ $user->ap_materno}}" id="ap-materno">
                              </div>
                            </div>                                                
                            <div class="form-group row">
                              <label for="ci" class="col-sm-2 col-form-label col-form-label-sm">CI</label>
                              <div class="col-sm-4">
                                <input class="form-control form-control-sm" type="number" disabled value="{{ $user->ci }}" id="ci">
                              </div>
                              <label for="extension" class="col-sm-2 col-form-label col-form-label-sm">Exp</label>
                              <div class="col-sm-4" >
                                <input class="form-control form-control-sm" type="text" disabled value="{{ $user->departamento->abreviatura }}" id="extension">
                              </div>                                                  
                            </div>                                                
                            <div class="form-group row">
                                <label for="fechanac" class="col-sm-2 col-form-label col-form-label-sm">Fecha Nac</label>                                                                                                  
                                <div class="col-sm-4"> 
                                    <input class="form-control form-control-sm" type="date" disabled value="{{$user->fecha_nac? \Carbon\Carbon::parse($user->fecha_nac)->format('Y-m-d') : 'No Reg' }}" id="fechanac">
                                </div>
                                <label for="extension" class="col-sm-2 col-form-label col-form-label-sm">Sexo</label>
                                <div class="col-sm-4" >
                                  <input class="form-control form-control-sm" type="text" disabled value="{{ $user->sexo}}">                                    
                                </div>                                                  
                            </div>                                                
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                                <div class="col-sm-4">
                                    <input class="form-control form-control-sm" type="email" disabled value="{{ $user->email}}" id="email">
                                </div>                           
                              <label for="telefono" class="col-sm-2 col-form-label col-form-label-sm">Telefono</label>
                              <div class="col-sm-4">
                                <input class="form-control form-control-sm" type="number" disabled value="{{ $user->telefono }}" id="telefono">
                              </div>
                            </div>
                            <div class="form-group row">                                
                                <label for="item" class="col-sm-2 col-form-label col-form-label-sm">Item</label>
                                <div class="col-sm-4">
                                    <input class="form-control form-control-sm" type="number" disabled value="{{ $user->item }}" id="item">
                                </div>  
                                <label for="incorporacion" class="col-sm-2 col-form-label col-form-label-sm">Incorporacion</label>
                                <div class="col-sm-4">
                                    <input class="form-control form-control-sm" type="date" disabled value="{{$user->incorporacion? \Carbon\Carbon::parse($user->incorporacion)->format('Y-m-d') : 'No Reg' }}" id="incorporacion">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label for="domicilio" class="col-sm-2 col-form-label col-form-label-sm">Domicilio</label>
                                <div class="col-sm-4">
                                  <input class="form-control form-control-sm" type="text" disabled value="{{ $user->domicilio}}" id="domicilio">
                                </div>
                                <label for="docente" class="col-sm-2 col-form-label col-form-label-sm">Docente</label>
                                <div class="col-sm-4">
                                  <input class="form-control form-control-sm" type="text" disabled value="{{ $user->docente}}" id="docente">
                                </div>    
                                                                               
                            </div> 
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label col-form-label-sm">Universidad</label>
                                <div class="col-sm-4">                            
                                  <input class="form-control form-control-sm" type="text" disabled value="{{ $user->universidad }}" />
                                </div>
                              
                                <label class="col-sm-2 col-form-label col-form-label-sm">Titulacion</label>
                                <div class="col-sm-4">
                                  <input class="form-control form-control-sm" type="text" disabled value="{{ $user->grado }}" />
                                </div>
                            </div>    
                            <div class="form-group row">
                                <label for="obs" class="col-sm-2 col-form-label col-form-label-sm">Observaciones</label>
                                <div class="col-sm-10">
                                  <input class="form-control form-control-sm" type="textarea" disabled value="{{ $user->obs}}" id="obs">
                                </div>
                                                                            
                            </div>
                                                                         
                        </div>
                        <!-- /.col -->
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
</div>
