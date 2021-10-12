@extends('admin.admin_master')
@section('admin')


<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Redes</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Inicio</a></li>
          <li class="breadcrumb-item active">RRHH</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>


@livewire('admin.redes-index')

@endsection