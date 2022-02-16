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
                       class="form-control form-control-sm"
                       id="search" type="text" name="search" wire:model="search" required="required"
                       autofocus="autofocus"/>
            </div>
            <div class="col-md-9 float-right">
                <button type="button"
                        class="btn btn-primary float-right"
                        wire:click="create">
                   {{ __('Nueva Comision Viaje') }}
                </button>
            </div>
        </div>
    </div>
    <div class="flex row card">
            <div class="card-body">
                <table  class="table table-sm table-bordered table-striped text-sm">
                    <thead>
                    <tr>
                        
                        <th>Cite</th>
                        <th>Lugar</th>
                        <th>Departamento</th>
                        <th>Coordinador - Destinatario</th>
                        <th>Poa</th>
                        <th>Fecha Partida</th>
                        <th>Fecha Retorno</th>
                        <th>Duracion</th>                        
                        <th>Estado</th>
                        <th>Remitente</th>
                        <th>Acciones</th>                        
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($rows as $row)
                    <tr> 
                        
                        <td>{{ $row->cite}}</td>
                        <td>{{ $row->lugar}}</td>
                        <td>{{ $row->departamento->nom_departamento}}</td>
                        <td>{{ $row->coordinador->nombres.' '.$row->coordinador->ap_paterno.' '.$row->coordinador->ap_materno}}</td>
                        <td>{{ $row->poa->codigo}}</td>
                        <td>{{ \Carbon\Carbon::parse($row->fecha_salida)->format('Y-m-d')}}</td>
                        <td>{{ \Carbon\Carbon::parse($row->fecha_retorno)->format('Y-m-d')}}</td>
                        <td>{{ $row->duracion}}</td>                        
                        <td>{{ $row->estado}}</td>
                        <td>{{ $row->usuario->name}}</td>
                        <td>
                            <a href="#" class="text-primary" wire:click.prevent="edit({{ $row->id }})">
                                <svg xmlns="http://www.w3.org/2000/svg" style="width:20px; height: 20px;" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="text-danger" wire:click.prevent="confirmDelete({{ $row->id }})"> 
                                <svg xmlns="http://www.w3.org/2000/svg" style="width:20px; height: 20px;" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="text-success" wire:click.prevent="sendPrint({{ $row->id }})" target="_blank">                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16 ">
                                    <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                                    <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                                </svg>
                            </a>
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
                       <h5 class="modal-title" id="showFormLabel"> {{ $mode == 'create' ? 'Nueva Comision Viaje' : 'Actualizar Comision Viaje ' }}</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <div class='form-group row'>
                           <label for='cite' class="col-sm-4 col-form-label">Cite</label>
                           <div class="col-sm-8" >
                           <input type='number' class='form-control form-control-sm @error('cite')  is-invalid @enderror' wire:model='cite'>                           
                           @error('cite')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                           </div>
                        </div>
                        
                        <div class='form-group row'>
                            <label for='coordinador_id' class="col-sm-4 col-form-label">Coordinador(a)</label>
                            <div class="col-sm-8" >
                                <select wire:model="coordinador_id" name="coordinador_id" class="form-control form-control-sm" >
                                    <option value="" class="text-primary">-Escoja Coordinador Dptal-</option>
                                    @foreach ($coordinadores as $coordinador)
                                    <option value="{{ $coordinador->id }}">{{ $coordinador->nombres.' '.$coordinador->ap_paterno.' '.$coordinador->ap_materno }}</option>
                                    @endforeach
                                </select>
                                @error('coordinador_id')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class='form-group row'>
                            <label for='adm_departamento_id' class="col-sm-4 col-form-label">Coordinador(a) de</label>
                            <div class="col-sm-8" >
                                <select wire:model="adm_departamento_id" id="adm_departamento_id" class="form-control form-control-sm" required>                                        
                                    <option value="">-Elija Departamento-</option>
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
                            @error('adm_departamento_id')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class='form-group row'>
                            <label for='objeto' class="col-sm-4 col-form-label">Objeto</label>
                            <div class="col-sm-8" >
                            <textarea type='text' class='form-control form-control-sm @error('objeto')  is-invalid @enderror' wire:model='objeto'></textarea>                           
                            @error('objeto')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                         </div>
                        <div class='form-group row'>
                            <label for='lugar' class="col-sm-4 col-form-label">Lugar</label>
                            <div class="col-sm-8" >
                                <input type='text' class='form-control form-control-sm @error('lugar')  is-invalid @enderror' wire:model='lugar'>                           
                            @error('lugar')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                        </div>
                     
                        <div class='form-group row'>
                            <label for='adm_poa_id' class="col-sm-4 col-form-label">POA Operacion</label>
                            <div class="col-sm-8 text-truncate" >
                                <select wire:model="adm_poa_id" name="departamento" class="form-control form-control-sm" >
                                    <option value="" class="text-primary">-Escoja Operacion-</option>
                                    @foreach ($poas as $poa)
                                        <option value="{{ $poa->id }}" title="{{$poa->operacion}}">{{ $poa->codigo }}</option>
                                    @endforeach
                                </select>
                                @error('adm_poa_id')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class='form-group row'>
                            <label for='fecha_salida' class="col-sm-4 col-form-label">Fecha salida</label>
                            <div class="col-sm-8" >
                            <input type='date' class='form-control form-control-sm @error('fecha_salida')  is-invalid @enderror' wire:model='fecha_salida'>
                            @error('fecha_salida')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class='form-group row'>
                            <label for='fecha_retorno' class="col-sm-4 col-form-label">Fecha retorno</label>
                            <div class="col-sm-8" >
                            <input type='date' class='form-control form-control-sm @error('fecha_retorno')  is-invalid @enderror' wire:model='fecha_retorno'>
                            @error('fecha_retorno')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                        </div>
                    
                        <div class='form-group row'>
                            <label for='transporte' class="col-sm-4 col-form-label">Transporte</label>
                            <div class="col-sm-8" >
                            {{-- <input type='text' class='form-control form-control-sm @error('transporte')  is-invalid @enderror' wire:model='transporte'> --}}
                            <select wire:model="transporte" id="transporte" class="form-control form-control-sm" required>                                        
                                <option value="">-Elija-</option>
                                <option value="Terrestre">Terrestre</option>
                                <option value="Aereo">Aereo</option>
                                <option value="Terrestre y Aereo">Terrestre y Aereo</option>
                                <option value="Aereo">Fluvial</option>
                            </select>  
                            @error('transporte')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                        </div>
                                        
                     
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
                           Esta seguro que desea bprrar.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" wire:click="destroy()" class="btn btn-danger">Borrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{--    /delete popup--}}

         {{--    print popup--}}
         <div wire:ignore>
            <div class="modal fade" id="confirmPrint" tabindex="-1" role="dialog" aria-labelledby="printModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Esta seguro?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                           Verifique los datos antes de Imprimir, se emitira la solicitud a la Unidad de Almacenes.
                           <p>
                               <span class="text-danger">
                                La opcion Imprimir ya no estara disponible, por favor <b> guarde el PDF </b> generado.
                                </span> 
    
                           </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="button" wire:click="confirmPrint()" class="btn btn-danger">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{--    /print popup--}}
</div>
