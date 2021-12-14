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
                <table  class="table table-sm table-bordered table-striped text-sm" style="font-size: 7rem">
                    <thead>
                    <tr>

                        <th>EESS</th>
                        <th>MEDICO</th>
                        <th>FECHA</th>
                        <th>HCLIN</th>
                        <th>NOASEGURADO</th>
                        <th>APELLIDOSYNOMBRE</th>
                        <th>SEXO</th>
                        <th>NACIMIENTO</th>
                        <th>ANOS</th>
                        <th>MESES</th>
                        <th>DIAS</th>
                        <th>CONSULTA</th>
                        <th>PESO</th>

<th>TALLA
                            </th>

<th>TEMP
                            </th>

<th>FCARD
                            </th>

<th>FRESP
                            </th>

<th>PRESART
                            </th>

<th>NUTRICION
                            </th>

<th>MOTIVO
                            </th>

<th>EXFIS
                            </th>

<th>INYECTA
                            </th>

<th>SUEROS
                            </th>

<th>SUTURAS
                            </th>

<th>OTRASACT
                            </th>

<th>DXDESC
                            </th>

<th>DXPRIN
                            </th>

<th>TTO
                            </th>

<th>MORTALIDAD
                            </th>

<th>REFERENCIAS
                            </th>

<th>REFERIDO
                            </th>

<th>REFERIDOA
                            </th>

<th>MAYOR60
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

 <td>{{ $row->noasegurado}}</td>

 <td>{{ $row->apellidosynombre}}</td>

 <td>{{ $row->sexo}}</td>

 <td>{{ $row->nacimiento}}</td>

 <td>{{ $row->anos}}</td>

 <td>{{ $row->meses}}</td>

 <td>{{ $row->dias}}</td>

 <td>{{ $row->consulta}}</td>

 <td>{{ $row->peso}}</td>

 <td>{{ $row->talla}}</td>

 <td>{{ $row->temp}}</td>

 <td>{{ $row->fcard}}</td>

 <td>{{ $row->fresp}}</td>

 <td>{{ $row->presart}}</td>

 <td>{{ $row->nutricion}}</td>

 <td>{{ $row->motivo}}</td>

 <td>{{ $row->exfis}}</td>

 <td>{{ $row->inyecta}}</td>

 <td>{{ $row->sueros}}</td>

 <td>{{ $row->suturas}}</td>

 <td>{{ $row->otrasact}}</td>

 <td>{{ $row->dxdesc}}</td>

 <td>{{ $row->dxprin}}</td>

 <td>{{ $row->tto}}</td>

 <td>{{ $row->mortalidad}}</td>

 <td>{{ $row->referencias}}</td>

 <td>{{ $row->referido}}</td>

 <td>{{ $row->referidoa}}</td>

 <td>{{ $row->mayor60}}</td>

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
<div class='form-group'><label for='noasegurado'>Noasegurado</label><input type='text' class='form-control @error('noasegurado')  is-invalid @enderror' wire:model='noasegurado'>@error('noasegurado')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='apellidosynombre'>Apellidosynombre</label><input type='text' class='form-control @error('apellidosynombre')  is-invalid @enderror' wire:model='apellidosynombre'>@error('apellidosynombre')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='sexo'>Sexo</label><input type='text' class='form-control @error('sexo')  is-invalid @enderror' wire:model='sexo'>@error('sexo')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='nacimiento'>Nacimiento</label><input type='text' class='form-control @error('nacimiento')  is-invalid @enderror' wire:model='nacimiento'>@error('nacimiento')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='años'>Anos</label><input type='text' class='form-control @error('años')  is-invalid @enderror' wire:model='años'>@error('años')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='meses'>Meses</label><input type='text' class='form-control @error('meses')  is-invalid @enderror' wire:model='meses'>@error('meses')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='dias'>Dias</label><input type='text' class='form-control @error('dias')  is-invalid @enderror' wire:model='dias'>@error('dias')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='consulta'>Consulta</label><input type='text' class='form-control @error('consulta')  is-invalid @enderror' wire:model='consulta'>@error('consulta')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='peso'>Peso</label><input type='text' class='form-control @error('peso')  is-invalid @enderror' wire:model='peso'>@error('peso')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='talla'>Talla</label><input type='text' class='form-control @error('talla')  is-invalid @enderror' wire:model='talla'>@error('talla')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='temp'>Temp</label><input type='text' class='form-control @error('temp')  is-invalid @enderror' wire:model='temp'>@error('temp')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='fcard'>Fcard</label><input type='text' class='form-control @error('fcard')  is-invalid @enderror' wire:model='fcard'>@error('fcard')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='fresp'>Fresp</label><input type='text' class='form-control @error('fresp')  is-invalid @enderror' wire:model='fresp'>@error('fresp')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='presart'>Presart</label><input type='text' class='form-control @error('presart')  is-invalid @enderror' wire:model='presart'>@error('presart')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='nutricion'>Nutricion</label><input type='text' class='form-control @error('nutricion')  is-invalid @enderror' wire:model='nutricion'>@error('nutricion')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='motivo'>Motivo</label><input type='text' class='form-control @error('motivo')  is-invalid @enderror' wire:model='motivo'>@error('motivo')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='exfis'>Exfis</label><input type='text' class='form-control @error('exfis')  is-invalid @enderror' wire:model='exfis'>@error('exfis')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='inyecta'>Inyecta</label><input type='text' class='form-control @error('inyecta')  is-invalid @enderror' wire:model='inyecta'>@error('inyecta')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='sueros'>Sueros</label><input type='text' class='form-control @error('sueros')  is-invalid @enderror' wire:model='sueros'>@error('sueros')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='suturas'>Suturas</label><input type='text' class='form-control @error('suturas')  is-invalid @enderror' wire:model='suturas'>@error('suturas')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='otrasact'>Otrasact</label><input type='text' class='form-control @error('otrasact')  is-invalid @enderror' wire:model='otrasact'>@error('otrasact')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='dxdesc'>Dxdesc</label><input type='text' class='form-control @error('dxdesc')  is-invalid @enderror' wire:model='dxdesc'>@error('dxdesc')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='dxprin'>Dxprin</label><input type='text' class='form-control @error('dxprin')  is-invalid @enderror' wire:model='dxprin'>@error('dxprin')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tto'>Tto</label><input type='text' class='form-control @error('tto')  is-invalid @enderror' wire:model='tto'>@error('tto')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='mortalidad'>Mortalidad</label><input type='text' class='form-control @error('mortalidad')  is-invalid @enderror' wire:model='mortalidad'>@error('mortalidad')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='referencias'>Referencias</label><input type='text' class='form-control @error('referencias')  is-invalid @enderror' wire:model='referencias'>@error('referencias')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='referido'>Referido</label><input type='text' class='form-control @error('referido')  is-invalid @enderror' wire:model='referido'>@error('referido')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='referidoa'>Referidoa</label><input type='text' class='form-control @error('referidoa')  is-invalid @enderror' wire:model='referidoa'>@error('referidoa')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='mayor60'>Mayor60</label><input type='text' class='form-control @error('mayor60')  is-invalid @enderror' wire:model='mayor60'>@error('mayor60')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>

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
