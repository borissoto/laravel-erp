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

<th>NOASEGURADO
                            </th>

<th>APELLIDOSYNOMBRE
                            </th>

<th>NACIMIENTO
                            </th>

<th>ANOS
                            </th>

<th>MESES
                            </th>

<th>DIAS
                            </th>

<th>BENEFICIO
                            </th>

<th>PESO
                            </th>

<th>TALLA
                            </th>

<th>FUM
                            </th>

<th>NUTRICION
                            </th>

<th>PRENATAL
                            </th>

<th>4CPN
                            </th>

<th>PAP
                            </th>

<th>PAPPOS
                            </th>

<th>IVAA
                            </th>

<th>IVAAPOS
                            </th>

<th>MAMAPOS
                            </th>

<th>HEMORRAGIA1MIT
                            </th>

<th>HEMORRAGIAPARTO
                            </th>

<th>EMBSEPSIS
                            </th>

<th>PREECLAMSIASEVERA
                            </th>

<th>ECLAMSIA
                            </th>

<th>ATENCIONPARTO
                            </th>

<th>TIPOPARTO
                            </th>

<th>ANESTESIA
                            </th>

<th>RECIENNAC
                            </th>

<th>PARTERA
                            </th>

<th>PARTODOM
                            </th>

<th>MALFORMACION
                            </th>

<th>MUJER1549CON4CPN
                            </th>

<th>LACTANCIAINMEDIATA
                            </th>

<th>RNAPEGOPRECOZ
                            </th>

<th>CONTROLPOSTPARTO
                            </th>

<th>HIERRO90
                            </th>

<th>VITAP
                            </th>

<th>MORTALIDADFUERA
                            </th>

<th>REFCONTRAREF
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

 <td>{{ $row->apellidosynombre}}</td>

 <td>{{ $row->nacimiento}}</td>

 <td>{{ $row->anos}}</td>

 <td>{{ $row->meses}}</td>

 <td>{{ $row->dias}}</td>

 <td>{{ $row->beneficio}}</td>

 <td>{{ $row->peso}}</td>

 <td>{{ $row->talla}}</td>

 <td>{{ $row->fum}}</td>

 <td>{{ $row->nutricion}}</td>

 <td>{{ $row->prenatal}}</td>

 <td>{{ $row->cpn4}}</td>

 <td>{{ $row->pap}}</td>

 <td>{{ $row->pappos}}</td>

 <td>{{ $row->ivaa}}</td>

 <td>{{ $row->ivaapos}}</td>

 <td>{{ $row->mamapos}}</td>

 <td>{{ $row->hemorragia1mit}}</td>

 <td>{{ $row->hemorragiaparto}}</td>

 <td>{{ $row->embsepsis}}</td>

 <td>{{ $row->preeclamsiasevera}}</td>

 <td>{{ $row->eclamsia}}</td>

 <td>{{ $row->atencionparto}}</td>

 <td>{{ $row->tipoparto}}</td>

 <td>{{ $row->anestesia}}</td>

 <td>{{ $row->reciennac}}</td>

 <td>{{ $row->partera}}</td>

 <td>{{ $row->partodom}}</td>

 <td>{{ $row->malformacion}}</td>

 <td>{{ $row->mujer1549con4cpn}}</td>

 <td>{{ $row->lactanciainmediata}}</td>

 <td>{{ $row->rnapegoprecoz}}</td>

 <td>{{ $row->controlpostparto}}</td>

 <td>{{ $row->hierro90}}</td>

 <td>{{ $row->vitap}}</td>

 <td>{{ $row->mortalidadfuera}}</td>

 <td>{{ $row->refcontraref}}</td>

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
<div class='form-group'><label for='apellidosynombre'>Apellidosynombre</label><input type='text' class='form-control @error('apellidosynombre')  is-invalid @enderror' wire:model='apellidosynombre'>@error('apellidosynombre')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='nacimiento'>Nacimiento</label><input type='text' class='form-control @error('nacimiento')  is-invalid @enderror' wire:model='nacimiento'>@error('nacimiento')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='años'>Anos</label><input type='text' class='form-control @error('años')  is-invalid @enderror' wire:model='años'>@error('años')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='meses'>Meses</label><input type='text' class='form-control @error('meses')  is-invalid @enderror' wire:model='meses'>@error('meses')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='dias'>Dias</label><input type='text' class='form-control @error('dias')  is-invalid @enderror' wire:model='dias'>@error('dias')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='beneficio'>Beneficio</label><input type='text' class='form-control @error('beneficio')  is-invalid @enderror' wire:model='beneficio'>@error('beneficio')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='peso'>Peso</label><input type='text' class='form-control @error('peso')  is-invalid @enderror' wire:model='peso'>@error('peso')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='talla'>Talla</label><input type='text' class='form-control @error('talla')  is-invalid @enderror' wire:model='talla'>@error('talla')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='fum'>Fum</label><input type='text' class='form-control @error('fum')  is-invalid @enderror' wire:model='fum'>@error('fum')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='nutricion'>Nutricion</label><input type='text' class='form-control @error('nutricion')  is-invalid @enderror' wire:model='nutricion'>@error('nutricion')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='prenatal'>Prenatal</label><input type='text' class='form-control @error('prenatal')  is-invalid @enderror' wire:model='prenatal'>@error('prenatal')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='4cpn'>4cpn</label><input type='text' class='form-control @error('4cpn')  is-invalid @enderror' wire:model='cpn4'>@error('4cpn')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='pap'>Pap</label><input type='text' class='form-control @error('pap')  is-invalid @enderror' wire:model='pap'>@error('pap')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='pappos'>Pappos</label><input type='text' class='form-control @error('pappos')  is-invalid @enderror' wire:model='pappos'>@error('pappos')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='ivaa'>Ivaa</label><input type='text' class='form-control @error('ivaa')  is-invalid @enderror' wire:model='ivaa'>@error('ivaa')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='ivaapos'>Ivaapos</label><input type='text' class='form-control @error('ivaapos')  is-invalid @enderror' wire:model='ivaapos'>@error('ivaapos')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='mamapos'>Mamapos</label><input type='text' class='form-control @error('mamapos')  is-invalid @enderror' wire:model='mamapos'>@error('mamapos')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='hemorragia1mit'>Hemorragia1mit</label><input type='text' class='form-control @error('hemorragia1mit')  is-invalid @enderror' wire:model='hemorragia1mit'>@error('hemorragia1mit')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='hemorragiaparto'>Hemorragiaparto</label><input type='text' class='form-control @error('hemorragiaparto')  is-invalid @enderror' wire:model='hemorragiaparto'>@error('hemorragiaparto')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='embsepsis'>Embsepsis</label><input type='text' class='form-control @error('embsepsis')  is-invalid @enderror' wire:model='embsepsis'>@error('embsepsis')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='preeclamsiasevera'>Preeclamsiasevera</label><input type='text' class='form-control @error('preeclamsiasevera')  is-invalid @enderror' wire:model='preeclamsiasevera'>@error('preeclamsiasevera')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='eclamsia'>Eclamsia</label><input type='text' class='form-control @error('eclamsia')  is-invalid @enderror' wire:model='eclamsia'>@error('eclamsia')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='atencionparto'>Atencionparto</label><input type='text' class='form-control @error('atencionparto')  is-invalid @enderror' wire:model='atencionparto'>@error('atencionparto')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tipoparto'>Tipoparto</label><input type='text' class='form-control @error('tipoparto')  is-invalid @enderror' wire:model='tipoparto'>@error('tipoparto')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='anestesia'>Anestesia</label><input type='text' class='form-control @error('anestesia')  is-invalid @enderror' wire:model='anestesia'>@error('anestesia')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='reciennac'>Reciennac</label><input type='text' class='form-control @error('reciennac')  is-invalid @enderror' wire:model='reciennac'>@error('reciennac')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='partera'>Partera</label><input type='text' class='form-control @error('partera')  is-invalid @enderror' wire:model='partera'>@error('partera')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='partodom'>Partodom</label><input type='text' class='form-control @error('partodom')  is-invalid @enderror' wire:model='partodom'>@error('partodom')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='malformacion'>Malformacion</label><input type='text' class='form-control @error('malformacion')  is-invalid @enderror' wire:model='malformacion'>@error('malformacion')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='mujer1549con4cpn'>Mujer1549con4cpn</label><input type='text' class='form-control @error('mujer1549con4cpn')  is-invalid @enderror' wire:model='mujer1549con4cpn'>@error('mujer1549con4cpn')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='lactanciainmediata'>Lactanciainmediata</label><input type='text' class='form-control @error('lactanciainmediata')  is-invalid @enderror' wire:model='lactanciainmediata'>@error('lactanciainmediata')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='rnapegoprecoz'>Rnapegoprecoz</label><input type='text' class='form-control @error('rnapegoprecoz')  is-invalid @enderror' wire:model='rnapegoprecoz'>@error('rnapegoprecoz')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='controlpostparto'>Controlpostparto</label><input type='text' class='form-control @error('controlpostparto')  is-invalid @enderror' wire:model='controlpostparto'>@error('controlpostparto')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='hierro90'>Hierro90</label><input type='text' class='form-control @error('hierro90')  is-invalid @enderror' wire:model='hierro90'>@error('hierro90')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='vitap'>Vitap</label><input type='text' class='form-control @error('vitap')  is-invalid @enderror' wire:model='vitap'>@error('vitap')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='mortalidadfuera'>Mortalidadfuera</label><input type='text' class='form-control @error('mortalidadfuera')  is-invalid @enderror' wire:model='mortalidadfuera'>@error('mortalidadfuera')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='refcontraref'>Refcontraref</label><input type='text' class='form-control @error('refcontraref')  is-invalid @enderror' wire:model='refcontraref'>@error('refcontraref')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
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
