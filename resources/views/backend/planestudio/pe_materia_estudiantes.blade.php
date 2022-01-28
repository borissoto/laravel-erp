<div>
  @extends('admin.admin_master')
  @section('admin')

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-6">
        <div class="col-sm-8">
          <h1>
            Notas
            <small>
            </small>
            <span class=" text-lg"> - Materias</span>
            
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


  {{-- con blade --}}
  {{-- <div>
    @yield('kardex') 
  </div> --}}
  
  @livewire('plan-estudios.nota-index', ['curso'=>$curso] )


  @endsection
</div>