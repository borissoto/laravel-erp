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
                   {{ __('Nueva Evaluacion') }}
                </button>
            </div>
        </div>
    </div>
    <div class="flex row card">
            <div class="card-body">
                <table width="100%" class="table table-sm table-bordered table-striped text-sm">
                    <thead>
                    <tr>

                        <th>Tema</th>
                        <th>Padre</th>
                        <th>Es hijo</th>
                        <th>Gestion</th>
                        <th>Nombre Evaluacion</th>
                        <th>Rango</th>
                        <th>Docente Calificador</th>

                        <th>
                            <span>Acciones</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($rows as $row)
                    <tr> 
                        <td>{{ $row->pe_curso_id}}</td>
                        <td>{{ $row->parent_id}}</td>
                        <td>{{ $row->is_children}}</td>
                        <td>{{ $row->gestion}}</td>
                        <td>{{ $row->nom_parcial}}</td>
                        <td>{{ $row->rango_max}}</td>
                        <td>{{ $row->docente_calificador}}</td>
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
                       <h5 class="modal-title" id="showFormLabel"> {{ $mode == 'create' ? 'Nueva Evaluacion' : 'Actualizar Evaluacion ' }}</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       {{-- <div class='form-group'>
                           <label for='pe_curso_id'>Pe curso id</label>
                           <input type='text' class='form-control @error('pe_curso_id')  is-invalid @enderror' wire:model='pe_curso_id'>
                           @error('pe_curso_id')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div> --}}
                        {{-- <div class='form-group'>
                            <label for='parent_id'>Parent id</label>
                            <input type='text' class='form-control @error('parent_id')  is-invalid @enderror' wire:model='parent_id'>
                            @error('parent_id')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>
                        <div class='form-group'>
                            <label for='is_children'>Is children</label>
                            <input type='text' class='form-control @error('is_children')  is-invalid @enderror' wire:model='is_children'>
                            @error('is_children')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div> --}}
                        <div class='form-group'>
                            <label for='gestion'>Gestion</label>
                            <input type='text' class='form-control form-control-sm @error('gestion')  is-invalid @enderror' wire:model='gestion'>
                            @error('gestion')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>
                        <div class='form-group'>
                            <label for='nom_parcial'>Nom parcial</label>
                            <input type='text' class='form-control form-control-sm @error('nom_parcial')  is-invalid @enderror' wire:model='nom_parcial'>
                            @error('nom_parcial')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>
                        <div class='form-group'>
                            <label for='rango_max'>Rango 1 al</label>
                            <input type='number' class='form-control form-control-sm @error('rango_max')  is-invalid @enderror' wire:model='rango_max'>
                            @error('rango_max')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>
                        <div class='form-group'>
                            <label>Docente calificador</label>
                            <div class="form-check">
                                <input type='radio' name="docente" class='form-check-input' wire:model='docente_calificador' /> <label class="form-check-label"> {{$jefe->nombres ?? ''}} {{$jefe->ap_paterno ?? ''}}</label>
                            </div>
                            <div class="form-check">
                                <input type='radio' name="docente" class='form-check-input' wire:model='docente_calificador'/><label class="form-check-label"> {{$instructor->nombres ?? ''}} </label>
                            </div>
                            @error('docente_calificador')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>

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
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar registro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                           Esta seguro que desea eliminar el registro?.
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
