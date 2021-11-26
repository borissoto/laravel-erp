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
                   {{ __('Nuevo Tema') }}
                </button>
            </div>
        </div>
    </div>
    <div class="flex row card">
            <div class="card-body">
                <table width="100%" class="table table-sm table-bordered table-striped text-sm">
                    <thead>
                    <tr>

                        <th>Residencia</th>
                        <th>Modulo</th>
                        <th>Nombre Tema (Curso)</th>
                        <th>Jefe de Enseñanza</th>
                        <th>Instructor</th>
                        <th>
                            <span>Acciones</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($rows as $row)<tr> 
                        <td>{{ $row->modulo->residencia->nom_residencia.' ('.$row->modulo->residencia->gestion_ini.' '.$row->modulo->residencia->mes_ini.' - '.$row->modulo->residencia->gestion_fin.' '.$row->modulo->residencia->mes_fin.')' }}</td>
                        <td>{{ $row->modulo->nom_modulo}}</td>
                        <td>{{ $row->nom_curso}}</td>
                        <td>{{ $row->usuario->nombres.' '.$row->usuario->ap_paterno.' '.$row->usuario->ap_materno}}</td>
                        <td>{{ $row->instructor ? $row->docinstructor->nombres.' '.$row->docinstructor->ap_paterno.' '.$row->docinstructor->ap_materno : 'N/A'}}</td>
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
                            </td></tr>@empty  <tr><td>0 Registros Econtrados</td></tr>   @endforelse

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
                       <h5 class="modal-title" id="showFormLabel"> {{ $mode == 'create' ? 'Nuevo Tema' : 'Actualizar Tema' }}</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                    </div>
                    <div class="modal-body">
                        <div class='form-group'>
                            <label for='pe_residencia_id'>Residencia</label>
                            <select wire:model="selectedResidencia"  name="pe_residencia_id" class="form-control form-control-sm" required>
                                <option value="" class="text-primary">Escoja Residencia*</option>
                                @foreach ($residencias as $residencia)
                                    <option value="{{ $residencia->id }}">{{ $residencia->residencia.' '.$residencia->gestion_ini.' '.$residencia->mes_ini.' - '.$residencia->gestion_fin.' '.$residencia->mes_fin }}</option>
                                @endforeach
                            </select>
                            
                        </div>
                        @if (!is_null($selectedResidencia))
                        <div class='form-group'>
                            <label for='pe_modulo_id'>Modulo</label>
                            <select wire:model="pe_modulo_id"  name="pe_modulo_id" class="form-control form-control-sm" required>                                
                                <option value="" class="text-primary">Escoja Modulo*</option>
                                @foreach ($modulos as $modulo)
                                <option value="{{ $modulo->id }}">{{ $modulo->nom_modulo }}</option>
                                @endforeach
                            </select>
                            @error('pe_modulo_id')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>                            
                        @endif
                        <div class='form-group'>
                            <label for='user_id'>Jefe de Enseñanza</label>
                            <select wire:model="user_id"  name="user_id" class="form-control form-control-sm" required>
                                <option value="" class="text-primary">Escoja Jefe de Enseñaza*</option>
                                @foreach ($usuarios as $user)
                                    <option value="{{ $user->id }}">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno }}</option>
                                @endforeach
                            </select>                            
                            @error('user_id')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>
                        <div class='form-group'>
                            <label for='instructor'>Instructor</label>
                            <select wire:model="instructor"  name="instructor" class="form-control form-control-sm" required>
                                <option value="" class="text-primary">Escoja Instructor*</option>
                                @foreach ($usuarios as $user)
                                <option value="{{ $user->id }}">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno }}</option>
                                @endforeach
                            </select>                            
                            @error('instructor')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>
                        <div class='form-group'>
                            <label for='nom_curso'>Nombre del Tema</label>
                            <input type='text' class='form-control @error('nom_curso')  is-invalid @enderror' wire:model='nom_curso'>
                            @error('nom_curso')<div class='invalid-feedback'>{{ $message }}</div>@enderror
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
                           Esta seguro?
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
