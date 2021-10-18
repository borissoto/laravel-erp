<div wire:ignore.self class="modal fade" id="eessCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Establecimiento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
                <form >                  
                    
                    <div class="form-group row">
                        <label for="municipio" class="col-md-2 col-form-label col-form-label-sm">Departamento</label>

                        <div class="col-md-4">
                            <select wire:model="selectedDepartamento" name="departamento" class="form-control form-control-sm" required>
                                <option value="" class="text-primary">-Escoja Departamento-</option>
                                @foreach ($departamentos as $departamento)
                                    <option value="{{ $departamento->id }}">{{ $departamento->nom_departamento }}</option>
                                @endforeach
                            </select>
                        </div>                                       
                                     
                    @if (!is_null($selectedDepartamento))                                     
                    
                        <label for="municipio" class="col-md-2 col-form-label col-form-label-sm">Municipio</label>
                        <div class="col-md-4">
                            <select wire:model="adm_municipio_id" name="municipio" class="form-control form-control-sm" required>
                                <option value="" class="text-primary">-Escoja Municipio-</option>
                                @foreach ($municipios as $municipio)
                                    <option value="{{ $municipio->id }}">{{ $municipio->nom_municipio }}</option>
                                @endforeach
                            </select>
                            @error('adm_municipio_id') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                        </div>                         
                    @endif     
                        
                    </div>                    
                                                                  
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label col-form-label-sm">Tipo</label>
                    <div class="col-sm-4">
                        <select wire:model="tipo" id="TIPO" class="form-control form-control-sm">
                            <option value="">-Tipo de establecimiento-</option>
                            <option value="CENTRO DE SALUD AMBULATORIO">CENTRO DE SALUD AMBULATORIO</option>
                            <option value="CENTRO DE SALUD CON INTERNACION">CENTRO DE SALUD CON INTERNACION</option>
                            <option value="CENTRO DE SALUD INTEGRAL">CENTRO DE SALUD INTEGRAL</option>
                            <option value="CONSULTORIO VECINAL">CONSULTORIO VECINAL</option>
                            <option value="PUESTO DE SALUD">PUESTO DE SALUD</option>
                            <option value="HOSPITAL DE SEGUNDO NIVEL">HOSPITAL DE SEGUNDO NIVEL</option>
                            <option value="HOSPITAL DE TERCER NIVEL">HOSPITAL DE TERCER NIVEL</option>
                            <option value="CENTRO DE AISLAMIENTO">CENTRO DE AISLAMIENTO</option>
                            <option value="ATENCION POR BRIGADA MOVIL">ATENCION POR BRIGADA MOVIL</option>
                            <option value="OFICINA DE COORDINACION">OFICINA DE COORDINACION</option>
                          </select>
                          @error('tipo') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                    </div>                   
                        <label  class="col-sm-2 col-form-label col-form-label-sm">Subsector</label>
                        <div class="col-sm-4">
                            <select wire:model="subsector" id="subsector" class="form-control form-control-sm">
                                <option value="0">-Sub-sector-</option>
                                <option value="PUBLICO">PUBLICO</option>
                                <option value="SEGURIDAD SOCIAL(CAJAS)">SEGURIDAD SOCIAL(CAJAS)</option>
                                <option value="ORGANISMOS NO GUBERNAMENTALES">ORGANISMOS NO GUBERNAMENTALES</option>
                                <option value="ORGANISMOS PRIVADOS">ORGANISMOS PRIVADOS</option>
                                <option value="FF.AA. DE LA NACION">FF.AA. DE LA NACION</option>
                                <option value="IGLESIA">IGLESIA</option>
                                <option value="POLICIA NACIONAL">POLICIA NACIONAL</option>
                                <option value="UNIVERSIDAD">UNIVERSIDAD</option>
                             </select>
                             @error('subsector') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label col-form-label-sm">Nombre </label>
                        <div class="col-sm-4">
                            <input wire:model="nom_establecimiento" class="form-control form-control-sm" type="text" value="" >
                            @error('nom_establecimiento') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                        </div>                   
                        <label  class="col-sm-2 col-form-label col-form-label-sm">Ambito</label>
                        <div class="col-sm-4">
                            <select wire:model="ambito" id="AMBITO" class="form-control form-control-sm" required>
                                <option value="0">-Ambito-</option>
                                <option value="R">RURAL</option>
                                <option value="U">URBANO</option>
                            </select>
                            @error('ambito') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label col-form-label-sm">Dependencia</label>
                        <div class="col-sm-4">
                            <select wire:model="dependencia" id="dependencia" class="form-control form-control-sm">
                                <option value="0">-Financiamiento del establecimiento-</option>
                                <option value="MINISTERIO DE SALUD">MINISTERIO DE SALUD</option>
                                <option value="GOBERNACION">GOBERNACION</option>
                                <option value="ALCALDIA MUNICIPAL">H. ALCALDÍA MUNICIPAL</option>
                                <option value="IGLESIA CATOLICA">IGLESIA CATOLICA</option>
                                <option value="UNIVERSIDAD">UNIVERSIDAD</option>
                                <option value="POLICIA NACIONAL">POLICIA NACIONAL</option>
                                <option value="OTRAS ONGS">OTRAS ONGS</option>                                
                                <option value="C.I.E.S.">C.I.E.S.</option>
                                <option value="IGLESIA NO CATOLICA"> IGLESIA NO CATOLICA</option>
                                <option value="ARMADA">ARMADA</option>
                                <option value="CEMES">CEMES</option>
                                <option value="UNICEF-IGLESIA">UNICEF-IGLESIA</option>
                                <option value="CABILDO INDIGENAL">CABILDO INDIGENAL</option>
                            </select>
                            @error('dependencia') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                        </div>                
                        <label  class="col-sm-2 col-form-label col-form-label-sm">Nivel</label>
                        <div class="col-sm-4">
                            <select wire:model="nivel" id="nivel" class="form-control form-control-sm">
                                <option value=0>-Nivel de atencion-</option>
                                <option value="1er NIVEL">1er NIVEL</option>
                                <option value="2do NIVEL">2do NIVEL</option>
                                <option value="3er NIVEL">3er NIVEL</option>
                                <option value="NA">NO CORRESPONDE</option>
                            </select>
                            @error('nivel') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label col-form-label-sm">Codigo SNIS</label>
                        <div class="col-sm-4">
                            <input wire:model="codsnis" class="form-control form-control-sm" type="text" value="">
                            @error('codsnis') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                        </div>                   
                        <label  class="col-sm-2 col-form-label col-form-label-sm">Soaps</label>
                        <div class="col-sm-4">
                            <select wire:model="soaps" id="soaps" class="form-control form-control-sm">
                                <option value="0">-Seleccione version SOAPS-</option>
                                <option value="NO CUENTA CON SOAPS">NO CUENTA CON SOAPS</option>
                                <option value="NO CORRESPONDE">NO CORRESPONDE</option>
                                <option value="SOAPS V.4.0.1">SOAPS V.4.0.1</option>
                                <option value="SOAPS V.5.0.0">SOAPS V.5.0.0</option>
                                <option value="SOAPS V.5.0.1">SOAPS V.5.0.1</option>
                            </select>
                            @error('soaps') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label col-form-label-sm">Latitud</label>
                        <div class="col-md-4">
                            <input wire:model="lat" type="text" class="form-control form-control-sm" name="lat" id="lat"  placeholder=" Arrastre el marcador Rojo" min="-9.662687" max="-22.908152" title="Debe ingresar latitud correspondiente a Bolivia" disabled>
                            
                        </div>
                        <label class="col-md-2 col-form-label col-form-label-sm">Longitud</label>
                        <div class="col-md-4">
                            <input wire:model="long" type="text" class="form-control form-control-sm" name="long" id="long" placeholder="Arrastre el marcador Rojo" min="-57.452675" max="-69.626293" title="Debe ingresar Longitud correspondiente a Bolivia" disabled>
                            
                        </div>
                    </div>
                    <div class="formgroup" wire:ignore>
                        <div id="gmap" style="width: 100%; height: 250px;"></div>
                        <span class="text-sm text-info">Arrastre el marcador rojo para seleccionar la ubicacion de la comunidad</span>
                    </div>                                                                          
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="storeEstablecimiento()" class="btn btn-primary close-modal">Guardar</button>
            </div>
        </div>
    </div>
</div>