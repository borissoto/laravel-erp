<div>
    @if (session()->has('message'))
        <div class="flex mx-auto">
            <div class="alert alert-success">
                <span class="inline-block align-middle mr-8">
                <b class="capitalize">{{ __('Success') }}!</b> {{ session('message') }}
                </span>
                <button wire:click="clearFlash()"
                        class="float-right btn-xs btn btn-outline-light">
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
            
            {{-- <div class="col-md-9 float-right">
                <button type="button"
                        class="btn btn-primary float-right"
                        wire:click="create">
                   {{ __('Nuevo Registro') }}
                </button>
            </div> --}}
        </div>
    </div>
    <br/>
    <div class="card">
        <h5 class="card-header"><span>{{$nom_curso.' - '.$cod_curso}}</span></h5>
        <div class="card-body">
                
               
                
                <table class="table table-sm table-bordered table-striped text-sm">
                    <thead>
                    <tr>                        
                     
                        <th>Id</th>
                        <th>Curso</th>
                        <th>Codigo</th>
                        <th>Residente</th>
                        <th>Nota</th>
                        {{-- <th>RANGO MAX</th> --}}
                        <th>Fecha Calificacion</th>
                        {{-- <th>EdPerm</th> --}}
                        <th>Docente Calificador</th>
                        <th><span>Calificar</span></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($rows as $row)
                    <tr>
                        <td>{{ $row->materia->id}}</td>
                        <td>{{ $row->materia->nom_materia}}</td>
                        <td>{{ $row->materia->cod_materia}}</td>
                        <td style="background-color: lightblue" >{{ $row->usuario->nombres.' '.$row->usuario->ap_paterno.' '.$row->usuario->ap_materno}}</td>
                        <td>{{ $row->nota}}</td>
                        {{-- <td>{{ $row->rango_max}}</td> --}}
                        <td>{{ $row->fecha}}</td>
                        <td>{{ $row->docente}}</td>
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

       <div class="modal fade" wire:ignore.self id="showForm" tabindex="-1" role="dialog" aria-labelledby="showFormLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="showFormLabel"> {{ $mode == 'create' ? 'Calificar' : 'Actualizar Calificacion ' }}</h5>
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
                            <label for='user_id'>User id</label>
                            <input type='text' class='form-control @error('user_id')  is-invalid @enderror' wire:model='user_id'>
                            @error('user_id')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div> --}}
                        <div class='form-group'>
                            <label for='nota'>Nota</label>
                            <input type='number' class='form-control @error('nota')  is-invalid @enderror' wire:model='nota'>
                            @error('nota')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div>
                        {{-- <div class='form-group'>
                            <label for='rango_max'>Rango max</label>
                            <input type='text' class='form-control @error('rango_max')  is-invalid @enderror' wire:model='rango_max'>
                            @error('rango_max')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div> --}}
                        {{-- <div class='form-group'>
                            <label for='docente'>Docente</label>
                            <input type='text' class='form-control @error('docente')  is-invalid @enderror' wire:model='docente'>
                            @error('docente')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div> --}}
                        {{-- <div class='form-group'>
                            <label for='fecha'>Fecha</label>
                            <input type='text' class='form-control @error('fecha')  is-invalid @enderror' wire:model='fecha'>
                            @error('fecha')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                        </div> --}}
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
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                           Esta segur@ de eliminar el registro?
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
