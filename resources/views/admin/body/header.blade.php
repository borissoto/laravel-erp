<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="{{ url('/')}}" class="nav-link">Web</a>
    </li>
    {{-- <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li> --}}
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">  
  
    @php
      $user = Auth::user();
    @endphp	  
    <li class="nav-item dropdown user-menu">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        <img src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg')}}" 
        alt="" class="user-image img-circle elevation-2" alt="Imagen del usuario">        
        <span class="d-none d-md-inline">{{$user->name}} </span>
      </a>
      <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <!-- User image -->
        <li class="user-header bg-lightblue">
          <img src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg')}}" 
        alt="" class="img-circle elevation-2" alt="Imagen del usuario">
          <p>{{$user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno }} - 
            <small>Bienvenid@</small>
          </p>
        </li>
        <!-- Menu Body -->
        <li class="user-body">
          <ol>
            <div class="col-12">
              <a href="{{ route('user.profile') }}" class="btn btn-default btn-flat">Mi Perfil</a>
            </div>
          </ol>
            {{-- <div class="col-4 text-center">
              <a href="#">Sales</a>
            </div>
            <div class="col-4 text-center">
              <a href="#">Friends</a>
            </div> --}}
         
        </li>

        <!-- Menu Footer-->
        <li class="user-footer">          
          <form action="{{ route('logout')}}" method="POST" >
            @csrf
            <button class="btn btn-default btn-flat float-right">Cerrar sesion</button>
          </form>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
        <i class="fas fa-th-large"></i>
      </a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->


