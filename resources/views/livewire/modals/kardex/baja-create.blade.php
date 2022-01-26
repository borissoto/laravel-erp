<div wire:ignore.self class="modal fade" id="kardexBajaCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content" style="min-height: 560px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva Baja</h5>
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
                                    <label for="tipo" class="col-sm-4 col-form-label">Tipo Baja</label>
                                    <div class="col-sm-8">
                                        <select wire:model="tipo" name="med" id="financiamiento" class="form-control">
                                            <option value="">- Escoja -</option>
                                            <option value="ACCIDENTE LABORAL">ACCIDENTE LABORAL</option>
                                            {{-- <option value="BAJA MEDICA">BAJA MEDICA</option>                                             --}}
                                            {{-- <option value="BAJA MEDICA POR MATERNIDAD (PURPERIO)">BAJA MEDICA POR MATERNIDAD (PURPERIO)</option> --}}
                                            <option value="BAJA MEDICA POSTNATAL">BAJA MEDICA PRENATAL Y POSTNATAL</option>                                            
                                            {{-- <option value="BAJA POR ACCIDENTES">BAJA POR ACCIDENTES</option>                                             --}}
                                            <option value="BAJA POR COVID">BAJA POR COVID</option>                                            
                                            <option value="BAJA POR ENFERMEDAD (NO COVID)">BAJA POR ENFERMEDAD (NO COVID)</option>                                            
                                            {{-- <option value="BAJA PRENATAL">BAJA PRENATAL</option>                                             --}}
                                            {{-- <option value="BAJA POR CORMOBILIDAD">BAJA POR CORMOBILIDAD</option>                                             --}}
                                            {{-- <option value="BAJA POR CONDICION DE BASE">BAJA POR CONDICION DE BASE</option>                                             --}}
                                            {{-- <option value="SIN PERMISO ESPECIAL">SIN PERMISO ESPECIAL</option>                                             --}}
                                                                                    
                                        </select>
                                        @error('tipo') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>                                                                                   
                                </div>

                                <div class="form-group row">
                                    <label for="causa_probable" class="col-sm-4 col-form-label">Causa Probable</label>
                                    <div class="col-sm-8">
                                        <input wire:model="causa_probable" class="form-control" type="text" value="" id="causa_probable">
                                        @error('causa_probable') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>                                                                                   
                                </div>

                                <div class="form-group row">
                                    <label for="factor_riesgo" class="col-sm-4 col-form-label">Factor Riesgo</label>
                                    <div class="col-sm-8">
                                        {{-- <input wire:model="factor_riesgo" class="form-control" type="text" value="" id="factor_riesgo"> --}}
                                        <select wire:model="factor_riesgo" name="factor_riesgo" id="factor_riesgo" class="form-control">
                                            <option value="">- Escoja -</option>
                                            <option value="MADRE CON HIJO(A) MENOR A 1 AÑO">MADRE CON HIJO(A) MENOR A 1 AÑO</option>
                                            <option value="MAYOR DE 60">MAYOR DE 60</option>                                            
                                            <option value="DISCAPACIDAD">DISCAPACIDAD</option>
                                            <option value="OTROS">OTROS</option>
                                        </select>
                                        @error('factor_riesgo') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>                                                                                   
                                </div>

                                <div class="form-group row">
                                    <label for="fecha_ini" class="col-sm-4 col-form-label">Fecha Inicio</label>
                                    <div class="col-sm-8"> 
                                        <input wire:model="fecha_ini" class="form-control" type="date" value="" id="fecha_ini">
                                        @error('fecha_ini') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fecha_fin" class="col-sm-4 col-form-label">Fecha Fin</label>
                                    <div class="col-sm-8"> 
                                        <input wire:model="fecha_fin" class="form-control" type="date" value="" id="fecha_fin">
                                        @error('fecha_fin') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
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
                <button type="button" wire:click.prevent="storeBaja()" class="btn btn-primary close-modal">Guardar </button>

             
            </div>
        </div>
    </div>
</div>