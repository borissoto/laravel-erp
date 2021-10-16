<div wire:ignore.self class="modal fade" id="kardexEducacionCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content" style="min-height: 560px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Estudio</h5>
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
                                    <label for="extension" class="col-sm-4 col-form-label">Tipo Postgrado</label>
                                    <div class="col-sm-8" >
                                        <select wire:model="tipo_postgrado" name="med" id="tipo_postgrado" class="form-control">
                                            <option value="">-Tipo Postgrado -</option>
                                            <option value="DIPLOMADO">DIPLOMADO</option>
                                            <option value="MAESTRIA">MAESTRIA</option>
                                            <option value="DOCTORADO">DOCTORADO</option>
                                            <option value="OTRO">OTRO</option>
                                        </select>
                                        @error('tipo_postgrado') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div> 
                                </div>

                                <div class="form-group row">
                                    <label for="nom_postgrado" class="col-sm-4 col-form-label">Titulo</label>
                                    <div class="col-sm-8">
                                        <textarea wire:model="nom_postgrado" class="form-control" type="text" value="" id="nom_postgrado"></textarea>
                                        @error('nom_postgrado') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>                                                                                   
                                </div>
                                <div class="form-group row">                                    
                                    <label for="nom_cargo" class="col-sm-4 col-form-label">Universidad</label>
                                    <div class="col-sm-8">
                                        <select wire:model="universidad"  id="universidad" class="form-control">
                                            <option value="0">-Universidad de Egreso-</option>
                                            <option value="ELAM-CUBA">ESCUELA LATINO AMERICANA DE MEDICINA (CUBA)</option>
                                            <option value="ELAM-VENEZUELA">ESCUELA LATINO AMERICANA DE MEDICINA (VENEZUELA)</option>
                                            <option value="U.G.R.M.">UNIVERSIDAD AUTONOMA GABRIEL RENE MORENO</option>
                                            <option value="U.M.S.">UNIVERSIDAD AUTONOMA JUAN MISAEL SARACHO </option>
                                            <option value="U.A.T.F.">UNIVERSIDAD AUTONOMA TOMAS FRIAS</option>
                                            <option value="U.B.I.">UNIVERSIDAD BOLIVIANA DE INFORMATICA</option>
                                            <option value="U.C.B.S.P.">UNIVERSIDAD CATOLICA BOLIVIANA SAN PABLO</option>
                                            <option value="U.C.B.">UNIVERSIDAD CRISTIANA DE BOLIVIA</option>
                                            <option value="UDABOL">UNIVERSIDAD DE AQUINO BOLIVIA</option>
                                            <option value="U.M.S.A.">UNIVERSIDAD MAYOR DE SAN ANDRÉS</option>
                                            <option value="U.M.S.S.">UNIVERSIDAD MAYOR DE SAN SIMÓN</option>
                                            <option value="U.M.R.P.S.F.X.CH.">UNIVERSIDAD MAYOR REAL  Y PONTIFICIA DE SAN FRANCISCO XAVIER DE CHUQUISICA</option>
                                            <option value="U.N.S.L.P.">UNIVERSIDAD NUESTRA SEÑORA DE LA PAZ</option>
                                            <option value="UNIVALLE">UNIVERSIDAD PRIVADA DEL VALLE</option>
                                            <option value="UPAL-ORURO">UNIVERSIDAD PRIVADA LATINOAMERICANA-UPAL ORURO </option>
                                            <option value="U.P.E.A.">UNIVERSIDAD PUBLICA DE EL ALTO</option>
                                            <option value="U.S.XX">UNIVERSIDAD SIGLO XX LLALLAGUA</option>
                                            <option value="U.T.O.">UNIVERSIDAD TECNICA DE ORURO</option>
                                            <option value="UTEPC">UNIVERSIDAD TECNICA PRIVADA COSMOS </option>
                                            <option value="OTRAS UNIVERSIDADES">OTRA UNIVERSIDAD</option>
                                        </select>
                                        @error('universidad') <span class="text-sm text-danger error">{{ $message }}</span>@enderror
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
                <button type="button" wire:click.prevent="storeEducacion()" class="btn btn-primary close-modal">Guardar </button>

             
            </div>
        </div>
    </div>
</div>