<div wire:ignore.self class="modal fade" id="kardexInfoUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content" style="min-height: 560px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Informacion Personal</h5>
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
                                    <label for="extension" class="col-sm-2 col-form-label col-form-label-sm">Estado</label>
                                    <div class="col-sm-4" >
                                        @if($user->estado === 2)
                                        <select wire:model="estado" name="med" id="estado" class="form-control form-control-sm" disabled>
                                        @else    
                                        <select wire:model="estado" name="med" id="estado" class="form-control form-control-sm">
                                        @endif    
                                            <option value="0">INACTIVO</option>
                                            <option value="1">ACTIVO</option>                                            
                                            <option value="2" disabled style="background-color: rgb(104, 104, 104); color: rgb(194, 194, 194);">BAJA (No elegible)</option>
                                        </select>
                                    </div>
                                    <label for='rol' class="col-sm-2 col-form-label col-form-label-sm text-danger">Rol Usuario</label>
                                    <div class="col-sm-4">  
                                        <select wire:model="rol"  name="rol" id="rol" class="form-control form-control-sm" >
                                            <option value="" class="text-primary">Escoja Rol Sistema*</option>
                                            @foreach ($roles as $rol)
                                            <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('rol')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                                    </div>                                                    
                                </div>   
                                <div class="form-group row">
                                    <input type="hidden" wire:model="user_id">
                                    <label for="name" class="col-sm-2 col-form-label col-form-label-sm">Usuario</label>
                                    <div class="col-sm-4">
                                        <input wire:model="name" class="form-control form-control-sm" type="text" value="" id="name">
                                        @error('name') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>
                                    <label for="nombres" class="col-sm-2 col-form-label col-form-label-sm">Nombres</label>
                                    <div class="col-sm-4">
                                        <input wire:model="nombres" class="form-control form-control-sm" type="text" value="" id="nombres">
                                        @error('nombres') <span class="text-sm text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>                                                
                                <div class="form-group row">
                                    <label for="ap-paterno" class="col-sm-2 col-form-label col-form-label-sm">Apellido Paterno</label>
                                    <div class="col-sm-4">
                                    <input wire:model="ap_paterno" class="form-control form-control-sm" type="text" value="" id="ap-paterno">
                                    </div>                              
                                    <label for="ap-materno" class="col-sm-2 col-form-label col-form-label-sm">Apellido Materno</label>
                                    <div class="col-sm-4">
                                    <input wire:model="ap_materno" class="form-control form-control-sm" type="text" value="" id="ap-materno">
                                    </div>
                                </div>                                                
                                <div class="form-group row">
                                    <label for="ci" class="col-sm-2 col-form-label col-form-label-sm">Carnet Identidad</label>
                                    <div class="col-sm-4">
                                        <input wire:model="ci" class="form-control form-control-sm" type="number" value="" id="ci">
                                        @error('ci') <span class="text-sm text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                    <label for="extension" class="col-sm-2 col-form-label col-form-label-sm">Extension</label>
                                    <div class="col-sm-4" >                                    
                                        <select wire:model="adm_departamento_id" id="extension" class="form-control form-control-sm" required>                                        
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
                                    </div>                                                  
                                </div>                                                
                                <div class="form-group row">
                                    <label for="fechanac" class="col-sm-2 col-form-label col-form-label-sm">Fecha Nacimiento</label>                                                                                                  
                                    <div class="col-sm-4"> 
                                        <input wire:model="fecha_nac" class="form-control form-control-sm" type="date" value="" id="fechanac">
                                    </div>
                                    <label for="extension" class="col-sm-2 col-form-label col-form-label-sm">Sexo</label>
                                    <div class="col-sm-4" >
                                        <select wire:model="sexo" name="med" id="SEXO" class="form-control form-control-sm">
                                            <option value="0">GENERO</option>
                                            <option value="MASCULINO">MASCULINO</option>
                                            <option value="FEMENINO">FEMENINO</option>
                                        </select>
                                    </div>                                                  
                                </div>                                                
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                                    <div class="col-sm-4">
                                        <input wire:model="email" class="form-control form-control-sm" type="email" value="" id="email">
                                    </div>                             
                                        <label for="telefono" class="col-sm-2 col-form-label col-form-label-sm">Telefono</label>
                                        <div class="col-sm-4">
                                            <input wire:model="telefono" class="form-control form-control-sm" type="number" value="" id="telefono">
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label for="domicilio" class="col-sm-2 col-form-label col-form-label-sm">Domicilio</label>
                                    <div class="col-sm-4">
                                        <input wire:model="domicilio" class="form-control form-control-sm" type="text" value="" id="domicilio">
                                    </div>                              
                                    <label for="incorporacion" class="col-sm-2 col-form-label col-form-label-sm">Incorporacion</label>
                                    <div class="col-sm-4">
                                        <input wire:model="incorporacion" class="form-control form-control-sm" type="date" value="" id="incorporacion">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="item" class="col-sm-2 col-form-label col-form-label-sm">Item</label>
                                    <div class="col-sm-4">
                                        <input wire:model="item" class="form-control form-control-sm" type="number" value="" id="item">
                                    </div>
                                    <label for="docente" class="col-sm-2 col-form-label col-form-label-sm">Docente</label>
                                    <div class="col-sm-4">                                        
                                        <select wire:model="docente" name="med" id="SEXO" class="form-control form-control-sm">
                                            <option value="NA">NO APLICA</option>
                                            <option value="EDPERM">EDPERM</option>                                            
                                        </select>
                                    </div>                                                   
                                </div>  
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Universidad</label>
                                    <div class="col-sm-4">                            
                                        <select wire:model="universidad"  id="UNIVERSIDAD" class="form-control form-control-sm">
                                            <option value="0">UNIVERSIDAD DE EGRESO</option>
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
                                    </div>                                 
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Grado Academico</label>
                                    <div class="col-sm-4">
                                        <select wire:model="grado" id="GRADO" class="form-control form-control-sm">
                                            <option value="0">GRADO ACADEMICO</option>
                                            <option value="ESPECIALISTA SAFCI">ESPECIALISTA SAFCI</option>
                                            <option value="MEDICO MGI">MEDICO GENERAL INTEGRAL</option>
                                            <option value="MEDICO GENERAL">MEDICO GENERAL</option>
                                            <option value="NO CORRESPONDE">NO CORRESPONDE</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="obs" class="col-sm-2 col-form-label col-form-label-sm">Observaciones</label>
                                    <div class="col-sm-10">
                                        <input wire:model="obs" class="form-control form-control-sm" type="textarea">
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
                <button type="button" wire:click.prevent="update()" class="btn btn-primary close-modal">Actualizar</button>
            </div>
        </div>
    </div>
</div>