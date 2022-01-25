<div wire:ignore.self class="modal fade" id="kardexCargoCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content" style="min-height: 560px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Cargo</h5>
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
                                    <label for="nom_cargo" class="col-sm-4 col-form-label">Cargo</label>
                                    <div class="col-sm-8">
                                        <select wire:model="nom_cargo" id="nom_cargo" class="form-control">
                                            <option value="0">-Cargo-</option>
                                            <option value="COORDINADOR DEPARTAMENTAL">COORDINADOR DEPARTAMENTAL</option>
                                            <option value="JEFE DE ENSEÑANZA">JEFE DE ENSEÑANZA</option>
                                            <option value="RESPONSABLE DE INFORMACION Y BASE DE DATOS">RESPONSABLE DE INFORMACION Y BASE DE DATOS</option>
                                            <option value="RESPONSABLE REGIONAL">RESPONSABLE REGIONAL</option>
                                            <option value="RESPONSABLE MUNICIPAL">RESPONSABLE MUNICIPAL</option>
                                            <option value="RESPONSABLE DISTRITAL">RESPONSABLE DISTRITAL</option>
                                            <option value="MEDICO DE BASE">MEDICO DE BASE</option>
                                            <option value="MEDICO RESIDENTE">MEDICO RESIDENTE</option>
                                            <option value="CONDUCTOR">CONDUCTOR</option>
                                            <option value="AUXILIAR DE ENFERMERIA">AUXILIAR DE ENFERMERIA</option>
                                            <option value="AUXILIAR DE ENFERMERIA">ADMINISTRACION</option>                                            
                                        </select> 
                                        @error('nom_cargo') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>                                                   
                                </div>                                                                      
                                                                             
                                <div class="form-group row">
                                    <label for="incorporacion" class="col-sm-4 col-form-label">Incorporacion</label>                                                                                                  
                                    <div class="col-sm-8"> 
                                        <input wire:model="incorporacion" class="form-control" type="date" value="" id="incorporacion">
                                        @error('incorporacion') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="extension" class="col-sm-4 col-form-label">Estado</label>
                                    <div class="col-sm-8" >
                                        <select wire:model="estado" name="med" id="estado" class="form-control">
                                            <option value="">-Estado-</option>
                                            <option value="1">ACTUAL</option>
                                            <option value="0">ANTERIOR</option>
                                        </select>
                                        @error('estado') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div> 
                                </div>
                                <div class="form-group row">
                                    <label for="extension" class="col-sm-4 col-form-label">Area</label>
                                    <div class="col-sm-8" >
                                        <select wire:model="adm_unidades_id" name="med" id="adm_unidades_id" class="form-control">
                                            <option value="">-Area-</option>
                                            <option value="1">IMPLEMENTACION SAFCI</option>
                                            <option value="2">FORMACION SAFCI</option>
                                            <option value="3">ADMINISTRACION SAFCI</option>
                                        </select>
                                        @error('adm_unidades_id') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div> 
                                </div>
                                                                                                                                                                                    
                                <div class="form-group row">
                                    <label for="obs" class="col-sm-4 col-form-label">Observaciones</label>
                                    <div class="col-sm-8">
                                        <textarea wire:model="descripcion" class="form-control" type="text" value="" id="obs"></textarea>
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
                <button type="button" wire:click.prevent="storeCargo()" class="btn btn-primary close-modal">Guardar </button>

             
            </div>
        </div>
    </div>
</div>