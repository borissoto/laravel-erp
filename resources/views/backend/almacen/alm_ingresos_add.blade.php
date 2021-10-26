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
              <span class=" text-lg"> - Ingresos</span>
              
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
            <a class="nav-link text-light" href="{{ route('almacen.ingresos')}}">Ingresos <span class="sr-only">(current)</span></a>
          </li>
        
          
        </ul>
      
      </div>
    </nav>
  
    <div class="content">
      <div class="container-fluid">
        
          <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-header">
      
            </div>
      
            <div class="card-body">

              
                <div class='form-group row'>
                  <label for='proveedor' class="col-sm-1 col-form-label col-form-label-sm">Proveedor</label>
                  <div class="col-sm-2">
                      <input type='text' class='form-control form-control-sm @error('proveedor')  is-invalid @enderror' wire:model='proveedor'>
                      @error('proveedor')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                  </div>
              
                  <label for='modalidad_ingreso' class="col-sm-1 col-form-label col-form-label-sm">Tipo</label>
                  <div class="col-sm-2">
                      <select wire:model="modalidad_ingreso" id="modalidad_ingreso" class="form-control form-control-sm">
                          <option value="">-Tipo Comprobante-</option>
                          <option value="FACTURA">FACTURA</option>
                          <option value="RECIBO">RECIBO</option>
                          <option value="NOTA DE ENTREGA">NOTA DE ENTREGA</option>                                    
                      </select>                                
                      @error('modalidad_ingreso')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                  </div>
              
                  <label for='nro_factura' class="col-sm-1 col-form-label col-form-label-sm">Nro </label>
                  <div class="col-sm-2">
                      <input type='number' class='form-control form-control-sm @error('nro_factura')  is-invalid @enderror' wire:model='nro_factura'>
                      @error('nro_factura')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                  </div>
              
                  <label for='fecha' class="col-sm-1 col-form-label col-form-label-sm">Fecha</label>
                  <div class="col-sm-2">
                      <input type='date' class='form-control form-control-sm @error('fecha')  is-invalid @enderror' wire:model='fecha'>
                      @error('fecha')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                  </div>
              </div>

              <div class='form-group row'>
                  <label for='obs' class="col-sm-1 col-form-label col-form-label-sm">Glosa</label>
                  <div class="col-sm-11">
                      <textarea class='form-control form-control-sm @error('obs')  is-invalid @enderror' wire:model='obs'></textarea>
                      @error('obs')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                  </div>
              </div>

              <div class="form-group row">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click="store()" class="btn btn-primary">Guardar</button>
             </div>
            
      
             
             @livewire('almacen.articulo-index' )
             @livewire('almacen.ingreso-index' )
      
      
              <div class="table table-sm table-bordered table-striped text-sm">
                <thead>
                  <tr>
                    <tr>
                      <th>Id</th>                        
                      <th>Fecha</th>
                      <th>Proveedor</th>
                      <th>Tipo</th>                        
                      <th>Nro Factura</th>
                      <th>Numero</th>                                                
                      <th>Usuario</th>
                      <th scope="col">
                          <span class="sr-only">Acciones</span>
                      </th>
                  </tr>
                  </tr>
                  
                </thead>
              </div>
            </div>
          </div>
          

        

      </div>
    </div>



    {{-- con blade --}}
    {{-- <div>
      @yield('kardex') 
    </div> --}}
    
    {{-- @livewire('almacen.comprobante-index' ) --}}
    {{-- @livewire('admin.kardex-index', ['user'=>$user->id]) --}}
    {{-- <livewire:admin.kardex-index :user="$user->id">  --}}
  
    @endsection
  </div>