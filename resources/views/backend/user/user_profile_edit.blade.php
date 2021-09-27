@extends('admin.admin_master')
@section('admin')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
            Mi Datos Personales
            <small>new</small>
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Navbar & Tabs</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

<section class="content">

    <!-- Basic Forms -->
    <div class="card card-primary card-outline">
       <div class="card-header">
            <i class="fas fa-edit"></i>
            <h4 class="card-title">Editar Perfil Usuario</h4>         
       </div>
       <!-- /.box-header -->
       <div class="card-body">
         <div class="row">
           <div class="col">
               <form method="post" action=" {{ route('user.profile.store')}} " enctype="multipart/form-data">
                @csrf
                 <div class="row">
                   <div class="col-12">
                       <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <h5>Usuario<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="name" class="form-control" required="" value="{{ $user->name}}"> </div>
                             </div>    
                        </div> <!-- end col md 6-->

                        <div class="col-md-6">
                            <div class="form-group">
                                <h5>Email<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="email" name="email" class="form-control" required="" value="{{ $user->email}}"> </div>
                             </div>                                
                        </div> <!-- end col md 6-->                      

                       </div> <!-- end row-->

                       <div class="row"> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Imagen de Perfil <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="file" name="profile_photo_path" class="form-control" required="" id="image"> </div>
                                </div>                       
            
                            </div> <!-- end col md 6-->     
                            <div class="col-md-6">
                                <img id="showImage" class="rounded-circle" 
                                src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path): url('upload/no_image.jpg')}}" 
                                style="width: 100px; height: 100px">    
                            </div> <!-- end col md 6-->                 

                        </div> <!-- end row-->
 
                        
                   </div>
                   <div class="text-xs-right">
                       <input type="submit"  class="btn btn-rounded btn-primary mb-5" value="Actualizar">
                   </div>
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
  

   





<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>



@endsection