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
                   {{ __('Nueva Gestion') }}
                </button>
            </div>
        </div>
    </div>
    <div class="flex row card">
            <div class="card-body">
                <table class="table table-sm table-bordered table-striped text-sm">
                    <thead>
                    <tr>

                        <th>Nivel de Formacion</th>
                        <th>Codigo</th>
                        <th>Gestion</th>
                        {{-- <th>Mes Inicio</th> --}}
                        {{-- <th>Gestion Fin</th> --}}
                        {{-- <th>Mes Fin</th> --}}
                        {{-- <th>Estado</th> --}}
                        <th>
                            <span>Acciones</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($rows as $row)
                    <tr> 
                        <td>{{ $row->nivel}}</td>
                        <td>{{ $row->nom_residencia}}</td>
                        <td>{{ $row->gestion_ini}}</td>
                        {{-- <td>{{ $row->mes_ini}}</td> --}}
                        {{-- <td>{{ $row->gestion_fin}}</td> --}}
                        {{-- <td>{{ $row->mes_fin}}</td> --}}
                        {{-- <td>{{ $row->estado}}</td> --}}
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
                            <a href="#" class="text-success" wire:click.prevent="diagram({{ $row->id }})"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diagram-3-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-6 8A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm6 0A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1z"/>
                                </svg>
                            </a>
                        </td></tr>@empty  <tr><td>0 registros encontrados</td></tr>   @endforelse

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
                       <h5 class="modal-title" id="showFormLabel"> {{ $mode == 'create' ? 'Nueva Residencia' : 'Actualizar Residencia' }}</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                        <div class='form-group row'>
                            <label class="col-sm-2 col-form-label col-form-label-sm text-right" for='nivel'>Nivel Formacion</label>
                            <div class="col-sm-2">
                                <select wire:model="nivel" id="nivel" class="form-control form-control-sm" {{ $flag == 1 ? 'disabled' : ''  }}  {{ $mode == 'create' ? '' : 'disabled' }}>                                         
                                    <option value="">-Elija Nivel de Formacion-</option>
                                    <option value="1">Nivel de Formacion <span style="font-weight: bolder"> 1er año </span></option>
                                    <option value="2">Nivel de Formacion 2do año</option>
                                    <option value="3">Nivel de Formacion 3er año</option>                                    
                                </select> 
                                @error('nivel')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>                      
                            <label class="col-sm-2 col-form-label col-form-label-sm text-right" for='nom_residencia'>Codigo Gestion</label>
                            <div class="col-sm-2">                            
                                <input type='text' class='form-control form-control-sm  @error('nom_residencia')  is-invalid @enderror' wire:model='nom_residencia' {{ $flag == 1 ? 'disabled' : '' }}>
                                @error('nom_residencia')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>

                            <label class="col-sm-2 col-form-label col-form-label-sm text-right" for='gestion_ini'>Gestion</label>
                            <div class="col-sm-2">
                                <select wire:model="gestion_ini"  name="gestion_ini" id="gestion_ini" class="form-control form-control-sm" {{ $flag == 1 ? 'disabled' : '' }}>
                                    <option value="" class="text-primary">Escoja Gestion*</option>
                                    @foreach ($gestiones as $gestion)
                                        <option value="{{ $gestion->gestion }}">{{ $gestion->gestion }}</option>
                                    @endforeach
                                </select>
                                @error('gestion_ini')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class='form-group row'>
                           

                            <div class="col-sm-6 d-flex justify-content-end">
                                <button type="button" @if($mode == 'create') wire:click="store()" @else wire:click="update()" @endif  class="btn btn-primary" {{ $flag == 1 ? 'disabled' : '' }}>
                                    {{ $mode == 'create' ? 'Guardar' : 'Actualizar' }}
                                </button>
                            </div>
                        
                            {{-- <label class="col-sm-3 col-form-label col-form-label-sm" for='mes_ini'>Mes inicio</label>
                            <div class="col-sm-3">
                                <select wire:model="mes_ini" id="mes_ini" class="form-control form-control-sm" {{ $flag == 1 ? 'disabled' : '' }}>                                         
                                    <option value="">-Elija Mes-</option>
                                    <option value="ENERO">ENERO</option>
                                    <option value="FEBRERO">FEBRERO</option>
                                    <option value="MARZO">MARZO</option>
                                    <option value="ABRIL">ABRIL</option>
                                    <option value="MAYO">MAYO</option>
                                    <option value="JUNIO">JUNIO</option>
                                    <option value="JULIO">JULIO</option>
                                    <option value="AGOSTO">AGOSTO</option>
                                    <option value="SEPTIEMBRE">SEPTIEMBRE</option>
                                    <option value="OCTUBRE">OCTUBRE</option>
                                    <option value="NOVIEMBRE">NOVIEMBRE</option>
                                    <option value="DICIEMBRE">DICIEMBRE</option>
                                </select> 
                                @error('mes_ini')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div> --}}
                        </div>
                        {{-- <div class='form-group row'>
                            <label class="col-sm-3 col-form-label col-form-label-sm" for='gestion_fin'>Gestion fin</label>
                            <div class="col-sm-3">
                                <select wire:model="gestion_fin"  name="gestion_fin" id="gestion_fin" class="form-control form-control-sm" {{ $flag == 1 ? 'disabled' : '' }}>
                                    <option value="" class="text-primary">Escoja Gestion*</option>
                                    @foreach ($gestiones as $gestion)
                                        <option value="{{ $gestion->gestion }}">{{ $gestion->gestion }}</option>
                                    @endforeach
                                </select>
                                @error('gestion_fin')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                            <label class="col-sm-3 col-form-label col-form-label-sm" for='mes_fin'>Mes fin</label>
                            <div class="col-sm-3">
                                <select wire:model="mes_fin" id="mes_fin" class="form-control form-control-sm" {{ $flag == 1 ? 'disabled' : '' }}>                                         
                                    <option value="">-Elija Mes-</option>
                                    <option value="ENERO">ENERO</option>
                                    <option value="FEBRERO">FEBRERO</option>
                                    <option value="MARZO">MARZO</option>
                                    <option value="ABRIL">ABRIL</option>
                                    <option value="MAYO">MAYO</option>
                                    <option value="JUNIO">JUNIO</option>
                                    <option value="JULIO">JULIO</option>
                                    <option value="AGOSTO">AGOSTO</option>
                                    <option value="SEPTIEMBRE">SEPTIEMBRE</option>
                                    <option value="OCTUBRE">OCTUBRE</option>
                                    <option value="NOVIEMBRE">NOVIEMBRE</option>
                                    <option value="DICIEMBRE">DICIEMBRE</option>
                                </select> 
                                @error('mes_fin')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                        </div> --}}
                        {{-- <div class='form-group row'>
                            <label class="col-sm-4 col-form-label col-form-label-sm" for='estado'>Estado</label>
                            <div class="col-sm-8">
                                <input type='text' class='form-control form-control-sm @error('estado')  is-invalid @enderror' wire:model='estado'>
                                @error('estado')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                        </div> --}}
               
                        
                        @if($showComponents) 
                        {{-- <input type="text" @if($mode == 'update') wire:click="edit()"  @else wire:click="create()" @endif  hidden> --}}
                        @livewire('plan-estudios.curso-index', ['nivel' => $nivel])   
                        
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
                <div class="modal-dialog " role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                           Esta seguro?
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

    {{--    diagrama --}}
    <div >
        <div class="modal fade" id="diagramModal" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Diagrama</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">    
                                                        
                        
                        <div class="organigrama">
                            <ul>
                                <li>
                                  <a href="#" >{{ $resi->nom_residencia ?? 'N/A'}} (
                                  {{ $resi->gestion_ini ?? 'N/A'}} 
                                  {{ $resi->mes_ini ?? 'N/A'}} -
                                  {{ $resi->gestion_fin ?? 'N/A'}}
                                  {{ $resi->mes_fin ?? 'N/A'}} )</a>
                                
                                    <ul>
                                        @if($modulos)
                                            @forelse ($modulos as $row)
                                                <li><a href="#" >{{$row->nom_modulo ?? ''}} {{$row->porcentaje.'%' ?? ''}}</a>
                                                    <ul>
                                                        @if($cursos) 
                                                        @php
                                                            // dd($modulos);                                                            
                                                            // dd($cursos);                                                            
                                                        @endphp
                                                            @forelse($cursos as $curso)
                                                            <li><a href="#" >{{$curso->nom_materia ?? ''}}</a></li>
                                                            @empty
                                                                No existe Cursos    
                                                            @endforelse
                                                        @endif

                                                    </ul>
                                                </li>
                                            @empty
                                                No existe Modulos
                                        
                                            @endforelse   
                                        @endif    
                                     
                                      
                                    </ul>
                                </li>
                            </ul>
                        </div>
                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
