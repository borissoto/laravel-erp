<div>
    @extends('admin.admin_master')
    @section('admin')
  
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-6">
          <div class="col-sm-8">
            <h1>
              Almacenes
              <small>
              </small>
              <span class=" text-lg"> - Salidas de Material</span>
              
            </h1>
          </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Almacen</li>
            </ol>
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <nav class="navbar navbar-expand-md mb-4 shadow" style="background-color: #daf0ff;">
      <span class="navbar-brand mb-0 h1"><i class="fas fa-shopping-cart w-20"></i></span>  
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item" style="background-color: rgb(73, 131, 185); border-radius: 4px;">
            <a class="nav-link text-light" href="{{ route('almacen.sal.solicitudes')}}">Solicitudes <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('almacen.sal.entregados')}}">Entregados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('almacen.sal.saldos')}}">Saldos</a>
          </li>          
          
        </ul>
      
      </div>
    </nav>
  
    {{-- con blade --}}
    {{-- <div>
      @yield('kardex') 
    </div> --}}
    
    @livewire('almacen.salidasol-index' )
    {{-- @livewire('admin.kardex-index', ['user'=>$user->id]) --}}
    {{-- <livewire:admin.kardex-index :user="$user->id">  --}}
  
    @endsection
  </div>