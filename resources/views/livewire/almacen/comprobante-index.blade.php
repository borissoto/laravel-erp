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
            {{-- wire:click="create" --}}
            {{-- {{ route('almacen.ingresos.add')}} --}}
            <div class="col-md-9 float-right">
                <button type="button"  wire:click="create" class="btn btn-sm btn-primary float-right">
                    
                   {{ __('Nuevo Combrobante') }}
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
                        <th>Fecha</th>
                        <th>Proveedor</th>
                        <th>Tipo</th>                        
                        <th>Nro Factura</th>
                        <th>Numero</th>                                                
                        <th>Usuario</th>
                        <th scope="col">
                            <span class="sr-only">Acciones</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($rows as $row)
                    <tr> 
                        <td>{{ $row->id}}</td>
                        <td>{{ \Carbon\Carbon::parse($row->fecha)->format('Y-m-d')}}</td>
                        <td>{{ $row->proveedor}}</td>
                        <td>{{ $row->modalidad_ingreso}}</td>
                        <td>{{ $row->nro_factura}}</td>
                        <td>{{ $row->numero}}</td>                                                
                        <td>{{ $row->user_id}}</td>
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
                            </td>
                                </tr>@empty  <tr><td>No existen registros</td></tr>   @endforelse

                    </tbody>
                </table>
                <div class="p-2">
                    {{ $rows->links() }}
                </div>
        </div>


    </div>


    {{--    create / edit form --}}

        <div class="modal fade" wire:ignore.self id="showForm" tabindex="-1" role="dialog" aria-labelledby="showFormLabel" aria-hidden="true"> --}}
           <div class="modal-dialog modal-xl" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="showFormLabel"> {{ $mode == 'create' ? 'Nuevo Comprobante' : 'Actualizar Comprobante' }}</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div> 
                   <div class="modal-body">
                    
                        <div class='form-group row'>
                            <label for='proveedor' class="col-sm-1 col-form-label col-form-label-sm">Proveedor</label>
                            <div class="col-sm-2">
                                <input type='text' class='form-control form-control-sm @error('proveedor')  is-invalid @enderror' wire:model='proveedor' {{ $flag == 1 ? 'disabled' : '' }}>
                                @error('proveedor')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                        
                            <label for='modalidad_ingreso' class="col-sm-1 col-form-label col-form-label-sm">Tipo</label>
                            <div class="col-sm-2">
                                <select wire:model="modalidad_ingreso" id="modalidad_ingreso" class="form-control form-control-sm" {{ $flag == 1 ? 'disabled' : '' }}>
                                    <option value="">-Tipo Comprobante-</option>
                                    <option value="FACTURA">FACTURA</option>
                                    <option value="RECIBO">RECIBO</option>
                                    <option value="NOTA DE ENTREGA">NOTA DE ENTREGA</option>
                                    <option value="INVENTARIO INICIAL">INVENTARIO INICIAL</option>
                                </select>                                
                                @error('modalidad_ingreso')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                        
                            <label for='nro_factura' class="col-sm-1 col-form-label col-form-label-sm">Nro </label>
                            <div class="col-sm-2">
                                <input type='number' class='form-control form-control-sm @error('nro_factura')  is-invalid @enderror' wire:model='nro_factura' {{ $flag == 1 ? 'disabled' : '' }}>
                                @error('nro_factura')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                        
                            <label for='fecha' class="col-sm-1 col-form-label col-form-label-sm">Fecha</label>
                            <div class="col-sm-2">
                                <input type='date' class='form-control form-control-sm @error('fecha')  is-invalid @enderror' wire:model='fecha' {{ $flag == 1 ? 'disabled' : '' }}>
                                @error('fecha')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class='form-group row'>
                            <label for='obs' class="col-sm-1 col-form-label col-form-label-sm">Glosa</label>
                            <div class="col-sm-9">
                                <textarea class='form-control form-control-sm @error('obs')  is-invalid @enderror' wire:model='obs' {{ $flag == 1 ? 'disabled' : '' }}></textarea>
                                @error('obs')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>

                            <div class="col-sm-2 d-flex justify-content-center">
                                <button type="button" @if($mode == 'create') wire:click="store()" @else wire:click="update()" @endif  class="btn btn-primary" {{ $flag == 1 ? 'disabled' : '' }}>
                                    {{ $mode == 'create' ? 'Aceptar' : 'Actualizar' }}
                                </button>
                            </div>
                        </div>
                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                        

                   @if($showComponents) 
                   @livewire('almacen.articulo-index')
                   @livewire('almacen.ingreso-index')
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
</div>
