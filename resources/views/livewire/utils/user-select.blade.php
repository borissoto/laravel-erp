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
                        <h3 class="card-title"></h3> 
                        {{-- <input wire:model="search" type="form-control" placeholder="Buscar..." > --}}
                        <div class="d-inline-flex ">
                            <select wire:model="perPage" class="form-control-sm text-secondary border-1"> 
                                <option value="5">5 por página</option>
                                <option value="10">10 por página</option>
                                {{-- <option value="15">15 por página</option>
                                <option value="25">25 por página</option>
                                <option value="50">50 por página</option>
                                <option value="100">100 por página</option> --}}
                            </select>
                        </div>                     
        
                        <div class="card-tools">
                            <div class="input-group input-group-sm " style="width: 150px;">
                            <input wire:model="search" class="form-control float-right" placeholder="Buscar...">  
                            <div class="input-group-append">
                                <button class="btn btn-default disabled">
                                <i class="fas fa-search"></i>
                                </button>
                            </div>
                            </div>   
                        </div>
                        
                    </div>
                        <div class="card-body pb-0 mb-0">
                            <table class="table table-sm table-bordered table-striped text-sm shadow ">
                                <thead>
                                <tr>
                                    <th>Estado</th>
                                    <th>Municipio</th>
                                    <th>Nombres</th>
                                    <th>Ap Paterno</th>
                                    <th>Ap Materno</th>
                                    <th>CI</th>
                                    <th>Item</th>
                                    <th>Cargo</th>

                                    <th >
                                        <span >Sel</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($rows as $row)
                                <tr>
                                    <td class="align-middle">{!! $row->estado === 1 ? '<span class="badge bg-success">ACTIVO</span>' : ($row->estado === 2 ?  '<span class="badge bg-warning">BAJA</span>' : '<span class="badge bg-danger">INACTIVO</span>') !!}</td>
                                    @if ($row->establecimiento === 0 || $row->establecimiento === null)
                                        <td class="align-middle"><span class="badge bg-secondary">No Mun</span></td>
                                    @else
                                        <td class="align-middle">{{ $row->establecimiento->municipio->nom_municipio}}</td>
                                    @endif
                                    <td>{{ $row->nombres}}</td>
                                    <td>{{ $row->ap_paterno}}</td>
                                    <td>{{ $row->ap_materno}}</td>
                                    <td>{{ $row->ci}}</td>                        
                                    <td>{{ $row->item}}</td>
                                    <td>{{ $row->grado}}</td>
                                    <td>
                                        <a href="#" class="text-success" wire:click.prevent="selectedUser({{ $row->id }})"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-check-square" viewBox="0 0 16 16" stroke="green" stroke-width="2" stroke-linecap="round">
                                                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                <path stroke-width="1" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.235.235 0 0 1 .02-.022z" clip-rule="evenodd"/>
                                              </svg>
                                        </a>
                                  
                                        </td></tr>@empty  <tr><td>No Existen Registros</td></tr>   @endforelse
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

                </div>
            </div>
        </div>
    </div>
</section>


    {{--    create / edit form --}}

       <div class="modal fade" wire:ignore.self id="showForm" tabindex="-1" role="dialog" aria-labelledby="showFormLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="showFormLabel"> {{ $mode == 'create' ? 'Nuevo' : 'Actualizar ' }}</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <div class='form-group'>
                           <label for='name'>Name</label>
                           <input type='text' class='form-control @error('name')  is-invalid @enderror' wire:model='name'>
                           @error('name')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>
                        <div class='form-group'>
                            <label for='adm_establecimiento_id'>Adm establecimiento id</label>
                            <input type='text' class='form-control @error('adm_establecimiento_id')  is-invalid @enderror' wire:model='adm_establecimiento_id'>
                            @error('adm_establecimiento_id')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>
                        <div class='form-group'>
                            <label for='nombres'>Nombres</label>
                            <input type='text' class='form-control @error('nombres')  is-invalid @enderror' wire:model='nombres'>
                            @error('nombres')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>
                        <div class='form-group'>
                            <label for='ap_paterno'>Ap paterno</label>
                            <input type='text' class='form-control @error('ap_paterno')  is-invalid @enderror' wire:model='ap_paterno'>
                            @error('ap_paterno')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>
                        <div class='form-group'>
                            <label for='ap_materno'>Ap materno</label>
                            <input type='text' class='form-control @error('ap_materno')  is-invalid @enderror' wire:model='ap_materno'>
                            @error('ap_materno')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>
                        <div class='form-group'>
                            <label for='ci'>Ci</label>
                            <input type='text' class='form-control @error('ci')  is-invalid @enderror' wire:model='ci'>
                            @error('ci')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>
                        <div class='form-group'>
                            <label for='adm_departamento_id'>Adm departamento id</label>
                            <input type='text' class='form-control @error('adm_departamento_id')  is-invalid @enderror' wire:model='adm_departamento_id'>
                            @error('adm_departamento_id')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>
                        <div class='form-group'>
                            <label for='item'>Item</label><input type='text' class='form-control @error('item')  is-invalid @enderror' wire:model='item'>
                            @error('item')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>
                        <div class='form-group'>
                            <label for='grado'>Grado</label>
                            <input type='text' class='form-control @error('grado')  is-invalid @enderror' wire:model='grado'>
                            @error('grado')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>

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
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" wire:click="destroy()" class="btn btn-danger">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{--    /delete popup--}}
</div>
