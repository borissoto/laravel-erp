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
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h3 class="card-title"> </h3>
                            <div class="d-inline-flex ">
                                <select wire:model="perPage" class="fomr-control form-control-sm text-secondary border-1"> 
                                    <option value="5">5 por página</option>
                                    <option value="10">10 por página</option>
                                    <option value="15">15 por página</option>
                                    {{-- <option value="25">25 por página</option>
                                    <option value="50">50 por página</option>
                                    <option value="100">100 por página</option> --}}
                                </select>
                            </div>
                            <button type="button" wire:click="create" class="btn btn-success btn-sm " data-toggle="modal" data-target="#articuloAdd" >
                                {{ __('Nuevo Articulo') }}
                            </button>
                           <span>  &emsp;&emsp;&emsp; SELECCIONAR ARTICULOS QUE INGRESARAN A ALMACENES </span>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input wire:model="search" class="form-control float-right" placeholder="Buscar...">
                                       <div class="input-group-append">
                                        <button class="btn btn-default disabled">
                                          <i class="fas fa-search"></i>
                                        </button>
                                      </div>
                                </div>                        
                            </div>
                        </div>
                        @if ($rows->count())
                            
                        
                        <div class="card-body pb-1">
                            <table  class="table table-sm table-bordered table-striped text-sm">
                                <thead>
                                    <tr>
                                        
                                        <th>Id</th>
                                        <th>Codigo</th>
                                        <th>Descripcion</th>
                                        <th>Unidad</th>
                                        <th>Marca</th>
                                        <th>Existencia minima</th>
                                        <th>Subgrupo</th>                                    
                                        <th>Usuario</th>
                                        <th scope="col">
                                            <span class="sr-only">Acciones</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($rows as $row)
                                <tr> 
                                    
                                    <td>{{ $row->id}}</td>
                                    <td>{{ $row->codigo}}</td>
                                    <td>{{ $row->descrip}}</td>
                                    <td>{{ $row->unidad->unidad}}</td>
                                    <td>{{ $row->marca}}</td>
                                    <td>{{ $row->existencia_min}}</td>
                                    <td>{{ $row->subgrupo->descrip}}</td>                                
                                    <td>{{ $row->user_id}}</td>
                                    <td>
                                        <a href="#" class="text-primary" wire:click.prevent="edit({{ $row->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" style="width:20px; height: 20px;" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        {{-- <a href="#" class="text-danger" wire:click.prevent="confirmDelete({{ $row->id }})"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" style="width:20px; height: 20px;" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                        </a> --}}
                                        <a href="#" class="text-success" wire:click.prevent="selectedArticulo({{ $row->id }})"> 
                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-check-square" viewBox="0 0 16 16" stroke="green" stroke-width="2" stroke-linecap="round">
                                                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                <path stroke-width="1" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.235.235 0 0 1 .02-.022z" clip-rule="evenodd"/>
                                              </svg> --}}

                                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16" stroke="green"  stroke-width="2" stroke-linecap="round">
                                                <path stroke-width="1" fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                                              </svg>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                              
                              
            
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-start text-sm text-muted pb-0 mb-0">
                                Mostrando del {{ $rows->firstItem() }} al {{ $rows->lastItem() }} de {{$rows->total()}} registros.
                            </div>  
                            
                        </div>
                        <div class="card-footer pt-1 mt-0 pb-0 mb-0 text-sm">
                            <div class="d-flex justify-content-end pt-1 mt-0 pb-0 mb-0 text-sm">
                                {{ $rows->links() }}
                            </div>

                        </div>
                        @else
                        <div class="card-body">
                            <h5>No existen registros</h5>
                        </div>
                        @endif


                    </div>
                </div>
                
                
              
            </div>
        </div>

    </section>
    
       


    


    {{--    create / edit form --}}

       <div class="modal fade" wire:ignore.self id="articuloAdd" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="showFormLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="showFormLabel"> {{ $mode == 'create' ? 'Nuevo Articulo' : 'Actualizar Articulo' }}</h5>
                       <button type="button" class="close" wire:click="closeForm()" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                      
                        <div class='form-group row'>
                            <label for='descrip' class="col-sm-2 col-form-label col-form-label-sm">Descripcion</label>
                            <div class="col-sm-10">
                                <input type='text' class='form-control form-control-sm @error('descrip')  is-invalid @enderror' wire:model='descrip'>
                                @error('descrip')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class='form-group row'>
                            <label for='codigo' class="col-sm-2 col-form-label col-form-label-sm">Codigo</label>
                            <div class="col-sm-4">
                                <input type='number' class='form-control form-control-sm @error('codigo')  is-invalid @enderror' wire:model='codigo'>
                                @error('codigo')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                        
                            <label for='marca' class="col-sm-2 col-form-label col-form-label-sm">Marca</label>
                            <div class="col-sm-4">
                                <input type='text' class='form-control form-control-sm @error('marca')  is-invalid @enderror' wire:model='marca'>
                                @error('marca')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class='form-group row'>
                            <label for='unidad' class="col-sm-2 col-form-label col-form-label-sm">Unidad</label>
                            <div class="col-sm-4">
                                <select wire:model="alm_unidad_id" name="alm_unidad_id" class="form-control form-control-sm" required>
                                    <option value="" class="text-primary">-Escoja Unidad-</option>
                                    @foreach ($unidades as $unidad)
                                        <option value="{{ $unidad->id }}">{{ $unidad->unidad }}</option>
                                    @endforeach
                                </select>                                
                                @error('alm_unidad_id') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                            </div>

                            <label for='alm_subgrupo_id' class="col-sm-2 col-form-label col-form-label-sm">Subgrupo</label>
                            <div class="col-sm-4">
                                <select wire:model="alm_subgrupo_id" name="subgrupo" class="form-control form-control-sm" required>
                                    <option value="" class="text-primary">-Escoja subgrupo-</option>
                                    @foreach ($subgrupos as $subgrupo)
                                        <option value="{{ $subgrupo->id }}">{{ $subgrupo->descrip }}</option>
                                    @endforeach
                                </select>   
                                @error('alm_subgrupo_id') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                            </div>
                       
                           
                        </div>
                        <div class='form-group row'>                            
                  
                            <label for='clase' class="col-sm-2 col-form-label col-form-label-sm">Clase</label>
                            <div class="col-sm-4">
                                <select wire:model="clase" id="modalidad_ingreso" class="form-control form-control-sm">
                                    <option value="">-Tipo Comprobante-</option>
                                    <option value="FUNGIBLE">FUNGIBLE</option>
                                    <option value="NO FUNGIBLE">NO FUNGIBLE</option>                                    
                                </select> 
                                @error('clase') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                            </div>

                            <label for='existencia_min' class="col-sm-2 col-form-label col-form-label-sm">Existencia minima</label>
                            <div class="col-sm-4">
                                <input type='number' class='form-control form-control-sm @error('existencia_min')  is-invalid @enderror' wire:model='existencia_min'>
                                @error('existencia_min') <span class="text-sm text-danger error">{{ $message }}</span>@enderror 
                            </div>
                        </div>

                      
                       

                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" wire:click="closeForm()" >Cerrar</button>
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
                            <h5 class="modal-title" id="exampleModalLabel">Esta seguro?</h5>
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


    {{--    select item--}}
    <div class="modal fade" wire:ignore.self id="showFormAddArticulo" tabindex="-1" role="dialog" aria-labelledby="showFormLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="showFormLabel"> {{ $mode == 'create' ? 'Nuevo Articulo' : 'Actualizar Articulo' }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class='form-group row'>
                        <label for='cantidad' class="col-sm-2 col-form-label col-form-label-sm">Cantidad</label>
                        <div class="col-sm-10">
                            <input type='text' class='form-control form-control-sm @error('cantidad')  is-invalid @enderror' wire:model='cantidad'>
                            @error('cantidad')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>
                    </div>
                    <div class='form-group row'>
                        <label for='total' class="col-sm-2 col-form-label col-form-label-sm">Valor Total</label>
                        <div class="col-sm-4">
                            <input type='number' class='form-control form-control-sm @error('total')  is-invalid @enderror' wire:model='total'>
                            @error('total')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>                    
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" wire:click="storeArticulo()"  class="btn btn-primary">
                      {{ $mode == 'create' ? 'Guardar' : 'Actualizar' }}
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{--    /select item--}}
</div>
