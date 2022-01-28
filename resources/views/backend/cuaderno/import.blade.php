<div>
    @extends('admin.admin_master')
    @section('admin')
  
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-6">
          <div class="col-sm-8">
            <h1>
              Importar Cuadernos
              <small>
              </small>
              <span class=" text-lg"> - C1 C2 C3 C4 C5 C6 C9 C19 C10 C11 C12</span>
              
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
    <div class="card">
        <div class="card-header">
            Descargar    
            <a class="btn btn-success btn-sm" href={{ asset('img/Form_CUADERNOS_sistema.xlsx') }}>Archivo Base Excel</a>
            *
        </div>
        <div class="card-body">
          @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{session('status')}}

            </div>
          @endif
            Instrucciones
            <ul>
              <li>Descargar el archivo Base Excel</li>
              <li>Escoger Departamento, Municipio, Establecimiento y Medico que sube la informacion</li>
              <li> <strong> NO USAR BORDES AL LLENAR </strong> los Cuadernos</li>
              <img src="{{asset('img/no_bordes.jpg')}}" loading="lazy" alt="">
            </ul>
            

              <h3 style="width: 100%; margin-left:30%; margin-right:30%;">Formulario Importar Excel</h3>
            


            <form action="/admin/cuadernos/import" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                  <label for="depto" class="col-md-2 col-form-label col-form-label-sm text-md-right">Departamento*</label>

                  <div class="col-md-4">
                      <select name="departamento" class="form-control form-control-sm" id="departamento" required>
                          <option value=""  class="text-primary">Escoja Departamento*</option>
                          @foreach ($departamentos as $departamento)
                              <option value="{{ $departamento->id }}">{{ $departamento->nom_departamento }}</option>
                          @endforeach
                      </select>
                  </div>
                </div>

                <div class="form-group row"> 
                  <label for="municipio" class="col-md-2 col-form-label col-form-label-sm text-md-right">Municipio*</label>
                  <div class="col-md-4">
                      <select name="municipio" class="form-control form-control-sm"  id="municipio" required>
                         
                         
                      </select>
                  </div>
                </div>
              
              
              <div class="form-group row">             
                  <label for="establecimiento" class="col-md-2 col-form-label col-form-label-sm text-md-right">Establecimiento*</label>      
                  <div class="col-md-4">                            
                      <select name="establecimiento" class="form-control form-control-sm" id="establecimiento" required>
                         
                      </select>
                  </div>
              </div> 

              <div class="form-group row">             
                  <label for="medico" class="col-md-2 col-form-label col-form-label-sm text-md-right">Medico*</label>      
                  <div class="col-md-4">                            
                      <select name="medico" class="form-control form-control-sm" id="medico" required>
                         
                      </select>
                  </div>
              </div> 
              
        
                <div class="form-group row">
                    <label for="importar" class="col-md-2 col-form-label col-form-label-sm text-md-right">Seleccionar Archivo</label>
                    <div class="col-md-4">  
                      <input class="form-control form-control-sm" id="importar" type="file" name="file">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Importar</button>
            </form>
        </div>
    </div>
    
    @endsection
    @push('scripts')
    <script>
      $(document).ready(function () {
        $('#departamento').on('change', function () {
          let id = $(this).val();
          $('#municipio').empty();
          $('#municipio').append(`<option value="0" disabled selected>Procesando...</option>`);
          $.ajax({
            type: 'GET',
            url: '/admin/getMunicipio/' + id,
            success: function (response) {
              var response = JSON.parse(response);
              console.log(response);
              $('#municipio').empty();
              $('#municipio').append(`<option value="0" disabled selected>Selecione Municipio*</option>`);
              response.forEach(element => {
                $('#municipio').append(`<option value="${element['id']}">${element['nom_municipio']}</option>`);
              });
            }
          });
        });
        $('#municipio').on('change', function () {
          let id = $(this).val();
          $('#establecimiento').empty();
          $('#establecimiento').append(`<option value="0" disabled selected>Procesando...</option>`);
          $.ajax({
            type: 'GET',
            url: '/admin/getEstablecimiento/' + id,
            success: function (response) {
              var response = JSON.parse(response);
              console.log(response);
              $('#establecimiento').empty();
              $('#establecimiento').append(`<option value="0" disabled selected>Selecione establecimiento*</option>`);
              response.forEach(element => {
                $('#establecimiento').append(`<option value="${element['id']}">${element['nom_establecimiento']}</option>`);
              });
            }
          });
        });
        $('#establecimiento').on('change', function () {
          let id = $(this).val();
          $('#medico').empty();
          $('#medico').append(`<option value="0" disabled selected>Procesando...</option>`);
          $.ajax({
            type: 'GET',
            url: '/admin/getMedico/' + id,
            success: function (response) {
              var response = JSON.parse(response);
              console.log(response);
              $('#medico').empty();
              $('#medico').append(`<option value="0" disabled selected>Selecione Medico*</option>`);
              response.forEach(element => {
                $('#medico').append(`<option value="${element['id']}">${element['nombres']} ${element['ap_paterno']} ${element['ap_materno']}</option>`);
              });
            }
          });
        });
      });
</script>
@endpush
  </div>