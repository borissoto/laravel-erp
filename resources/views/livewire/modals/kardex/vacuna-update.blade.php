<div wire:ignore.self class="modal fade" id="kardexCovidUUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content" style="min-height: 560px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Vacuna Covid</h5>
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
                                    <label for="dosis" class="col-sm-4 col-form-label">Tipo Baja</label>
                                    <div class="col-sm-8">
                                        <select wire:model="dosis" name="med" id="financiamiento" class="form-control">
                                            <option value="">- Escoja -</option>
                                            <option value="1ERA DOSIS">1ERA DOSIS</option>
                                            <option value="2DA DOSIS">2DA DOSIS</option>                                            
                                            <option value="3ERA DOSIS">3ERA DOSIS</option>
                                            <option value="4TA DOSIS">4TA DOSIS</option>                                            
                                            <option value="5TA DOSIS">5TA DOSIS</option>                                                                                                                              
                                                                                    
                                        </select>
                                        @error('dosis') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>                                                                                   
                                </div>

                                <div class="form-group row">
                                    <label for="nom_vacuna" class="col-sm-4 col-form-label">Tipo Baja</label>
                                    <div class="col-sm-8">
                                        <select wire:model="nom_vacuna" name="med" id="financiamiento" class="form-control">
                                            <option value="">TIPO DE VACUNA</option>
                                            <option value="BIBP SINOPHARM">SINOPHARM</option>
                                            <option value="OXFORD AZTRAZENECA">AZTRAZENECA</option>
                                            <option value="BIONTECH PFIZER">PFIZER</option>
                                            <option value="SPUTNIK V">SPUTNIK V</option>
                                            <option value="JOHNSON & JOHNSON">JOHNSON & JOHNSON</option>                                      
                                                                                    
                                        </select>
                                        @error('nom_vacuna') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>                                                                                   
                                </div>

                                

                                <div class="form-group row">
                                    <label for="fecha" class="col-sm-4 col-form-label">Fecha Vacunacion</label>
                                    <div class="col-sm-8"> 
                                        <input wire:model="fecha" class="form-control" type="date" value="" id="fecha">
                                        @error('fecha') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
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
                <button type="button" wire:click.prevent="updateCovidU()" class="btn btn-primary close-modal">Actualizar </button>

             
            </div>
        </div>
    </div>
</div>