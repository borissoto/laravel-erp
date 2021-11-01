<div wire:ignore.self class="modal fade" id="showForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content" style="min-height: 560px">
            <div class="modal-header">
                <h5 class="modal-title" id="showFormLabel"> {{ $mode == 'create' ? 'Nuevo Anuencia' : 'Actualizar Anuencia' }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
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
                                    <label for="cite" class="col-sm-2 col-form-label col-form-label-sm">Nro Cite</label>
                                    <div class="col-sm-1">
                                        <input wire:model="cite" class="form-control form-control-sm" type="number" value="" id="cite" {{ $flag == 1 ? 'disabled' : '' }}>
                                        @error('cite') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>                                                                                   
                           
                                    <label for="adm_departamento_id" class="col-sm-2 col-form-label col-form-label-sm">Coordinador(a) de</label>
                                    <div class="col-sm-3">
                                        <select wire:model="adm_departamento_id" id="adm_departamento_id" class="form-control form-control-sm" {{ $flag == 1 ? 'disabled' : '' }}>                                         
                                            <option value="">-Elija Departamento-</option>
                                            <option value="1">LA PAZ</option>
                                            <option value="2">ORURO</option>
                                            <option value="3">POTOSI</option>
                                            <option value="4">COCHABAMBA</option>
                                            <option value="5">CHUQUISACA</option>
                                            <option value="6">TARIJA</option>
                                            <option value="7">PANDO</option>
                                            <option value="8">BENI</option>
                                            <option value="9">SANTA CRUZ</option>
                                        </select>     
                                        @error('adm_departamento_id') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div> 

                                    <label for="lugar" class="col-sm-1 col-form-label col-form-label-sm">Lugar</label>
                                    <div class="col-sm-3">
                                        <input wire:model="lugar" class="form-control form-control-sm" type="text" value="" id="lugar" {{ $flag == 1 ? 'disabled' : '' }}>
                                        @error('lugar') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>   
                                                                    
                                </div>     

                                <div class="form-group row">

                                    <label for="nota_interna" class="col-sm-2 col-form-label col-form-label-sm">Nota(interna) </label>
                                    <div class="col-sm-1">
                                        <input wire:model="nota_interna" class="form-control form-control-sm" type="number" value="" id="nota_interna" {{ $flag == 1 ? 'disabled' : '' }}>
                                        @error('nota_interna') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>  
                          
                                    <label for="fecha_ini" class="col-sm-2 col-form-label col-form-label-sm">Fecha Inicio</label>
                                    <div class="col-sm-3"> 
                                        <input wire:model="fecha_ini" class="form-control form-control-sm" type="date" value="" id="fecha_ini" {{ $flag == 1 ? 'disabled' : '' }}>
                                        @error('fecha_ini') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>

                                    <label for="fecha_fin" class="col-sm-1 col-form-label col-form-label-sm">Fecha Fin</label>
                                    <div class="col-sm-3"> 
                                        <input wire:model="fecha_fin" class="form-control form-control-sm" type="date" value="" id="fecha_fin" {{ $flag == 1 ? 'disabled' : '' }}>
                                        @error('fecha_fin') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="descripcion" class="col-sm-2 col-form-label col-form-label-sm">Objeto</label>
                                    <div class="col-sm-8">
                                        <textarea wire:model="descripcion" class="form-control form-control-sm" type="text" value="" id="descripcion" {{ $flag == 1 ? 'disabled' : '' }}></textarea>
                                        @error('descripcion') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>                                                                                   
                                    
                                    
                                    <div class="col-sm-2 d-flex justify-content-center">
                                        <button type="button" @if($mode == 'create') wire:click="store()" @else wire:click="update()" @endif  class="btn btn-primary" {{ $flag == 1 ? 'disabled' : '' }}>
                                            {{ $mode == 'create' ? 'Continuar' : 'Continuar' }}
                                        </button>
                                    </div>
                                </div>  

                            @if($showComponents) 
                            @livewire('utils.user-select') 
                            @livewire('admin.comisionuser-index')
                            @endif

                  
                            </div>
                          <!-- /.col -->
                        </div>  
                   
                  </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
            <div class="modal-footer">
             
            </div>
        </div>
    </div>
</div>