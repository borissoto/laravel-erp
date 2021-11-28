<div wire:ignore.self class="modal fade" id="kardexSupervisionCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content" style="min-height: 560px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva Supervision</h5>
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
                                    <label for="fecha" class="col-sm-4 col-form-label">Fecha</label>
                                    <div class="col-sm-8"> 
                                        <input wire:model="fecha" class="form-control" type="date" value="" id="fecha">
                                        @error('fecha') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="puntaje" class="col-sm-4 col-form-label">Puntaje</label>
                                    <div class="col-sm-8">
                                        <input wire:model="puntaje" class="form-control" type="number" value="" id="puntaje">
                                        @error('puntaje') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>                                                                                   
                                </div>
                                <div class="form-group row">
                                    <label for="recomendacion" class="col-sm-4 col-form-label">Resultado</label>
                                    <div class="col-sm-8">
                                        <input wire:model="recomendacion" class="form-control" type="text" value="" id="recomendacion">
                                        @error('recomendacion') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>                                                                                   
                                </div>
                                <div class="form-group row">
                                    <label for="financiamiento" class="col-sm-4 col-form-label">Financiamiento</label>
                                    <div class="col-sm-8">
                                        <select wire:model="financiamiento" name="med" id="financiamiento" class="form-control">
                                            <option value="">-POA -</option>
                                            <option value="SIN POA">SIN POA</option>
                                            <option value="CON POA">CON POA</option>                                            
                                            <option value="OTRO">OTRO</option>
                                        </select>
                                        @error('financiamiento') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>                                                                                   
                                </div>
                                <div class="form-group row">
                                    <label for="justificacion" class="col-sm-4 col-form-label">Recomendacion</label>
                                    <div class="col-sm-8">
                                        <textarea wire:model="justificacion" class="form-control" type="text" value="" id="justificacion"></textarea>
                                        @error('justificacion') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>                                                                                   
                                </div>
                                <div class="form-group row">
                                    <label for="obs" class="col-sm-4 col-form-label">Observaciones</label>
                                    <div class="col-sm-8">
                                        <textarea wire:model="obs" class="form-control" type="text" value="" id="obs"></textarea>
                                        @error('obs') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
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
                <button type="button" wire:click.prevent="storeSupervision()" class="btn btn-primary close-modal">Guardar </button>

             
            </div>
        </div>
    </div>
</div>