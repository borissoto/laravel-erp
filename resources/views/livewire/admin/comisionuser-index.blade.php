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
    {{-- <div>
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
    </div> --}}
    <div class="flex row card">
            <div class="card-body">
                <table width="100%" class="table table-sm table-bordered text-sm">
                    <thead>
                    <tr>
                        <th>Anuencia Id</th>
                        <th>Estado</th>
                        <th>Municipio</th>                        
                        <th>Nombre Completo</th>
                        <th>CI</th>
                        <th>Item</th>
                        <th>Cargo</th>
                        <th>Elim</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($rows as $row)
                    <tr> 
                        <td>{{ $row->rrhh_comisiones_id}}</td>
                        <td class="align-middle">{!! $row->usuario->estado === 1 ? '<span class="badge bg-success">ACTIVO</span>' : ($row->usuario->estado === 2 ?  '<span class="badge bg-warning">BAJA</span>' : '<span class="badge bg-danger">INACTIVO</span>') !!}</td>
                        @if ($row->establecimiento === 0 || $row->establecimiento === null)
                            <td class="align-middle"><span class="badge bg-secondary">No Mun</span></td>
                        @else
                            <td class="align-middle">{{ $row->establecimiento->municipio->nom_municipio}}</td>
                        @endif
                        <td>{{ $row->usuario->nombres.' '.$row->usuario->ap_paterno.' '.$row->usuario->ap_materno}}</td>
                        <td>{{ $row->ci}}</td>
                        <td>{{ $row->item}}</td>
                        <td>{{ $row->grado}}</td>
                        <td>
                            {{-- <a href="#" class="text-primary" wire:click.prevent="edit({{ $row->id }})">
                                <svg xmlns="http://www.w3.org/2000/svg" style="width:20px; height: 20px;" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                </svg>
                            </a> --}}
                            <a href="#" class="text-danger" wire:click.prevent="confirmDeleteComisionUser({{ $row->id }})"> 
                                <svg xmlns="http://www.w3.org/2000/svg" style="width:20px; height: 20px;" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2HzM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </td>
                    </tr>@empty  <tr><td>No Existen Registros</td></tr>   @endforelse

                    </tbody>
                </table>
                <div class="p-2">
                    {{ $rows->links() }}
                </div>
        </div>


    </div>


    {{--    create / edit form --}}

       <div class="modal fade" wire:ignore.self id="showFormComisionUser" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="showFormLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="showFormLabel"> {{ $mode == 'create' ? 'Seleccionar Usuario' : 'Seleccionar Usuario ' }}</h5>
                       <button type="button" class="close" wire:click="closeForm()" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       Se ha seleccionado el usuario 
                        {{-- <div class='form-group'>
                            <label for='user_id'>User id</label>
                            <input type='text' class='form-control @error('user_id')  is-invalid @enderror' wire:model='user_id'>
                            @error('user_id')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>
                        <div class='form-group'>
                            <label for='rrhh_comisiones_id'>Rrhh comisiones id</label>
                            <input type='text' class='form-control @error('rrhh_comisiones_id')  is-invalid @enderror' wire:model='rrhh_comisiones_id'>
                            @error('rrhh_comisiones_id')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div> --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeForm()">Cerrar</button>
                        <button type="button" @if($mode == 'create') wire:click="store()" @else wire:click="update()" @endif  class="btn btn-primary">
                            {{ $mode == 'create' ? 'Seleccionar Usuario' : 'Actualizar' }}
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
                           Esta segur@ de eliminar el usuario de la anunecia?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" wire:click="destroyComisionuser()" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{--    /delete popup--}}
</div>
