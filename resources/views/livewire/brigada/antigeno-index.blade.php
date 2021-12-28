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
                   {{ __('Add New Record') }}
                </button>
            </div>
        </div>
    </div>
    <div class="flex row card">
            <div class="card-body">
                <table width="100%" class="table table-sm table-responsive-sm table-bordered table-striped text-sm shadow">
                    <thead>
                    <tr>

                        <th>Departamento</th>
                        <th>Municipio</th>
                        <th>Brigada</th>
                        <th>Prueba</th>
                        <th>Tipo</th>
                        <th>Muestras</th>
                        <th>Positivos</th>
                        <th>Negativos</th>
                        <th>Referencias</th>
                        <th>Kits</th>
                        <th>Canastas</th>
                        <th>Fecha</th>
                        <th>Responsable</th>

                        <th>
                            <span>Acciones</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($rows as $row)
                    <tr>
                        <td>{{ $row->municipio->departamento->nom_departamento}}</td>
                        <td>{{ $row->municipio->nom_municipio}}</td>
                        <td>{{ $row->brigada->nom_brigada}}</td>
                        <td>{{ $row->prueba}}</td>
                        <td>{{ $row->tipo}}</td>
                        <td>{{ $row->muestras}}</td>
                        <td>{{ $row->positivos}}</td>
                        <td>{{ $row->negativos}}</td>
                        <td>{{ $row->referencias}}</td>
                        <td>{{ $row->kits}}</td>
                        <td>{{ $row->canastas}}</td>
                        <td>{{ $row->fecha}}</td>
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
                            </td></tr>@empty  <tr><td>No Existen Registros </td></tr>   @endforelse

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
                       <h5 class="modal-title" id="showFormLabel"> {{ $mode == 'create' ? 'Add New Record' : 'Update Record ' }}</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                        <div class='form-group'><label for='adm_municipio_id'>Adm municipio id</label><input type='text' class='form-control @error('adm_municipio_id')  is-invalid @enderror' wire:model='adm_municipio_id'>@error('adm_municipio_id')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='rrhh_brigada_id'>Rrhh brigada id</label><input type='text' class='form-control @error('rrhh_brigada_id')  is-invalid @enderror' wire:model='rrhh_brigada_id'>@error('rrhh_brigada_id')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='prueba'>Prueba</label><input type='text' class='form-control @error('prueba')  is-invalid @enderror' wire:model='prueba'>@error('prueba')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='tipo'>Tipo</label><input type='text' class='form-control @error('tipo')  is-invalid @enderror' wire:model='tipo'>@error('tipo')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='muestras'>Muestras</label><input type='text' class='form-control @error('muestras')  is-invalid @enderror' wire:model='muestras'>@error('muestras')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='positivos'>Positivos</label><input type='text' class='form-control @error('positivos')  is-invalid @enderror' wire:model='positivos'>@error('positivos')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='negativos'>Negativos</label><input type='text' class='form-control @error('negativos')  is-invalid @enderror' wire:model='negativos'>@error('negativos')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='referencias'>Referencias</label><input type='text' class='form-control @error('referencias')  is-invalid @enderror' wire:model='referencias'>@error('referencias')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='kits'>Kits</label><input type='text' class='form-control @error('kits')  is-invalid @enderror' wire:model='kits'>@error('kits')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='canastas'>Canastas</label><input type='text' class='form-control @error('canastas')  is-invalid @enderror' wire:model='canastas'>@error('canastas')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='fecha'>Fecha</label><input type='text' class='form-control @error('fecha')  is-invalid @enderror' wire:model='fecha'>@error('fecha')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='user_id'>User id</label><input type='text' class='form-control @error('user_id')  is-invalid @enderror' wire:model='user_id'>@error('user_id')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>

                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       <button type="button" @if($mode == 'create') wire:click="store()" @else wire:click="update()" @endif  class="btn btn-primary">
                         {{ $mode == 'create' ? 'Save Record' : 'Update Record' }}
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
                            <h5 class="modal-title" id="exampleModalLabel">Are You Sure?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                           This Action Can not be Undone.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" wire:click="destroy()" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{--    /delete popup--}}
</div>
