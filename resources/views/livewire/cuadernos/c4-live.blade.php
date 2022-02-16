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

<th>NOASEGURADO
                            </th>

<th>APELLIDOSYNOMBRES
                            </th>

<th>SEXO
                            </th>

<th>NACIMIENTO
                            </th>

<th>ANOS
                            </th>

<th>MESES
                            </th>

<th>DIAS
                            </th>

<th>BJA
                            </th>

<th>PESO
                            </th>

<th>TALLA
                            </th>

<th>CONTROL
                            </th>

<th>PESOTALLA
                            </th>

<th>TALLAEDAD
                            </th>

<th>HIERRO
                            </th>

<th>VITAA
                            </th>

<th>ZINC
                            </th>

<th>MEBENDAZOL
                            </th>

<th>CONSELACT
                            </th>

<th>LACTANCIA
                            </th>

<th>CONSEALIMENTACION
                            </th>

<th>ALCOMPLEMENTARIOMENORES1
                            </th>

<th>ALCOMPLEMENTARIO1A
                            </th>

<th>MOTRICIDADGRUESA
                            </th>

<th>MOTRICIDADFINA
                            </th>

<th>AUDICIONLENGUAJE
                            </th>

<th>PERSONALSOCIAL
                            </th>

<th>CONSULTAEXTERNA
                            </th>

<th>DIAGNOSTICO
                            </th>

<th>CIE
                            </th>

<th>TRATAMIENTO
                            </th>

<th>RESPONSABLE
                            </th>

<th>INYECTABLE
                            </th>

<th>SUEROS
                            </th>

<th>SUTCUR
                            </th>

<th>OTRASACTIVIDADES
                            </th>

<th>MORTALIDAD
                            </th>

<th>REFYCONTRA
                            </th>

<th>REFDE
                            </th>

<th>REFA
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

 <td>{{ $row->apellidosynombres}}</td>

 <td>{{ $row->sexo}}</td>

 <td>{{ $row->nacimiento}}</td>

 <td>{{ $row->anos}}</td>

 <td>{{ $row->meses}}</td>

 <td>{{ $row->dias}}</td>

 <td>{{ $row->bja}}</td>

 <td>{{ $row->peso}}</td>

 <td>{{ $row->talla}}</td>

 <td>{{ $row->control}}</td>

 <td>{{ $row->pesotalla}}</td>

 <td>{{ $row->tallaedad}}</td>

 <td>{{ $row->hierro}}</td>

 <td>{{ $row->vitaa}}</td>

 <td>{{ $row->zinc}}</td>

 <td>{{ $row->mebendazol}}</td>

 <td>{{ $row->conselact}}</td>

 <td>{{ $row->lactancia}}</td>

 <td>{{ $row->consealimentacion}}</td>

 <td>{{ $row->alcomplementariomenores1}}</td>

 <td>{{ $row->alcomplementario1a}}</td>

 <td>{{ $row->motricidadgruesa}}</td>

 <td>{{ $row->motricidadfina}}</td>

 <td>{{ $row->audicionlenguaje}}</td>

 <td>{{ $row->personalsocial}}</td>

 <td>{{ $row->consultaexterna}}</td>

 <td>{{ $row->diagnostico}}</td>

 <td>{{ $row->cie}}</td>

 <td>{{ $row->tratamiento}}</td>

 <td>{{ $row->responsable}}</td>

 <td>{{ $row->inyectable}}</td>

 <td>{{ $row->sueros}}</td>

 <td>{{ $row->sutcur}}</td>

 <td>{{ $row->otrasactividades}}</td>

 <td>{{ $row->mortalidad}}</td>

 <td>{{ $row->refycontra}}</td>

 <td>{{ $row->refde}}</td>

 <td>{{ $row->refa}}</td>

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
<div class='form-group'><label for='apellidosynombres'>Apellidosynombres</label><input type='text' class='form-control @error('apellidosynombres')  is-invalid @enderror' wire:model='apellidosynombres'>@error('apellidosynombres')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='sexo'>Sexo</label><input type='text' class='form-control @error('sexo')  is-invalid @enderror' wire:model='sexo'>@error('sexo')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='nacimiento'>Nacimiento</label><input type='text' class='form-control @error('nacimiento')  is-invalid @enderror' wire:model='nacimiento'>@error('nacimiento')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='años'>Anos</label><input type='text' class='form-control @error('años')  is-invalid @enderror' wire:model='años'>@error('años')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='meses'>Meses</label><input type='text' class='form-control @error('meses')  is-invalid @enderror' wire:model='meses'>@error('meses')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='dias'>Dias</label><input type='text' class='form-control @error('dias')  is-invalid @enderror' wire:model='dias'>@error('dias')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='bja'>Bja</label><input type='text' class='form-control @error('bja')  is-invalid @enderror' wire:model='bja'>@error('bja')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='peso'>Peso</label><input type='text' class='form-control @error('peso')  is-invalid @enderror' wire:model='peso'>@error('peso')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='talla'>Talla</label><input type='text' class='form-control @error('talla')  is-invalid @enderror' wire:model='talla'>@error('talla')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='control'>Control</label><input type='text' class='form-control @error('control')  is-invalid @enderror' wire:model='control'>@error('control')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='pesotalla'>Pesotalla</label><input type='text' class='form-control @error('pesotalla')  is-invalid @enderror' wire:model='pesotalla'>@error('pesotalla')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tallaedad'>Tallaedad</label><input type='text' class='form-control @error('tallaedad')  is-invalid @enderror' wire:model='tallaedad'>@error('tallaedad')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='hierro'>Hierro</label><input type='text' class='form-control @error('hierro')  is-invalid @enderror' wire:model='hierro'>@error('hierro')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vitaa'>Vitaa</label><input type='text' class='form-control @error('vitaa')  is-invalid @enderror' wire:model='vitaa'>@error('vitaa')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='zinc'>Zinc</label><input type='text' class='form-control @error('zinc')  is-invalid @enderror' wire:model='zinc'>@error('zinc')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='mebendazol'>Mebendazol</label><input type='text' class='form-control @error('mebendazol')  is-invalid @enderror' wire:model='mebendazol'>@error('mebendazol')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='conselact'>Conselact</label><input type='text' class='form-control @error('conselact')  is-invalid @enderror' wire:model='conselact'>@error('conselact')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='lactancia'>Lactancia</label><input type='text' class='form-control @error('lactancia')  is-invalid @enderror' wire:model='lactancia'>@error('lactancia')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='consealimentacion'>Consealimentacion</label><input type='text' class='form-control @error('consealimentacion')  is-invalid @enderror' wire:model='consealimentacion'>@error('consealimentacion')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='alcomplementariomenores1'>Alcomplementariomenores1</label><input type='text' class='form-control @error('alcomplementariomenores1')  is-invalid @enderror' wire:model='alcomplementariomenores1'>@error('alcomplementariomenores1')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='alcomplementario1a'>Alcomplementario1a</label><input type='text' class='form-control @error('alcomplementario1a')  is-invalid @enderror' wire:model='alcomplementario1a'>@error('alcomplementario1a')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='motricidadgruesa'>Motricidadgruesa</label><input type='text' class='form-control @error('motricidadgruesa')  is-invalid @enderror' wire:model='motricidadgruesa'>@error('motricidadgruesa')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='motricidadfina'>Motricidadfina</label><input type='text' class='form-control @error('motricidadfina')  is-invalid @enderror' wire:model='motricidadfina'>@error('motricidadfina')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='audicionlenguaje'>Audicionlenguaje</label><input type='text' class='form-control @error('audicionlenguaje')  is-invalid @enderror' wire:model='audicionlenguaje'>@error('audicionlenguaje')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='personalsocial'>Personalsocial</label><input type='text' class='form-control @error('personalsocial')  is-invalid @enderror' wire:model='personalsocial'>@error('personalsocial')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='consultaexterna'>Consultaexterna</label><input type='text' class='form-control @error('consultaexterna')  is-invalid @enderror' wire:model='consultaexterna'>@error('consultaexterna')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='diagnostico'>Diagnostico</label><input type='text' class='form-control @error('diagnostico')  is-invalid @enderror' wire:model='diagnostico'>@error('diagnostico')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='cie'>Cie</label><input type='text' class='form-control @error('cie')  is-invalid @enderror' wire:model='cie'>@error('cie')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tratamiento'>Tratamiento</label><input type='text' class='form-control @error('tratamiento')  is-invalid @enderror' wire:model='tratamiento'>@error('tratamiento')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='responsable'>Responsable</label><input type='text' class='form-control @error('responsable')  is-invalid @enderror' wire:model='responsable'>@error('responsable')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='inyectable'>Inyectable</label><input type='text' class='form-control @error('inyectable')  is-invalid @enderror' wire:model='inyectable'>@error('inyectable')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='sueros'>Sueros</label><input type='text' class='form-control @error('sueros')  is-invalid @enderror' wire:model='sueros'>@error('sueros')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='sutcur'>Sutcur</label><input type='text' class='form-control @error('sutcur')  is-invalid @enderror' wire:model='sutcur'>@error('sutcur')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='otrasactividades'>Otrasactividades</label><input type='text' class='form-control @error('otrasactividades')  is-invalid @enderror' wire:model='otrasactividades'>@error('otrasactividades')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='mortalidad'>Mortalidad</label><input type='text' class='form-control @error('mortalidad')  is-invalid @enderror' wire:model='mortalidad'>@error('mortalidad')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='refycontra'>Refycontra</label><input type='text' class='form-control @error('refycontra')  is-invalid @enderror' wire:model='refycontra'>@error('refycontra')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='refde'>Refde</label><input type='text' class='form-control @error('refde')  is-invalid @enderror' wire:model='refde'>@error('refde')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='refa'>Refa</label><input type='text' class='form-control @error('refa')  is-invalid @enderror' wire:model='refa'>@error('refa')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>

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
