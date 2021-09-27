@extends('admin.admin_master')
@section('admin')


	<div class="container-full">
		<!-- Content Header (Page header) -->		
		<!-- Main content -->
		<section class="content"> 
      <div class="row">
        <div class="col-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h4 class="box-title"><strong>{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno}}</strong> </h4>
              <h5 class="box-subtitle">{{ $user->name }}</h5>
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
            
                        <ul class="box-body flexbox flex-justified text-center" data-overlay="4">
                        <li>
                          <span class="opacity-60">CI</span><br>
                          <span class="font-size-16">{{$user->ci.' '.$user->departamento->abreviatura}}</span>
                        </li>
                        <li>
                          <span class="opacity-60">Telefono</span><br>
                          <span class="font-size-16">{{$user->telefono}}</span>
                        </li>
                        <li>
                          <span class="opacity-60">Item/Contrato</span><br>
                          <span class="font-size-16">{{$user->item}}</span>
                        </li>
                        </ul>
                      </div>	
                      
                    </div>
                    <div class="col-12 col-lg-7 col-xl-8">
                      <div class="row">
                        <div class="col-md-2">Nombres:</div>
                        <div class="col-md-2"><span class="lead">Boris</span></div>
                        <div class="col-md-8">sOTO</div>                      
                      </div>
                      <div class="row">
                        <div class="col-md-3">Nombres:</div>
                        <div class="col-md-3 text-secondary">Boris</div>
                        <div class="col-md-3">sOTO</div>
                        <div class="col-md-3">TRUJILLO</div>
                      </div> 
                      <div class="row">
                        <div class="col-md-3">Nombres:</div>
                        <div class="col-md-3 font-weight-bold">Boris</div>
                        <div class="col-md-3">sOTO</div>
                        <div class="col-md-3">TRUJILLO</div>
                      </div>                   
                    </div>								                 
                  </div> 
                </div>
              </div>
              <div class="tab-pane" id="eess" role="tabpanel">
                <div class="p-15">
                  <h3>Donec vitae laoreet neque, id convallis ante.</h3>
                  <p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
                  <h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
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
    <!-- /.content -->
		
	 </div>


    
@endsection