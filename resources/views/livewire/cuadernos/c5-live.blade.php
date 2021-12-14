<div>
    @if (session()->has('message'))
        <div class="flex mx-auto">
            <div class="alert alert-success">
                <span class="inline-block align-middle mr-8">
                <b class="capitalize">{{ __('Success') }}!</b> {{ session('message') }}
                </span>
                <button wire:click="clearFlash()"
                        class="float-right btn-xs btn btn-outline-success">
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
                <table width="100%" class="table table-sm table-bordered table-striped text-sm">
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

<th>APELLIDOSYNOMBRES
                            </th>

<th>SEXO
                            </th>

<th>FECHANAC
                            </th>

<th>ANOS
                            </th>

<th>MESES
                            </th>

<th>DIAS
                            </th>

<th>PESO
                            </th>

<th>TALLA
                            </th>

<th>TEMP
                            </th>

<th>FCAR
                            </th>

<th>FRESP
                            </th>

<th>PA
                            </th>

<th>INGRESO
                            </th>

<th>DXINGRESODES
                            </th>

<th>DXINGRESO
                            </th>

<th>CIRUGIAMED
                            </th>

<th>ANESTESIA
                            </th>

<th>DXEGRESODESC
                            </th>

<th>DXEGRESO
                            </th>

<th>FEGRESO
                            </th>

<th>ESTADIA
                            </th>

<th>CAMA
                            </th>

<th>TIPOEGRESO
                            </th>

<th>MORTALIDAD
                            </th>

<th>REFYCONTRAREF
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

 <td>{{ $row->apellidosynombres}}</td>

 <td>{{ $row->sexo}}</td>

 <td>{{ $row->fechanac}}</td>

 <td>{{ $row->anos}}</td>

 <td>{{ $row->meses}}</td>

 <td>{{ $row->dias}}</td>

 <td>{{ $row->peso}}</td>

 <td>{{ $row->talla}}</td>

 <td>{{ $row->temp}}</td>

 <td>{{ $row->fcar}}</td>

 <td>{{ $row->fresp}}</td>

 <td>{{ $row->pa}}</td>

 <td>{{ $row->ingreso}}</td>

 <td>{{ $row->dxingresodes}}</td>

 <td>{{ $row->dxingreso}}</td>

 <td>{{ $row->cirugiamed}}</td>

 <td>{{ $row->anestesia}}</td>

 <td>{{ $row->dxegresodesc}}</td>

 <td>{{ $row->dxegreso}}</td>

 <td>{{ $row->fegreso}}</td>

 <td>{{ $row->estadia}}</td>

 <td>{{ $row->cama}}</td>

 <td>{{ $row->tipoegreso}}</td>

 <td>{{ $row->mortalidad}}</td>

 <td>{{ $row->refycontraref}}</td>

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
                       <h5 class="modal-title" id="showFormLabel"> {{ $mode == 'create' ? 'Nuevo Registro' : 'Actualizar Registro ' }}</h5>
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
<div class='form-group'><label for='apellidosynombres'>Apellidosynombres</label><input type='text' class='form-control @error('apellidosynombres')  is-invalid @enderror' wire:model='apellidosynombres'>@error('apellidosynombres')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='sexo'>Sexo</label><input type='text' class='form-control @error('sexo')  is-invalid @enderror' wire:model='sexo'>@error('sexo')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='fechanac'>Fechanac</label><input type='text' class='form-control @error('fechanac')  is-invalid @enderror' wire:model='fechanac'>@error('fechanac')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='años'>Anos</label><input type='text' class='form-control @error('años')  is-invalid @enderror' wire:model='años'>@error('años')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='meses'>Meses</label><input type='text' class='form-control @error('meses')  is-invalid @enderror' wire:model='meses'>@error('meses')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='dias'>Dias</label><input type='text' class='form-control @error('dias')  is-invalid @enderror' wire:model='dias'>@error('dias')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='peso'>Peso</label><input type='text' class='form-control @error('peso')  is-invalid @enderror' wire:model='peso'>@error('peso')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='talla'>Talla</label><input type='text' class='form-control @error('talla')  is-invalid @enderror' wire:model='talla'>@error('talla')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='temp'>Temp</label><input type='text' class='form-control @error('temp')  is-invalid @enderror' wire:model='temp'>@error('temp')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='fcar'>Fcar</label><input type='text' class='form-control @error('fcar')  is-invalid @enderror' wire:model='fcar'>@error('fcar')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='fresp'>Fresp</label><input type='text' class='form-control @error('fresp')  is-invalid @enderror' wire:model='fresp'>@error('fresp')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='pa'>Pa</label><input type='text' class='form-control @error('pa')  is-invalid @enderror' wire:model='pa'>@error('pa')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='ingreso'>Ingreso</label><input type='text' class='form-control @error('ingreso')  is-invalid @enderror' wire:model='ingreso'>@error('ingreso')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='dxingresodes'>Dxingresodes</label><input type='text' class='form-control @error('dxingresodes')  is-invalid @enderror' wire:model='dxingresodes'>@error('dxingresodes')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='dxingreso'>Dxingreso</label><input type='text' class='form-control @error('dxingreso')  is-invalid @enderror' wire:model='dxingreso'>@error('dxingreso')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='cirugiamed'>Cirugiamed</label><input type='text' class='form-control @error('cirugiamed')  is-invalid @enderror' wire:model='cirugiamed'>@error('cirugiamed')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='anestesia'>Anestesia</label><input type='text' class='form-control @error('anestesia')  is-invalid @enderror' wire:model='anestesia'>@error('anestesia')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='dxegresodesc'>Dxegresodesc</label><input type='text' class='form-control @error('dxegresodesc')  is-invalid @enderror' wire:model='dxegresodesc'>@error('dxegresodesc')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='dxegreso'>Dxegreso</label><input type='text' class='form-control @error('dxegreso')  is-invalid @enderror' wire:model='dxegreso'>@error('dxegreso')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='fegreso'>Fegreso</label><input type='text' class='form-control @error('fegreso')  is-invalid @enderror' wire:model='fegreso'>@error('fegreso')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='estadia'>Estadia</label><input type='text' class='form-control @error('estadia')  is-invalid @enderror' wire:model='estadia'>@error('estadia')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='cama'>Cama</label><input type='text' class='form-control @error('cama')  is-invalid @enderror' wire:model='cama'>@error('cama')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tipoegreso'>Tipoegreso</label><input type='text' class='form-control @error('tipoegreso')  is-invalid @enderror' wire:model='tipoegreso'>@error('tipoegreso')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='mortalidad'>Mortalidad</label><input type='text' class='form-control @error('mortalidad')  is-invalid @enderror' wire:model='mortalidad'>@error('mortalidad')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='refycontraref'>Refycontraref</label><input type='text' class='form-control @error('refycontraref')  is-invalid @enderror' wire:model='refycontraref'>@error('refycontraref')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>

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
                           Esta seguro de eliminar el registro?
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
