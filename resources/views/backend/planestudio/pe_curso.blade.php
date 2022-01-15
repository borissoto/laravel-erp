<div>
    @extends('admin.admin_master')
    @section('admin')
  
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-6">
          <div class="col-sm-8">
            <h1>
              Plan de Estudios
              <small>
              </small>
              <span class=" text-lg"> - Temas</span>
              
            </h1>
          </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Plan de Estudios</li>
            </ol>
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <nav class="navbar navbar-expand-md mb-4 shadow" style="background-color: #daf0ff;">
      <span class="navbar-brand mb-0 h1"><i class="fas fa-graduation-cap w-20"></i></span>  
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('planestudios.residencias')}}">Gestiones</a>
          </li>
          {{-- <li class="nav-item"> --}}
            {{-- <a class="nav-link" href="{{route('planestudios.modulos')}}">Módulos </a> --}}
          {{-- </li> --}}
          <li class="nav-item" style="background-color: rgb(73, 131, 185); border-radius: 4px;">
            <a class="nav-link text-light" href="{{route('planestudios.cursos')}}">Cursos</a>
          </li>   
          <li class="nav-item">
            <a class="nav-link" href="{{route('planestudios.evaluaciones')}}">Evaluaciones</a>
          </li>   
          
        </ul>
      
      </div>
    </nav>
  
    {{-- con blade --}}
    {{-- <div>
      @yield('kardex') 
    </div> --}}
    
    @livewire('plan-estudios.curso-index' )

  
    @endsection
  </div>