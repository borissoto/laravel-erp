<div wire:ignore.self class="modal fade" id="eessCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
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
                    <label class="col-sm-2 col-form-label">Tipo</label>
                    <div class="col-sm-4">
                        <select id="TIPO" class="form-control">
                            <option value="0">Tipo de establecimiento</option>
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
                    </div>                   
                        <label  class="col-sm-2 col-form-label">Subsector</label>
                        <div class="col-sm-4">
                            <select id="subsector" class="form-control">
                                <option value="0">Sub-sector</option>
                                <option value="PUBLICO">PUBLICO</option>
                                <option value="SEGURIDAD SOCIAL(CAJAS)">SEGURIDAD SOCIAL(CAJAS)</option>
                                <option value="ORGANISMOS NO GUBERNAMENTALES">ORGANISMOS NO GUBERNAMENTALES</option>
                                <option value="ORGANISMOS PRIVADOS">ORGANISMOS PRIVADOS</option>
                                <option value="FF.AA. DE LA NACION">FF.AA. DE LA NACION</option>
                                <option value="IGLESIA">IGLESIA</option>
                                <option value="POLICIA NACIONAL">POLICIA NACIONAL</option>
                                <option value="UNIVERSIDAD">UNIVERSIDAD</option>
                             </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nombre </label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" value="" >
                        </div>                   
                        <label  class="col-sm-2 col-form-label">Ambito</label>
                        <div class="col-sm-4">
                            <select id="AMBITO" class="form-control" required>
                                <option value="0">Ambito</option>
                                <option value="R">RURAL</option>
                                <option value="U">URBANO</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Dependencia</label>
                        <div class="col-sm-4">
                            <select id="DEPENDENCIA" class="form-control">
                                <option value="0">Financiamiento del establecimiento</option>
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
                        </div>                
                        <label  class="col-sm-2 col-form-label">Nivel</label>
                        <div class="col-sm-4">
                            <select id="NIVEL" class="form-control">
                                <option value=0>Nivel de atencion</option>
                                <option value="1er NIVEL">1er NIVEL</option>
                                <option value="2do NIVEL">2do NIVEL</option>
                                <option value="3er NIVEL">3er NIVEL</option>
                                <option value="NA">NO CORRESPONDE</option>
                            </select>
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Codigo SNIS</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" value="">
                        </div>                   
                        <label  class="col-sm-2 col-form-label">Soaps</label>
                        <div class="col-sm-4">
                            <select id="SOAPS" class="form-control">
                                <option value="0">Seleccione version SOAPS</option>
                                <option value="NO CUENTA CON SOAPS">NO CUENTA CON SOAPS</option>
                                <option value="NO CORRESPONDE">NO CORRESPONDE</option>
                                <option value="SOAPS V.4.0.1">SOAPS V.4.0.1</option>
                                <option value="SOAPS V.5.0.0">SOAPS V.5.0.0</option>
                                <option value="SOAPS V.5.0.1">SOAPS V.5.0.1</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Latitud</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="lat" id="lat" wire:model="lat" placeholder=" Arrastre el marcador Rojo" min="-9.662687" max="-22.908152" title="Debe ingresar latitud correspondiente a Bolivia" disabled>
                        </div>
                        <label class="col-md-2 col-form-label">Longitud</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="long" id="long" wire:model="long"  placeholder="Arrastre el marcador Rojo" min="-57.452675" max="-69.626293" title="Debe ingresar Longitud correspondiente a Bolivia" disabled>
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
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Guardar</button>
            </div>
        </div>
    </div>
</div>