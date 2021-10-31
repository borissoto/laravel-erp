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

                        <th>Nro Boleta</th>
                        <th>Solicitante</th>
                        {{-- <th>Area</th> --}}
                        <th>Cargo</th>
                        <th>Estado</th>
                        <th>Fecha Solicitud</th>                        
                        <th>Detalle</th>
                        <th>Editar</th>
                        <th>Enviar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($rows as $row)
                    <tr> 
                        <td>{{ $row->id}}</td>
                        <td>{{ $row->usuario->nombres.' '.$row->usuario->ap_paterno.' '.$row->usuario->ap_materno}}</td>
                        {{-- <td>{{ $row->usuario->cargos}}</td> --}}
                        <td>{{ $row->usuario->cargos->nom_cargo}}</td>
                        <td>{{ $row->estado}}</td>
                        <td>{{ $row->fecha_solicitud}}</td>
                        <td width="20px" class="text-center">
                           
                            <a href="#" class="text-primary" wire:click.prevent="edit({{ $row->id }})">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                                    <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                                </svg>
                            </a>
                        </td>
                        <td width="20px" class="text-center">  
                            @if ($row->imprimido == false)                              
                                                    
                            <a href="#" class="text-danger" wire:click.prevent="confirmDelete({{ $row->id }})">                                
                                <svg xmlns="http://www.w3.org/2000/svg" style="width:20px; height: 20px;" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            @else
                            <span class="badge bg-warning"> EN ALMACENES </span>
                            @endif
                           
                        </td>    
                            {{-- <a href="{{route('almacen.solicitud.pdf')}}" class="text-success" target="_blank">  --}}
                        <td width="20px" class="text-center">
                            @if ($row->imprimido == false)
                            <a href="#" class="text-success" wire:click.prevent="sendPrint({{ $row->id }})" target="_blank">                                
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16 ">
                                <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                                <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                              </svg>
                            </a>
                            @else
                            <span class="badge bg-warning"> EN ALMACENES </span>
                            @endif 
                            
                        </td>

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

      {{--    print popup--}}
      <div wire:ignore>
        <div class="modal fade" id="confirmPrint" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
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
