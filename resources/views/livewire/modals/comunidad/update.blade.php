<div wire:ignore.self class="modal fade" id="comunidadUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true close-btn">×</span>
              </button>
          </div>
         <div class="modal-body">
            <form >                                    
                    
                <div class="form-group row">
                    <label for="municipio" class="col-md-2 col-form-label col-form-label-sm">Departamento*</label>

                    <div class="col-md-4">
                        <select wire:model="selectedDepartamento" name="departamento" class="form-control form-control-sm" required>
                            <option value="" class="text-primary">Escoja Departamento*</option>
                            @foreach ($departamentos as $departamento)
                                <option value="{{ $departamento->id }}">{{ $departamento->nom_departamento }}</option>
                            @endforeach
                        </select>
                    </div>
                                 
                    @if (!is_null($selectedDepartamento))                 

                    <label for="municipio" class="col-md-2 col-form-label col-form-label-sm">Municipio*</label>
                    <div class="col-md-4">
                        <select wire:model="selectedMunicipio" name="municipio" class="form-control form-control-sm" required>
                            <option value="" class="text-primary">Escoja Municipio*</option>
                            @foreach ($municipios as $municipio)
                                <option value="{{ $municipio->id }}">{{ $municipio->nom_municipio }}</option>
                            @endforeach
                        </select>
                    </div>                           
                    
                    @endif                       
                </div>
                
                @if (!is_null($selectedMunicipio))
                <div class="form-group row">
               
                    <label for="establecimiento" class="col-md-2 col-form-label col-form-label-sm text-md-right">Establecimiento*</label>
        
                    <div class="col-md-4">                            
                        <select wire:model="selectedEstablecimiento" name="establecimiento" class="form-control form-control-sm" required>
                            @if ($establecimientos->count() == 0)
                                <option value="">-- Escoja EESS antes --</option>
                            @endif
                            @foreach ($establecimientos as $establecimiento)
                                <option value="{{ $establecimiento->id }}">{{ $establecimiento->nom_establecimiento }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @endif
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label col-form-label-sm">Comunidad</label>
                    <div class="col-md-4">                            
                    <input class="form-control form-control-sm" type="text" id="nombre" wire:model="nom_comunidad" placeholder="Nombre de la comunidad" >
                    @error('nom_comunidad') <span class="text-danger text-sm error">{{ $message }}</span>@enderror
                    </div>

                    <label class="col-md-2 col-form-label col-form-label-sm">Piocs</label>
                    <div class="col-md-4">                        
                    <select wire:model="pioc" class="form-control form-control-sm"> 
                        <option value="">¿Es un Pueblo IOC?</option>
                        <option value="PIOC">SI</option>                           
                        <option value="NO">NO</option>                           
                    </select>
                    @error('pioc') <span class="text-sm text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>                                                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label col-form-label-sm">Nacion</label>
                    <div class="col-md-4">
                    <select wire:model="nacion" id="PUEBLOS" class="form-control form-control-sm">                            
                        <option value="Yuracaré">Yuracaré</option>
                        <option value="Mojeño trinitario">Mojeño trinitario</option>
                        <option value="Yuracaré">Yuracaré</option>
                        <option value="Yuki (o yuqui)">Yuki (o yuqui)</option>
                        <option value="Yaminahua (o yaminagua)">Yaminahua (o yaminagua)</option>
                        <option value="Weenhayek">Weenhayek</option>
                        <option value="Tapiete">Tapiete</option>
                        <option value="Tacana">Tacana</option>
                        <option value="Sirionó">Sirionó</option>
                        <option value="Pacahuara">Pacahuara</option>
                        <option value="Murato (o uro-murato)">Murato (o uro-murato)</option>
                        <option value="Movima">Movima</option>
                        <option value="Mosetén">Mosetén</option>
                        <option value="Moré">Moré</option>
                        <option value="Mojeño">Mojeño</option>
                        <option value="Maropa (o reyesano)">Maropa (o reyesano)</option>
                        <option value="Machineri">Machineri</option>
                        <option value="Leco">Leco</option>
                        <option value="Kallawaya">Kallawaya</option>
                        <option value="Joaquiniano">Joaquiniano</option>
                        <option value="Itonama">Itonama</option>
                        <option value="Guarayo">Guarayo</option>
                        <option value="Guarasugwe">Guarasugwe</option>
                        <option value="Guaraní o chiriguano (ava, simba e isoceño)">Guaraní o chiriguano (ava, simba e isoceño)</option>
                        <option value="Ese'ejja">Ese'ejja</option>
                        <option value="Chiquitano">Chiquitano</option>
                        <option value="Chipaya (o uro-chipaya)">Chipaya (o uro-chipaya)</option>
                        <option value="Chimán (t'simán o tsimane)">Chimán (t'simán o tsimane)</option>
                        <option value="Chácobo">Chácobo</option>
                        <option value="Cayubaba">Cayubaba</option>
                        <option value="Cavineño">Cavineño</option>
                        <option value="Canichana">Canichana</option>
                        <option value="Baure">Baure</option>
                        <option value="Ayoreo">Ayoreo</option>
                        <option value="Araona">Araona</option>
                        <option value="Afrobolivianos">Afrobolivianos</option>
                        <option value="OTROS">OTROS</option>
                    </select>
                    @error('nacion') <span class="text-danger text-sm error">{{ $message }}</span>@enderror
                    </div>

                    <label class="col-md-2 col-form-label col-form-label-sm">Poblacion</label>
                    <div class="col-md-4">
                    <input class="form-control form-control-sm" type="number" id="habitantes" wire:model="habitantes" placeholder="Nro de habitantes">
                    @error('habitantes') <span class="text-danger text-sm error">{{ $message }}</span>@enderror
                    </div>
                </div>                                                                                                               
                <div class="form-group row">
                    <label class="col-md-2 col-form-label col-form-label-sm">Familias</label>
                    <div class="col-md-4">
                    <input class="form-control form-control-sm" type="number" id="familias" wire:model="familias" placeholder="Nro de Familias">
                    @error('familias') <span class="text-danger text-sm error">{{ $message }}</span>@enderror
                    </div>

                    <label class="col-md-2 col-form-label col-form-label-sm">Carpetizacion</label>
                    <div class="col-md-4">
                    <input class="form-control form-control-sm" type="number" id="carpetizacion" wire:model="carpetizacion" placeholder="Porcentaje de Carpetizacion">
                    @error('carpetizacion') <span class="text-danger text-sm error">{{ $message }}</span>@enderror
                    </div>
                </div>                                                                                                             
                <div class="form-group row">
                    <label class="col-md-2 col-form-label col-form-label-sm">Tiempo Viaje</label>
                    <div class="col-md-4">
                    <input class="form-control form-control-sm" type="text" id="tiempo" wire:model="tiempo_viaje" placeholder="Tiempo viaje desde EESS">
                    @error('tiempo_viaje') <span class="text-danger text-sm error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label col-form-label-sm">Latitud</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control form-control-sm" name="lat" id="lat" wire:model="lat" placeholder=" Arrastre el marcador Rojo" min="-9.662687" max="-22.908152" title="Debe ingresar latitud correspondiente a Bolivia" disabled>
                    </div>
                    <label class="col-md-2 col-form-label col-form-label-sm">Longitud</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control form-control-sm" name="long" id="long" wire:model="long"  placeholder="Arrastre el marcador Rojo" min="-57.452675" max="-69.626293" title="Debe ingresar Longitud correspondiente a Bolivia" disabled>
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
@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", ()=>{
            Livewire.hook('message.processed',(el, component)=>{
                var getLat = @this.lat;
                var getLong = @this.long;
                console.log(getLat+' '+getLong);

                var lati = getLat;
                var longi = getLong;
    
                var latlong = new google.maps.LatLng(lati,longi);

                let options2 = {
                    zoom: 14,
                    center: latlong,        
                }

                var mapEdit = document.getElementById('gmapEdit');
                const mapaEdit = new google.maps.Map(mapEdit, options2);

                var marker = new google.maps.Marker(
                { 
                    position: latlong,
                    map: mapaEdit,
                    title: "Editar Ubicacion",
                    draggable: true,
                    animation: google.maps.Animation.DROP,
                });

                google.maps.event.addListener(marker, 'dragend', function (evt) {
                    $("#latEdit").prop('value',evt.latLng.lat().toFixed(6));
                    $("#longEdit").prop('value', evt.latLng.lng().toFixed(6));
                    
                    // var latitud = document.getElementById('latEdit');
                    // latitud.dispatchEvent(new Event('input'));
                    
                    // var longitud = document.getElementById('longEdit');
                    // longitud.dispatchEvent(new Event('input'));
                });

            })
        });
    </script>
@endsection