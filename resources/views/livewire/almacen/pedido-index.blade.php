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
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3 class="card-title "> </h3>
                        <div class="d-inline-flex ">
                            <select wire:model="perPage" class="form-control form-control-sm text-secondary border-1"> 
                                <option value="5">5 por página</option>
                                <option value="10">10 por página</option>
                                <option value="15">15 por página</option>
                                {{-- <option value="25">25 por página</option>
                                <option value="50">50 por página</option>
                                <option value="100">100 por página</option> --}}
                            </select>
                        </div>
                        {{-- <button type="button" wire:click="create" class="btn btn-success btn-sm ">
                            {{ __('Nuevo ingreso') }}
                        </button> --}}
                        <span> Articulos de la Solicitud</span>
                        <div class="card-tools">
                            <div class="input-group input-group-sm " style="width: 150px;">
                                <input wire:model="search" class="form-control float-right"
                                id="search" type="text" name="search" wire:model="search" placeholder="Buscar...">
                                <div class="input-group-append">
                                    <button class="btn btn-default disabled">
                                    <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>                        
                        </div>
                </div>
            
                <div class="card-body pb-1">
                        <table width="100%" class="table table-sm table-bordered table-striped text-sm">
                            <thead>
                            <tr>

                                <th>Id</th>
                                <th>Articulo</th>
                                <th>Unidad</th>
                                <th>Cantidad Solicitada</th>                        
                                <th scope="col">
                                    <span class="sr-only">Acciones</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($rows as $row)
                            <tr> 
                                <td>{{ $row->alm_articulo_id}}</td>
                                <td>{{ $row->articulo->descrip}}</td>
                                <td>{{ $row->articulo->unidad->unidad}}</td>
                                <td>{{ $row->cantidad}}</td>                        
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
                                    </td></tr>@empty  <tr><td>No Existen Registros!</td></tr>   @endforelse
                            </tbody>
                        </table>
                        <div class="p-2">
                            {{ $rows->links() }}
                        </div>
                </div>
            </div>
        </div>
    </div>
    

    {{--    create / edit form --}}

    <div class="modal fade" wire:ignore.self id="showFormSolMat" data-backdrop="static"  tabindex="-1" role="dialog" aria-labelledby="showFormLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="showFormLabel"> {{ $mode == 'create' ? 'Solictud de Articulo' : 'Edicion de solicitud' }}</h5>
                    <button type="button" class="close" wire:click="closeForm()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">   
                     <div class='form-group row'>
                         <label class="col-form-label" >{{$articuloDesc}}<label>                            
                     </div>                     
                     <div class='form-group row'>
                         <label for='cantidad'class="col-sm-4 col-form-label col-form-label-sm" >Cantidad</label>
                         <div class="col-sm-6">
                             <input type='number' class='form-control form-control-sm @error('cantidad')  is-invalid @enderror' wire:model='cantidad'>                                
                             @error('cantidad')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                         </div>
                     </div>                     
                   

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeForm()">Cerrar</button>
                    <button type="button" @if($mode == 'create') wire:click="store()" @else wire:click="update()" @endif  class="btn btn-primary">
                      {{ $mode == 'create' ? 'Guardar' : 'Actualizar' }}
                    </button>
                </div>
            </div>
        </div>
    </div>
 {{--    /create /edit form--}}


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
                        <div class='form-group'><label for='alm_articulo_id'>Alm articulo id</label><input type='text' class='form-control @error('alm_articulo_id')  is-invalid @enderror' wire:model='alm_articulo_id'>@error('alm_articulo_id')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='cantidad'>Cantidad</label><input type='text' class='form-control @error('cantidad')  is-invalid @enderror' wire:model='cantidad'>@error('cantidad')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='devuelto'>Devuelto</label><input type='text' class='form-control @error('devuelto')  is-invalid @enderror' wire:model='devuelto'>@error('devuelto')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='fecha_devol'>Fecha devol</label><input type='text' class='form-control @error('fecha_devol')  is-invalid @enderror' wire:model='fecha_devol'>@error('fecha_devol')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>
<div class='form-group'><label for='alm_solicitudes_id'>Alm solicitudes id</label><input type='text' class='form-control @error('alm_solicitudes_id')  is-invalid @enderror' wire:model='alm_solicitudes_id'>@error('alm_solicitudes_id')<div class='invalid-feedback'>{{ $message }}</div>@enderror</div>

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
