@extends('admin.admin_master')
@section('admin')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-6">
      <div class="col-sm-8">
        <h1>
          Kardex
          <small>
          </small>
          <span class=" text-lg"> - </span>
          <span class="text-primary text-lead "> {{$user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno}} </span>
        </h1>
      </div>
      <div class="col-sm-4">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Inicio</a></li>
          <li class="breadcrumb-item active">RRHH</li>
        </ol>
      </div>
    </div>
    
  </div><!-- /.container-fluid -->
</section>
<nav class="navbar navbar-expand-md navbar-dark mb-4" style="background-color: #0f3e5f;">
  <span class="navbar-brand mb-0 h1"><i class="far fa-id-card w-20"></i></span>  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('rrhh.kardex.index', $user->id)}}">Info</a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="{{route('rrhh.kardex.cargo', $user->id)}}">Cargo</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{route('rrhh.kardex.educacion', $user->id)}}">Educacion </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Establecimiento</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{route('rrhh.kardex.supervision', $user->id)}}">Supervision</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Comision</a>
      </li>
      <li class="nav-item" style="background-color: rgb(73, 131, 185); border-radius: 4px;">
        <a class="nav-link active" href="{{route('rrhh.kardex.baja', $user->id)}}">Baja <span class="sr-only">(current)</span> </a>
      </li>
      
    </ul>
   
  </div>
</nav>

{{-- con blade --}}
{{-- <div>
  @yield('kardex') 
</div> --}}
 
@livewire('admin.kardex-baja', ['user'=>$user])
{{-- @livewire('admin.kardex-index', $user->toArray()) --}}
{{-- <livewire:admin.kardex-cargo :user="$user->id"> --}}

@endsection