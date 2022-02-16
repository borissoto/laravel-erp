<div wire:ignore.self class="modal fade" id="kardexPassUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cambiar Contraseña</h5>
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
                                    <label for="password" class="col-sm-6 col-form-label col-form-label-sm text-danger">Contraseña </label>
                                    <div class="col-sm-6">  
                                        <input wire:model="password" class="form-control form-control-sm" id="password" type="password" name="password" required autocomplete="new-password" />
                                        @error('password') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
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
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="passUpdate()" class="btn btn-primary close-modal">Actualizar</button>
            </div>
        </div>
    </div>
</div>