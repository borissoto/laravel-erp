<div wire:ignore.self class="modal fade" id="comisionUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content" style="min-height: 560px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva Comision</h5>
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
                                <input type="hidden" wire:model="comision_id">

                                <div class="form-group row">
                                    <label for="tipo_comision" class="col-sm-4 col-form-label col-form-label-sm">Tipo Comision</label>
                                    <div class="col-sm-8">
                                        <select wire:model="tipo_comision" name="med" id="financiamiento" class="form-control form-control-sm">
                                            <option value="">- Escoja -</option>
                                            <option value="COVID">COVID</option>
                                            <option value="FERIA">FERIA</option>                                            
                                            <option value="SUPERVISION">SUPERVISION</option>
                                            <option value="REUNION DE ANALISIS DE INFORMACION">REUNION DE ANALISIS DE INFORMACION</option>                                                                             
                                                                                    
                                        </select>
                                        @error('tipo_comision') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>                                                                                   
                                </div>

                                <div class="form-group row">
                                    <label for="descripcion" class="col-sm-4 col-form-label col-form-label-sm">Descripcion</label>
                                    <div class="col-sm-8">
                                        <textarea wire:model="descripcion" class="form-control form-control-sm" type="text" value="" id="descripcion"></textarea>
                                        @error('descripcion') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>                                                                                   
                                </div>  

                                <div class="form-group row">
                                    <label for="viaticos" class="col-sm-4 col-form-label col-form-label-sm">Viaticos</label>
                                    <div class="col-sm-8">
                                        <select wire:model="viaticos" name="med" id="financiamiento" class="form-control form-control-sm">
                                            <option value="">- Escoja -</option>
                                            <option value="COVID">SI</option>
                                            <option value="FERIA">NO</option>                                                                                       
                                        </select>
                                        
                                        @error('viaticos') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>                                                                                   
                                </div>
                                
                                <div class="form-group row">
                                    <label for="lugar" class="col-sm-4 col-form-label col-form-label-sm">Lugar</label>
                                    <div class="col-sm-8">
                                        <input wire:model="lugar" class="form-control form-control-sm" type="text" value="" id="lugar">
                                        @error('lugar') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>                                                                                   
                                </div>
                                
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
                <button type="button" wire:click.prevent="updateComision()" class="btn btn-primary close-modal">Actualizar</button>

             
            </div>
        </div>
    </div>
</div>