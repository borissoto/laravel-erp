@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container-full">

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box box-default">
                <div class="box-header with-border">
                    <h4 class="box-title">Editar Usuario: <span class="lead">{{$user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno}}</span> </h4>
                    <h6 class="box-subtitle">Use default tab with class <code>nav-tabs &amp; tabcontent-border </code></h6>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#perfil" role="tab"><span><i class="ion-person mr-15"></i>Personal</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#establecimientos" role="tab"><span><i class="ion-home mr-15"></i>Establecimientos</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#estudios" role="tab"><span><i class="fa fa-graduation-cap  mr-15"></i>Estudios</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#configuracion" role="tab"><span><i class="fa fa-cog  mr-15"></i>Configuracion</span></a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content tabcontent-border">
                        <div class="tab-pane active" id="perfil" role="tabpanel">
                            <div class="p-15">
                                <div class="col-lg-10 col-12">
                                    <!-- Basic Forms -->
                                      {{-- <div class="box">--}}
                                        <!-- /.box-header -->
                                        {{-- <div class="box-body"> --}}
                                          <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                  <label for="nombres" class="col-sm-3 col-form-label">Nombres</label>
                                                  <div class="col-sm-9">
                                                    <input class="form-control" type="text" value="{{ $user->nombres}}" id="nombres">
                                                  </div>
                                                </div>                                                
                                                <div class="form-group row">
                                                  <label for="ap-paterno" class="col-sm-3 col-form-label">Apellido Paterno</label>
                                                  <div class="col-sm-9">
                                                    <input class="form-control" type="text" value="{{ $user->ap_paterno}}" id="ap-paterno">
                                                  </div>
                                                </div>                                                
                                                <div class="form-group row">
                                                  <label for="ap-materno" class="col-sm-3 col-form-label">Apellido Materno</label>
                                                  <div class="col-sm-9">
                                                    <input class="form-control" type="text" value="{{ $user->ap_materno}}" id="ap-materno">
                                                  </div>
                                                </div>                                                
                                                <div class="form-group row">
                                                  <label for="ci" class="col-sm-3 col-form-label">Carnet Identidad</label>
                                                  <div class="col-sm-5">
                                                    <input class="form-control" type="number" value="{{ $user->ci }}" id="ci">
                                                  </div>
                                                  <label for="extension" class="col-sm-1 col-form-label">Dpto</label>
                                                  <div class="col-sm-3" >
                                                    <select class="form-control" id="extension">
                                                        <option>Budget</option>
                                                        <option>less than 5000$</option>
                                                        <option>5000$ - 10000$</option>
                                                        <option>10000$ - 20000$</option>
                                                        <option>more than 20000$</option>
                                                    </select>
                                                  </div>                                                  
                                                </div>                                                
                                                <div class="form-group row">
                                                    <label for="example-date-input" class="col-sm-3 col-form-label">Fecha Nacimiento</label>                                                                                                  
                                                    <div class="col-sm-5"> 
                                                        <input class="form-control" type="date" value="{{\Carbon\Carbon::parse($user->fecha_nac)->format('Y-m-d')}}" id="example-date-input">
                                                    </div>
                                                    <label for="extension" class="col-sm-1 col-form-label">Sexo</label>
                                                    <div class="col-sm-3" >
                                                        <select class="form-control" id="extension">
                                                            <option>MASCULINO</option>
                                                            <option>FEMENINO</option>                                                        
                                                        </select>
                                                    </div>                                                  
                                                </div>                                                
                                                <div class="form-group row">
                                                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="email" value="{{ $user->email}}" id="email">
                                                    </div>
                                                </div>                                                
                                                <div class="form-group row">
                                                  <label for="telefono" class="col-sm-3 col-form-label">Telefono</label>
                                                  <div class="col-sm-9">
                                                    <input class="form-control" type="number" value="{{ $user->telefono }}" id="telefono">
                                                  </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="domicilio" class="col-sm-3 col-form-label">Domicilio</label>
                                                    <div class="col-sm-9">
                                                      <input class="form-control" type="text" value="{{ $user->domicilio}}" id="domicilio">
                                                    </div>
                                                </div> 
                                                <div class="form-group row">
                                                    <label for="incorporacion" class="col-sm-3 col-form-label">Incorporacion</label>
                                                    <div class="col-sm-5">
                                                        <input class="form-control" type="date" value="{{\Carbon\Carbon::parse($user->incorporacion)->format('Y-m-d')}}" id="incorporacion">
                                                    </div>
                                                    <label for="item" class="col-sm-1 col-form-label">Item</label>
                                                    <div class="col-sm-3">
                                                        <input class="form-control" type="number" value="{{ $user->item }}" id="item">
                                                    </div>                                                 
                                                </div>   
                                                <div class="form-group row">
                                                    <label for="incorporacion" class="col-sm-3 col-form-label">Observaciones</label>
                                                    <div class="col-sm-5">
                                                      <input class="form-control" type="textarea" value="{{ $user->obs}}" id="nombres">
                                                    </div>
                                                    <label for="item" class="col-sm-1 col-form-label">Docente</label>
                                                    <div class="col-sm-3">
                                                      <input class="form-control" type="text" value="{{ $user->docente}}" id="nombres">
                                                    </div>                                                 
                                                </div>   
                                                
                                            </div>
                                            <!-- /.col -->
                                          </div>
                                          <!-- /.row -->
                                        {{-- </div> --}}
                                        <!-- /.box-body -->
                                      {{-- </div> --}}
                                      <!-- /.box -->			
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="establecimientos" role="tabpanel">
                            <div class="p-15">
                                <h3>Donec vitae laoreet neque, id convallis ante.</h3>
                                <p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
                                <h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
                            </div>
                        </div>
                        <div class="tab-pane" id="estudios" role="tabpanel">
                            <div class="p-15">
                                <p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
                                <h3>Donec vitae laoreet neque, id convallis ante.</h3>
                                <h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
                            </div>
                        </div>
                        <div class="tab-pane" id="configuracion" role="tabpanel">
                            <div class="p-15">
                                <p>Duis cudiam. </p>
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
        </div>  

  
    </section>  
</div>

@endsection