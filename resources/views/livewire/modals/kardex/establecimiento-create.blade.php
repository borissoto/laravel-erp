<div wire:ignore.self class="modal fade" id="kardexEstablecimientoCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content" style="min-height: 480px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Asignar Establecimiento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
            <div class="col-md-12">
                <div class="card card-primary card-outline card-outline-tabs">
                  <div class="card-header p-0 border-bottom-0">                 
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    
                        <div class="row">
                            <div class="col-12">                            

                                <div class="form-group row">
                                    <label for="municipio" class="col-md-4 col-form-label col-form-label-sm">Departamento*</label>
            
                                    <div class="col-md-8">
                                        <select wire:model="selectedDepartamento" name="departamento" class="form-control form-control-sm" required>
                                            <option value="" class="text-primary">Escoja Departamento*</option>
                                            @foreach ($departamentos as $departamento)
                                                <option value="{{ $departamento->id }}">{{ $departamento->nom_departamento }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                                 
                                @if (!is_null($selectedDepartamento))                 
                                
                                <div class="form-group row">            
                                    <label for="municipio" class="col-md-4 col-form-label col-form-label-sm">Municipio*</label>
                                    <div class="col-md-8">
                                        <select wire:model="selectedMunicipio" name="municipio" class="form-control form-control-sm" required>
                                            <option value="" class="text-primary">Escoja Municipio*</option>
                                            @foreach ($municipios as $municipio)
                                                <option value="{{ $municipio->id }}">{{ $municipio->nom_municipio }}</option>
                                            @endforeach
                                        </select>
                                    </div>                           
                                    
                                </div>
                                
                                @endif                       
                                
                                @if (!is_null($selectedMunicipio))
                                <div class="form-group row">
                               
                                    <label for="establecimiento" class="col-md-4 col-form-label col-form-label-sm">Establecimiento*</label>
                        
                                    <div class="col-md-8">                            
                                        <select wire:model="adm_establecimiento_id" name="establecimiento" class="form-control form-control-sm" required>
                                            @if ($establecimientos->count() == 0)
                                                <option value="">-- Escoja Municipio Antes --</option>
                                            @else    
                                                <option value="" >-Escoja Establecimiento-</option>
                                            @endif
                                            @foreach ($establecimientos as $establecimiento)
                                                <option value="{{ $establecimiento->id }}">{{ $establecimiento->nom_establecimiento }}</option>
                                            @endforeach
                                        </select>
                                        @error('adm_establecimiento_id') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>
                                </div>
                                @endif                       

                                <div class="form-group row">
                                    <label for="fecha_ini" class="col-sm-4 col-form-label col-form-label-sm">Fecha Inicio</label>
                                    <div class="col-sm-8"> 
                                        <input wire:model="fecha_ini" class="form-control form-control-sm" type="date" value="" id="fecha_ini">
                                        @error('fecha_ini') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fecha_fin" class="col-sm-4 col-form-label col-form-label-sm">Fecha Fin</label>
                                    <div class="col-sm-8"> 
                                        <input wire:model="fecha_fin" class="form-control form-control-sm" type="date" value="" id="fecha_fin">
                                        @error('fecha_fin') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>
                                </div>                                                       
                  
                            </div>
                          <!-- /.col -->
                        </div>  
                   
                  </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Limpiar</button>
                <button type="button" wire:click.prevent="storeEstablecimiento()" class="btn btn-primary close-modal">Guardar </button>

             
            </div>
        </div>
    </div>
</div>