<div>
    @extends('admin.admin_master')
    @section('admin')
  
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-6">
          <div class="col-sm-8">
            <h1>
              Cuadernos
              <small>
              </small>
              <span class=" text-lg"> - C12</span>
              
            </h1>
          </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Cuadernos</li>
            </ol>
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <nav class="navbar navbar-expand-md mb-4 shadow" style="background-color: #daf0ff;">
      <span class="navbar-brand mb-0 h1"><i class="fas fa-book w-20"></i></span>  
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item" >
            <a class="nav-link " href="{{ route('cuadernos.c1')}}">C1</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link " href="{{route('cuadernos.c2')}}">C2</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link " href="{{route('cuadernos.c3')}}">C3</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link " href="{{route('cuadernos.c4')}}">C4</a>
          </li>   
          <li class="nav-item" >
            <a class="nav-link " href="{{route('cuadernos.c5')}}">C5</a>
          </li>   
          <li class="nav-item" >
            <a class="nav-link " href="{{route('cuadernos.c6')}}">C6</a>
          </li>   
          <li class="nav-item" >
            <a class="nav-link " href="{{route('cuadernos.c9')}}">C9</a>
          </li>   
          <li class="nav-item" >
            <a class="nav-link " href="{{route('cuadernos.c10d')}}">C10D</a>
          </li>   
          <li class="nav-item" >
            <a class="nav-link " href="{{route('cuadernos.c10f')}}">C10F</a>
          </li>   
          <li class="nav-item" >
            <a class="nav-link " href="{{route('cuadernos.c11')}}">C11</a>
          </li>   
          <li class="nav-item" style="background-color: rgb(73, 131, 185); border-radius: 4px;">
            <a class="nav-link text-light" href="{{route('cuadernos.c12')}}">C12</a>
          </li>   
          
        </ul>
      
      </div>
    </nav> 
        
    @livewire('cuadernos.c12-live' )
  
    @endsection
  </div>