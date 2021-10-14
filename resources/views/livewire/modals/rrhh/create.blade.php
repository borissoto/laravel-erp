<div wire:ignore.self class="modal fade" id="rrhhCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content" style="min-height: 560px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Recurso Humano</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
            <div class="col-md-12">
                <div class="card card-primary card-outline card-outline-tabs">
                  <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-tabs" role="tablist" aria-orientation="vertical">
                      <li class="nav-item"><a class="nav-link active" href="#personal" data-toggle="tab">Inf. Personal</a></li>                      
                      <li class="nav-item"><a class="nav-link" href="#educacion" data-toggle="tab">Educacion</a></li>
                      <li class="nav-item"><a class="nav-link" href="#establecimiento" data-toggle="tab">Establecimiento</a></li>
                    </ul>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">

      
                      <div class="active tab-pane" id="personal">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Usuario</label>
                                    <div class="col-sm-4">
                                        <input wire:model="name" class="form-control" type="text" value="" id="name">
                                        @error('name') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                                    </div>
                                    <label for="nombres" class="col-sm-2 col-form-label">Nombres</label>
                                    <div class="col-sm-4">
                                        <input wire:model="nombres" class="form-control" type="text" value="" id="nombres">
                                        @error('nombres') <span class="text-sm text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                </div>                                                
                                <div class="form-group row">
                                    <label for="ap-paterno" class="col-sm-2 col-form-label">Apellido Paterno</label>
                                    <div class="col-sm-4">
                                    <input wire:model="ap_paterno" class="form-control" type="text" value="" id="ap-paterno">
                                    </div>                              
                                    <label for="ap-materno" class="col-sm-2 col-form-label">Apellido Materno</label>
                                    <div class="col-sm-4">
                                    <input wire:model="ap_materno" class="form-control" type="text" value="" id="ap-materno">
                                    </div>
                                </div>                                                
                                <div class="form-group row">
                                    <label for="ci" class="col-sm-2 col-form-label">Carnet Identidad</label>
                                    <div class="col-sm-4">
                                        <input wire:model="ci" class="form-control" type="number" value="" id="ci">
                                        @error('ci') <span class="text-sm text-danger error">{{ $message }}</span>@enderror
                                    </div>
                                    <label for="extension" class="col-sm-2 col-form-label">Extension</label>
                                    <div class="col-sm-4" >
                                    <input wire:model="adm_departamento_id" class="form-control" type="text" value="" id="extension">
                                    </div>                                                  
                                </div>                                                
                                <div class="form-group row">
                                    <label for="fechanac" class="col-sm-2 col-form-label">Fecha Nacimiento</label>                                                                                                  
                                    <div class="col-sm-4"> 
                                        <input wire:model="fecha_nac" class="form-control" type="date" value="" id="fechanac">
                                    </div>
                                    <label for="extension" class="col-sm-2 col-form-label">Sexo</label>
                                    <div class="col-sm-4" >
                                        <select wire:model="sexo" name="med" id="SEXO" class="form-control">
                                            <option value="0">GENERO</option>
                                            <option value="MASCULINO">MASCULINO</option>
                                            <option value="FEMENINO">FEMENINO</option>
                                    </select>
                                    </div>                                                  
                                </div>                                                
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-4">
                                        <input wire:model="email" class="form-control" type="email" value="" id="email">
                                    </div>                             
                                        <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                                        <div class="col-sm-4">
                                            <input wire:model="telefono" class="form-control" type="number" value="" id="telefono">
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label for="domicilio" class="col-sm-2 col-form-label">Domicilio</label>
                                    <div class="col-sm-4">
                                        <input wire:model="domicilio" class="form-control" type="text" value="" id="domicilio">
                                    </div>                              
                                    <label for="incorporacion" class="col-sm-2 col-form-label">Incorporacion</label>
                                    <div class="col-sm-4">
                                        <input wire:model="incorporacion" class="form-control" type="date" value="" id="incorporacion">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="item" class="col-sm-2 col-form-label">Item</label>
                                    <div class="col-sm-4">
                                        <input wire:model="item" class="form-control" type="number" value="" id="item">
                                    </div>
                                    <label for="docente" class="col-sm-2 col-form-label">Docente</label>
                                    <div class="col-sm-4">
                                        <input wire:model="docente" class="form-control" type="text" value="" id="docente">
                                    </div>                                                   
                                </div>   
                                <div class="form-group row">
                                    <label for="obs" class="col-sm-2 col-form-label">Observaciones</label>
                                    <div class="col-sm-10">
                                        <input wire:model="obs" class="form-control" type="textarea" value="" id="obs">
                                    </div>
                                                                                   
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Universidad</label>
                                    <div class="col-sm-9">                            
                                        <select wire:model="universidad"  id="UNIVERSIDAD" class="form-control">
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
                                  </div>                                                
                                  <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Grado Academico</label>
                                    <div class="col-sm-9">
                                        <select wire:model="grado" id="GRADO" class="form-control">
                                            <option value="0">GRADO ACADEMICO</option>
                                            <option value="ESPECIALISTA SAFCI">ESPECIALISTA SAFCI</option>
                                            <option value="MEDICO MGI">MEDICO GENERAL INTEGRAL</option>
                                            <option value="MEDICO GENERAL">MEDICO GENERAL</option>
                                            <option value="NO CORRESPONDE">NO CORRESPONDE</option>
                                       </select>
                                    </div>
                                  </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-sm-3 col-form-label" > Contraseña </label>
                                        <div class="col-sm-9">  
                                        <input wire:model="password" id="password" type="password" name="password" required autocomplete="new-password" />
                                        </div>
                                    </div>                                          
                            </div>
                          <!-- /.col -->
                        </div>  
                      </div>
                      <!-- /.tab-pane -->                     
                      <div class="tab-pane" id="educacion">                  
                        <div class="row">
                          <div class="col-12">
                             
                
                                {{-- <div class="form-group row">
                                    <label class="form-control" for="password_confirmation" class="col-sm-3 col-form-label">Confirmar Contraseña</label>
                                    <div class="col-sm-9">  
                                    <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
                                    </div>
                                </div>                                                                         --}}
                          </div>
                          <!-- /.col -->
                        </div>                                    
                      </div>
                      <!-- /.tab-pane -->
                      <div class="tab-pane" id="establecimiento">
                        <div class="row">
                          <div class="col-12">
                                                 
                            
                            {{-- <div class="form-group row">
                                <label for="municipio" class="col-md-2 col-form-label">Departamento*</label>
        
                                <div class="col-md-4">
                                    <select wire:model="selectedDepartamento" name="departamento" class="form-control" required>
                                        <option value="" class="text-primary">Escoja Departamento*</option>
                                        @foreach ($departamentos as $departamento)
                                            <option value="{{ $departamento->id }}">{{ $departamento->nom_departamento }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                             
                                @if (!is_null($selectedDepartamento))                 
        
                                <label for="municipio" class="col-md-2 col-form-label">Municipio*</label>
                                <div class="col-md-4">
                                    <select wire:model="selectedMunicipio" name="municipio" class="form-control" required>
                                        <option value="" class="text-primary">Escoja Municipio*</option>
                                        @foreach ($municipios as $municipio)
                                            <option value="{{ $municipio->id }}">{{ $municipio->nom_municipio }}</option>
                                        @endforeach
                                    </select>
                                </div>                           
                                
                                @endif                       
                            </div> --}}
                            
                            {{-- @if (!is_null($selectedMunicipio))
                            <div class="form-group row">
                           
                                <label for="establecimiento" class="col-md-2 col-form-label text-md-right">Establecimiento*</label>
                    
                                <div class="col-md-4">                            
                                    <select wire:model="selectedEstablecimiento" name="establecimiento" class="form-control" required>
                                        @if ($establecimientos->count() == 0)
                                            <option value="">-- Escoja EESS antes --</option>
                                        @endif
                                        @foreach ($establecimientos as $establecimiento)
                                            <option value="{{ $establecimiento->id }}">{{ $establecimiento->nom_establecimiento }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @endif --}}
                            
                          </div>
                          <!-- /.col -->
                        </div>                                        
                      </div>
                      <!-- /.tab-pane -->
      
                     
                    </div>
                    <!-- /.tab-content -->
                  </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Guardar</button>
            </div>
        </div>
    </div>
</div>