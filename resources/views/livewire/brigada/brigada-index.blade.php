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
                <table width="100%" class="table table-sm table-responsive-sm table-bordered table-striped text-sm shadow">
                    <thead>
                    <tr>

                        <th>Id</th>
                        <th>Departamento</th>
                        <th>Municipio</th>
                        <th>Brigada</th>
                        <th>Tipo</th>
                        <th>Responsable</th>
                        <th>Usuario</th>
                        <th>Integrantes</th>
                        <th>
                            <span>Acciones</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($rows as $row)
                    <tr> 
                        <td>{{ $row->id}}</td>
                        <td>{{ $row->municipio->departamento->nom_departamento}}</td>
                        <td>{{ $row->municipio->nom_municipio}}</td>
                        <td>{{ $row->nom_brigada}}</td>
                        <td>{{ $row->tipo}}</td>
                        <td>{{ $row->usuario->nombres.' '.$row->usuario->ap_paterno.' '.$row->usuario->ap_materno}}</td>
                        <td>{{ $row->usuario->name}}</td>
                        <td>{{ $row->integrantes}}</td>
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
                       <h5 class="modal-title" id="showFormLabel"> {{ $mode == 'create' ? 'Nuevo Registro' : 'Actualizar ' }}</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                        <div class='form-group'><label for='adm_municipio_id'>Municipio (Del Depto al que su EESS pertenece)</label>
                            {{-- <input type='text' class='form-control @error('adm_municipio_id')  is-invalid @enderror' wire:model='adm_municipio_id'> --}}
                            <select wire:model="adm_municipio_id"  name="adm_municipio_id" id="adm_municipio_id" class="form-control form-control-sm" >
                                @if($municipios)
                                <option value="" class="text-primary">Escoja Municipio*</option>
                                    @foreach ($municipios as $municipio)
                                        <option value="{{ $municipio->id }}">{{ $municipio->nom_municipio }}</option>
                                    @endforeach
                                @else                                    
                                    <option disabled value="" class="text-danger">Usuario Sin Establecimiento</option>
                                    <option disabled value="" class="text-danger">Usuario Sin Establecimiento</option>
                                @endif    
                            </select>
                            @error('adm_municipio_id')<span class="text-sm text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class='form-group'><label for='nom_brigada'>Nombre brigada</label><input type='text' class='form-control @error('nom_brigada')  is-invalid @enderror' wire:model='nom_brigada'>@error('nom_brigada')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
                        <div class='form-group'><label for='tipo'>Tipo</label>
                            {{-- <input type='text' class='form-control @error('tipo')  is-invalid @enderror' wire:model='tipo'> --}}
                            <select wire:model="tipo" id="tipo" class="form-control form-control-sm" required>
                                <option value="">-Escoja Tipo-</option>                                
                                <option value="VACUNACION">VACUNACION</option>
                                <option value="TOMA DE MUESTRA">TOMA DE MUESTRA</option>
                                <option value="RASTRILLAJE">RASTRILLAJE</option>
                                <option value="ENTREGA DE CANASTAS">ENTREGA DE  CANASTAS DE ALIMENTOS</option>
                            </select>   
                            @error('tipo')<span class="text-sm text-danger error">{{ $message }}</span>@enderror</div>
                        {{-- <div class='form-group'><label for='user_id'>User id</label><input type='text' class='form-control @error('user_id')  is-invalid @enderror' wire:model='user_id'>@error('user_id')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div> --}}
                        <div class='form-group'><label for='integrantes'>Integrantes</label>
                            <input type='number' class='form-control @error('integrantes')  is-invalid @enderror' wire:model='integrantes'>
                            @error('integrantes')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>

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
