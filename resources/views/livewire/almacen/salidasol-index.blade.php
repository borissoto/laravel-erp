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
                   {{ __('Nueva Solicitud') }}
                </button>
            </div>
        </div>
    </div>
    <div class="flex row card">
            <div class="card-body">
                <table width="100%" class="table table-sm table-bordered table-striped text-sm">
                    <thead>
                    <tr>
                        <th>Boleta</th>
                        <th>Usuario</th>                     
                        <th>Cargo</th>
                        <th>Area</th>
                        <th>Fecha Solicitud</th>
                        <th>Impresion</th>
                        <th>Imprimido</th>
                        <th>Estado</th>
                        <th>Devolver</th>
                        <th>Entregar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($rows as $row)
                    <tr> 
                        <td>{{ $row->boleta}}</td>                        
                        <td>{{ $row->usuario->nombres.' '.$row->usuario->ap_paterno.' '.$row->usuario->ap_materno}}</td>                        
                        <td>{{ $row->usuario->cargos->nom_cargo}}</td>
                        <td>{{ $row->area}}</td>
                        <td>{{ $row->fecha_solicitud}}</td>
                        <td>{{ $row->impresion}}</td>
                        <td>{{ $row->imprimido == true ? 'Impreso' : 'No impreso'}}</td>
                        <td>{{ $row->estado}}</td>
                        <td width="20px" class="text-center" >
                            <a href="#" class="text-primary" wire:click.prevent="edit({{ $row->id }})">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" style="width:20px; height: 20px;" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                </svg> --}}                               
                                <i class="fas fa-undo"></i>
                            </a>
                        </td>
                        <td width="20px" class="text-center">    
                            <a href="#" class="text-success" wire:click.prevent="edit({{ $row->id }})"> 
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" style="width:20px; height: 20px;" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg> --}}
                                <i class="fas fa-cart-arrow-down"></i>
                            </a>
                        </td></tr>@empty  <tr><td>No existen Registros</td></tr>   @endforelse
                    </tbody>
                </table>
                <div class="p-2">
                    {{ $rows->links() }}
                </div>
        </div>


    </div>


    {{--    create / edit form --}}

       <div class="modal fade" wire:ignore.self id="showForm" tabindex="-1" role="dialog" aria-labelledby="showFormLabel" aria-hidden="true">
           <div class="modal-dialog modal-xl" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="showFormLabel"> {{ $mode == 'create' ? 'Nueva Solicitud Material' : 'Editar Solicitud Material' }}</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                        <div class='form-group row'>
                            <label for='boleta' class="col-sm-1 col-form-label col-form-label-sm">Boleta Nro </label>
                            <div class="col-sm-1">
                                <input type='text' class='form-control form-control-sm' wire:model='boletaNro' readonly>
                            </div>
                        
                            <label for='user_id' class="col-sm-1 col-form-label col-form-label-sm" >Solicitante</label>
                            <div class="col-sm-4">
                                <input type='text' class='form-control form-control-sm' wire:model='usuarioNombre' readonly>
                            </div>
                        
                            <label for='cargo' class="col-sm-1 col-form-label col-form-label-sm">Cargo</label>
                            <div class="col-sm-4">
                                <input type='text' class='form-control form-control-sm' wire:model='cargoNombre' readonly>                            
                            </div>
                        
                            {{-- <label for='area' class="col-sm-1 col-form-label col-form-label-sm">Area</label>
                            <div class="col-sm-3">
                                <input type='text' class='form-control form-control-sm'  wire:model='area' readonly>
                            </div>                                                                            --}}
                            
                        </div>
                        <div class='form-group row'>
                            <label for='justificativo' class="col-sm-1 col-form-label col-form-label-sm">Justificativo</label>
                            <div class="col-sm-9">
                                <textarea type='text' class='form-control form-control-sm @error('justificativo')  is-invalid @enderror' wire:model='justificativo' {{ $flag == 1 ? 'disabled' : '' }}></textarea>
                                @error('justificativo')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>

                            <div class="col-sm-2 d-flex justify-content-center">
                                <button type="button" @if($mode == 'create') wire:click="store()" @else wire:click="update()" @endif  class="btn btn-primary" {{ $flag == 1 ? 'disabled' : '' }}>
                                    {{ $mode == 'create' ? 'Continuar' : 'Continuar' }}
                                </button>
                            </div>
                        </div>
                        @if($showComponents) 
                        @livewire('almacen.articulosol-index')
                        @livewire('almacen.pedido-index')
                        @endif

                   </div>
                   <div class="modal-footer">
                       
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
