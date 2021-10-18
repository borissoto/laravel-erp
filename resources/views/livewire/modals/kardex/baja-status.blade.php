<div wire:ignore.self class="modal fade" id="kardexBajaStatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Cambiar Estado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
                <div class="form-group row">                                   
                    <label for="extension" class="col-sm-4 col-form-label">Estado</label>
                    <div class="col-sm-8" >
                        <select wire:model="user_estado" name="med" id="estado" class="form-control">
                            <option value="1">ACTIVO</option>                                            
                            <option value="0">INACTIVO</option>
                            <option value="2">BAJA</option>                                            
                        </select>
                    </div>                                                  
                </div>   
                              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="updateEstadoBaja()" class="btn btn-danger close-modal" data-dismiss="modal">Cambiar Estado</button>
            </div>
        </div>
    </div>
</div>