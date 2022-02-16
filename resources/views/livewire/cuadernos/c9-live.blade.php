<div>
    @if (session()->has('message'))
        <div class="flex mx-auto">
            <div class="alert alert-success">
                <span class="inline-block align-middle mr-8">
                <b class="capitalize">{{ __('Success') }}!</b> {{ session('message') }}
                </span>
                <button wire:click="clearFlash()"
                        class="float-right btn-xs btn btn-outline-light">
                    <span>×</span>
                </button>
            </div>
        </div>
    @endif
    <div>
        <div class="row">
            <div class="col-md-3">
                <input wire:model="search"
                       class="form-control"
                       id="search" type="text" name="search" wire:model="search" required="required"
                       autofocus="autofocus"/>
            </div>
            <div class="col-md-9 float-right">
                <button type="button"
                        class="btn btn-primary float-right"
                        wire:click="create">
                   {{ __('Nuevo Registro') }}
                </button>
            </div>
        </div>
    </div>
    <div class="flex row card">
            <div class="card-body">
                <table width="100%" class="table text-sm table-sm table-bordered table-striped ">
                    <thead>
                    <tr>

                        <th>EESS
                            </th>

<th>MEDICO
                            </th>

<th>FECHA
                            </th>

<th>HCLIN
                            </th>

<th>ASEGURADO
                            </th>

<th>APELLIDOSYNOMBRE
                            </th>

<th>VISITASFAMILIARES
                            </th>

<th>OTROS
                            </th>

<th>PROMOTORES
                            </th>

<th>DIRIGENTES
                            </th>

<th>ADULTOS
                            </th>

<th>JOVENES
                            </th>

<th>ESCOLARES
                            </th>

<th>REUNIONESLUGAR
                            </th>

<th>TEMAACTIVIDAD
                            </th>

<th>ACTIVIDADEDUCATIVA
                            </th>

<th>FERIA
                            </th>

<th>RALS
                            </th>

<th>RCLSALUD
                            </th>

<th>COMUNIDADESCAI
                            </th>

<th>OTRO
                            </th>

<th>ODONTOLOGO
                            </th>

<th>AUXILIAR
                            </th>

<th>ENFERMERAS
                            </th>

<th>MEDICOS
                            </th>

<th>DURACIONSUPERVISION
                            </th>

<th>LUGAR
                            </th>

<th>CAPACITACION
                            </th>

<th>SUPERVISION1
                            </th>

<th>ACOMUNIDAD
                            </th>

<th>FAMILIASNUEVASCARPETIZADAS
                            </th>

<th>CARPETIZADASCONSEGUIMIENTO
                            </th>

<th>CAI
                            </th>

<th>SUPERVISION
                            </th>

<th>AUDITORIASINT
                            </th>

<th>AUTOEVALUACIONES
                            </th>

<th>QUEJASUSUARIOS
                            </th>

<th>SUGERENCIASAGRADECIMIENTOS
                            </th>

<th>VISITASFAMILIARESPLANIFICADAS
                            </th>

<th>MUERTEMATERNADENTRO
                            </th>

<th>MUERTEMATERNAFUERA
                            </th>



                        <th scope="col">
                            <span class="sr-only">Actions</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($rows as $row)
<tr> <td>{{ $row->establecimiento}}</td>

 <td>{{ $row->medico}}</td>

 <td>{{ $row->fecha}}</td>

 <td>{{ $row->hclin}}</td>

 <td>{{ $row->asegurado}}</td>

 <td>{{ $row->apellidosynombre}}</td>

 <td>{{ $row->visitasfamiliares}}</td>

 <td>{{ $row->otros}}</td>

 <td>{{ $row->promotores}}</td>

 <td>{{ $row->dirigentes}}</td>

 <td>{{ $row->adultos}}</td>

 <td>{{ $row->jovenes}}</td>

 <td>{{ $row->escolares}}</td>

 <td>{{ $row->reunioneslugar}}</td>

 <td>{{ $row->temaactividad}}</td>

 <td>{{ $row->actividadeducativa}}</td>

 <td>{{ $row->feria}}</td>

 <td>{{ $row->rals}}</td>

 <td>{{ $row->rclsalud}}</td>

 <td>{{ $row->comunidadescai}}</td>

 <td>{{ $row->otro}}</td>

 <td>{{ $row->odontologo}}</td>

 <td>{{ $row->auxiliar}}</td>

 <td>{{ $row->enfermeras}}</td>

 <td>{{ $row->medicos}}</td>

 <td>{{ $row->duracionsupervision}}</td>

 <td>{{ $row->lugar}}</td>

 <td>{{ $row->capacitacion}}</td>

 <td>{{ $row->supervision1}}</td>

 <td>{{ $row->acomunidad}}</td>

 <td>{{ $row->familiasnuevascarpetizadas}}</td>

 <td>{{ $row->carpetizadasconseguimiento}}</td>

 <td>{{ $row->cai}}</td>

 <td>{{ $row->supervision}}</td>

 <td>{{ $row->auditoriasint}}</td>

 <td>{{ $row->autoevaluaciones}}</td>

 <td>{{ $row->quejasusuarios}}</td>

 <td>{{ $row->sugerenciasagradecimientos}}</td>

 <td>{{ $row->visitasfamiliaresplanificadas}}</td>

 <td>{{ $row->muertematernadentro}}</td>

 <td>{{ $row->muertematernafuera}}</td>

<td>
                                <a href="#" class="text-primary" wire:click.prevent="edit({{ $row->id }})">
<svg xmlns="http://www.w3.org/2000/svg" style="width:20px; height: 20px;" viewBox="0 0 20 20" fill="currentColor">
  <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
  <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
</svg>
</a>
                                <a href="#" class="text-danger" wire:click.prevent="confirmDelete({{ $row->id }})"> <svg xmlns="http://www.w3.org/2000/svg" style="width:20px; height: 20px;" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg></a>
                            </td></tr>@empty  <tr><td>No Existen Registros</td></tr>   @endforelse

                    </tbody>
                </table>
                <div class="p-2">
                    {{ $rows->links() }}
                </div>
        </div>


    </div>


    {{--    create / edit form --}}

       <div class="modal fade" wire:ignore.self id="showForm" tabindex="-1" role="dialog" aria-labelledby="showFormLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="showFormLabel"> {{ $mode == 'create' ? 'Nuevo Registro' : 'Actualizar Registro' }}</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                        <div class='form-group'><label for='establecimiento'>Establecimiento</label><input type='text' class='form-control @error('establecimiento')  is-invalid @enderror' wire:model='establecimiento'>@error('establecimiento')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='medico'>Medico</label><input type='text' class='form-control @error('medico')  is-invalid @enderror' wire:model='medico'>@error('medico')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='fecha'>Fecha</label><input type='text' class='form-control @error('fecha')  is-invalid @enderror' wire:model='fecha'>@error('fecha')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='hclin'>Hclin</label><input type='text' class='form-control @error('hclin')  is-invalid @enderror' wire:model='hclin'>@error('hclin')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='asegurado'>Asegurado</label><input type='text' class='form-control @error('asegurado')  is-invalid @enderror' wire:model='asegurado'>@error('asegurado')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='apellidosynombre'>Apellidosynombre</label><input type='text' class='form-control @error('apellidosynombre')  is-invalid @enderror' wire:model='apellidosynombre'>@error('apellidosynombre')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='visitasfamiliares'>Visitasfamiliares</label><input type='text' class='form-control @error('visitasfamiliares')  is-invalid @enderror' wire:model='visitasfamiliares'>@error('visitasfamiliares')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='otros'>Otros</label><input type='text' class='form-control @error('otros')  is-invalid @enderror' wire:model='otros'>@error('otros')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='promotores'>Promotores</label><input type='text' class='form-control @error('promotores')  is-invalid @enderror' wire:model='promotores'>@error('promotores')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='dirigentes'>Dirigentes</label><input type='text' class='form-control @error('dirigentes')  is-invalid @enderror' wire:model='dirigentes'>@error('dirigentes')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='adultos'>Adultos</label><input type='text' class='form-control @error('adultos')  is-invalid @enderror' wire:model='adultos'>@error('adultos')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='jovenes'>Jovenes</label><input type='text' class='form-control @error('jovenes')  is-invalid @enderror' wire:model='jovenes'>@error('jovenes')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='escolares'>Escolares</label><input type='text' class='form-control @error('escolares')  is-invalid @enderror' wire:model='escolares'>@error('escolares')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='reunioneslugar'>Reunioneslugar</label><input type='text' class='form-control @error('reunioneslugar')  is-invalid @enderror' wire:model='reunioneslugar'>@error('reunioneslugar')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='temaactividad'>Temaactividad</label><input type='text' class='form-control @error('temaactividad')  is-invalid @enderror' wire:model='temaactividad'>@error('temaactividad')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='actividadeducativa'>Actividadeducativa</label><input type='text' class='form-control @error('actividadeducativa')  is-invalid @enderror' wire:model='actividadeducativa'>@error('actividadeducativa')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='feria'>Feria</label><input type='text' class='form-control @error('feria')  is-invalid @enderror' wire:model='feria'>@error('feria')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='rals'>Rals</label><input type='text' class='form-control @error('rals')  is-invalid @enderror' wire:model='rals'>@error('rals')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='rclsalud'>Rclsalud</label><input type='text' class='form-control @error('rclsalud')  is-invalid @enderror' wire:model='rclsalud'>@error('rclsalud')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='comunidadescai'>Comunidadescai</label><input type='text' class='form-control @error('comunidadescai')  is-invalid @enderror' wire:model='comunidadescai'>@error('comunidadescai')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='otro'>Otro</label><input type='text' class='form-control @error('otro')  is-invalid @enderror' wire:model='otro'>@error('otro')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='odontologo'>Odontologo</label><input type='text' class='form-control @error('odontologo')  is-invalid @enderror' wire:model='odontologo'>@error('odontologo')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='auxiliar'>Auxiliar</label><input type='text' class='form-control @error('auxiliar')  is-invalid @enderror' wire:model='auxiliar'>@error('auxiliar')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='enfermeras'>Enfermeras</label><input type='text' class='form-control @error('enfermeras')  is-invalid @enderror' wire:model='enfermeras'>@error('enfermeras')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='medicos'>Medicos</label><input type='text' class='form-control @error('medicos')  is-invalid @enderror' wire:model='medicos'>@error('medicos')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='duracionsupervision'>Duracionsupervision</label><input type='text' class='form-control @error('duracionsupervision')  is-invalid @enderror' wire:model='duracionsupervision'>@error('duracionsupervision')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='lugar'>Lugar</label><input type='text' class='form-control @error('lugar')  is-invalid @enderror' wire:model='lugar'>@error('lugar')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='capacitacion'>Capacitacion</label><input type='text' class='form-control @error('capacitacion')  is-invalid @enderror' wire:model='capacitacion'>@error('capacitacion')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='supervision1'>Supervision1</label><input type='text' class='form-control @error('supervision1')  is-invalid @enderror' wire:model='supervision1'>@error('supervision1')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='acomunidad'>Acomunidad</label><input type='text' class='form-control @error('acomunidad')  is-invalid @enderror' wire:model='acomunidad'>@error('acomunidad')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='familiasnuevascarpetizadas'>Familiasnuevascarpetizadas</label><input type='text' class='form-control @error('familiasnuevascarpetizadas')  is-invalid @enderror' wire:model='familiasnuevascarpetizadas'>@error('familiasnuevascarpetizadas')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='carpetizadasconseguimiento'>Carpetizadasconseguimiento</label><input type='text' class='form-control @error('carpetizadasconseguimiento')  is-invalid @enderror' wire:model='carpetizadasconseguimiento'>@error('carpetizadasconseguimiento')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='cai'>Cai</label><input type='text' class='form-control @error('cai')  is-invalid @enderror' wire:model='cai'>@error('cai')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='supervision'>Supervision</label><input type='text' class='form-control @error('supervision')  is-invalid @enderror' wire:model='supervision'>@error('supervision')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='auditoriasint'>Auditoriasint</label><input type='text' class='form-control @error('auditoriasint')  is-invalid @enderror' wire:model='auditoriasint'>@error('auditoriasint')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='autoevaluaciones'>Autoevaluaciones</label><input type='text' class='form-control @error('autoevaluaciones')  is-invalid @enderror' wire:model='autoevaluaciones'>@error('autoevaluaciones')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='quejasusuarios'>Quejasusuarios</label><input type='text' class='form-control @error('quejasusuarios')  is-invalid @enderror' wire:model='quejasusuarios'>@error('quejasusuarios')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='sugerenciasagradecimientos'>Sugerenciasagradecimientos</label><input type='text' class='form-control @error('sugerenciasagradecimientos')  is-invalid @enderror' wire:model='sugerenciasagradecimientos'>@error('sugerenciasagradecimientos')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='visitasfamiliaresplanificadas'>Visitasfamiliaresplanificadas</label><input type='text' class='form-control @error('visitasfamiliaresplanificadas')  is-invalid @enderror' wire:model='visitasfamiliaresplanificadas'>@error('visitasfamiliaresplanificadas')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='muertematernadentro'>Muertematernadentro</label><input type='text' class='form-control @error('muertematernadentro')  is-invalid @enderror' wire:model='muertematernadentro'>@error('muertematernadentro')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='muertematernafuera'>Muertematernafuera</label><input type='text' class='form-control @error('muertematernafuera')  is-invalid @enderror' wire:model='muertematernafuera'>@error('muertematernafuera')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>

                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                       <button type="button" @if($mode == 'create') wire:click="store()" @else wire:click="update()" @endif  class="btn btn-primary">
                         {{ $mode == 'create' ? 'Guardar' : 'Actualizar' }}
                       </button>
                   </div>
               </div>
           </div>
       </div>
    {{--    /create /edit form--}}


    {{--    delete popup--}}
    <div wire:ignore>
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                           Esta segur@ de eliminar el registro?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" wire:click="destroy()" class="btn btn-danger">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{--    /delete popup--}}
</div>
