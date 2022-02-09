@extends('admin.admin_master')
@section('admin')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Recursos Humanos por Municipio</h1>
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
         
@livewire('admin.rrhh-municipal')
@push('modals')
  @livewire('live-modal')
@endpush
@endsection