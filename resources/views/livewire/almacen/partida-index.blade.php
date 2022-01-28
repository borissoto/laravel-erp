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
                       class="form-control form-control-sm"
                       id="search" type="text" name="search" wire:model="search" required="required"
                       autofocus="autofocus"/>
            </div>
            <div class="col-md-9 float-right">
                <button type="button"
                        class="btn btn-primary float-right"
                        wire:click="create">
                   {{ __('Nueva Partida') }}
                </button>
            </div>
        </div>
    </div>
    <div class="flex row card">
            <div class="card-body">
                <table width="100%" class="table table-sm table-bordered table-striped text-sm">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Descripcion</th>
                        <th>Detalle</th>
                        <th>Numero</th>
                        {{-- <th>Partida</th>
                        <th>Tipo</th>
                        <th>Vigente</th> --}}
                        <th scope="col">
                            <span class="sr-only">Acciones</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($rows as $row)
                    <tr> 
                        <td>{{ $row->id}}</td>
                        <td>{{ $row->descrip}}</td>
                        <td>{{ $row->detalle}}</td>
                        <td>{{ $row->numero}}</td>
                        {{-- <td>{{ $row->partida}}</td>
                        <td>{{ $row->tipo}}</td>
                        <td>{{ $row->vigente}}</td> --}}
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
                                    </svg></a>
                            </td></tr>@empty  <tr><td>No existe registros!</td></tr>   @endforelse

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
                       <h5 class="modal-title" id="showFormLabel"> {{ $mode == 'create' ? 'Nueva Partida' : 'Actualizar Partida' }}</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                        <div class='form-group'>
                            <label for='descrip' class="col-form-label col-form-label-sm">Descripcion</label>
                            <input type='text' class='form-control form-control-sm @error('descrip')  is-invalid @enderror' wire:model='descrip'>
                            @error('descrip')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>
                        <div class='form-group'>
                            <label for='detalle' class="col-form-label col-form-label-sm">Detalle</label>
                            <input type='text' class='form-control form-control-sm @error('detalle')  is-invalid @enderror' wire:model='detalle'>
                            @error('detalle')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>
                        <div class='form-group'>
                            <label for='numero' class="col-form-label col-form-label-sm">Numero</label>
                            <input type='text' class='form-control form-control-sm @error('numero')  is-invalid @enderror' wire:model='numero'>
                            @error('numero')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>

                        {{-- <div class='form-group'>
                            <label for='partida' class="col-form-label col-form-label-sm">Partida</label>
                            <input type='text' class='form-control form-control-sm @error('partida')  is-invalid @enderror' wire:model='partida'>
                            @error('partida')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>
                        <div class='form-group'>
                            <label for='tipo' class="col-form-label col-form-label-sm">Tipo</label>
                            <input type='text' class='form-control form-control-sm @error('tipo')  is-invalid @enderror' wire:model='tipo'>
                            @error('tipo')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>
                        <div class='form-group'>
                            <label for='vigente' class="col-form-label col-form-label-sm">Vigente</label>
                            <input type='text' class='form-control form-control-sm @error('vigente')  is-invalid @enderror' wire:model='vigente'>
                            @error('vigente')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div> --}}

                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" wire:click="destroy()" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{--    /delete popup--}}
</div>
