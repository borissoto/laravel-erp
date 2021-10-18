@extends('admin.admin_master')
@section('admin')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Establecimientos de Salud</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Inicio</a></li>
          <li class="breadcrumb-item active">Eess</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

@livewire('admin.eess-index')
   
@endsection

@push('scripts')

<script type="text/javascript" src="{{asset('js/initMap.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/localizacion.js')}}"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwC0dKzZNKNbnzsslPYLNSExYd8uLqRIk&callback=initMap"></script>


@endpush