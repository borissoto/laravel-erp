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
            <div class="col-md-9 float-right">
                <button type="button"
                        class="btn btn-primary float-right"
                        wire:click="create">
                   {{ __('Nuevo Residente') }}
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
                                <th>Estado
                                    <button wire:click="sorteable('estado')" class="border-0">
                                        <span class="fa fa{{$campo === 'estado' ? $icon : '-sort'}}"></span>                                         
                                    </button>
                                </th>
                                <th>Usuario
                                    <button wire:click="sorteable('name')" class="border-0">
                                        <span class="fa fa{{$campo === 'name' ? $icon : '-sort'}}"></span>                                         
                                    </button>
                                </th>
                                <th>Nombres
                                    <button wire:click="sorteable('nombres')" class="border-0">
                                        <span class="fa fa{{$campo === 'nombres' ? $icon : '-sort'}}"></span>                                         
                                    </button>
                                </th>
                                <th>Ap Paterno
                                    <button wire:click="sorteable('ap_paterno')" class="border-0">
                                        <span class="fa fa{{$campo === 'ap_paterno' ? $icon : '-sort'}}"></span>                                         
                                    </button>
                                </th>
                                <th>Ap Materno
                                    <button wire:click="sorteable('ap_materno')" class="border-0">
                                        <span class="fa fa{{$campo === 'ap_materno' ? $icon : '-sort'}}"></span>                                         
                                    </button>
                                </th>
                                <th>CI</th>
                                <th>Ext</th>
                                {{-- <th>Cargo</th>                                 --}}
                                {{-- <th>Nivel</th>                           --}}
                                <th>Genero</th>                          
                                <th>Nacimiento</th>                          
                                <th>Telefono</th>
                                <th>Domicilio</th>
                                <th>Universidad</th>
                                <th>Grado</th>
                                
                                <th>Acciones</th>
                            </tr>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($rows as $row)
                    <tr> 
                        <td>{{ $row->id}}</td>
                        <td>{!! $row->estado === 1 ? '<span class="badge bg-success">ACTIVO</span>' : '<span class="badge bg-danger">INACTIVO</span>' !!}</td>
                        <td>{{ $row->name}}</td>
                        <td>{{ $row->nombres}}</td>
                        <td>{{ $row->ap_paterno}}</td>
                        <td>{{ $row->ap_materno}}</td>
                        <td>{{ $row->ci}}</td>
                        @if ($row->departamento === 0 || $row->departamento === null)
                        <td class="align-middle"><span class="badge bg-secondary">S/N</span></td>
                        @else    
                            <td>{{ $row->departamento->abreviatura}}</td>
                        @endif
                        {{-- @if ($row->cargos === 0 || $row->cargos === null)
                            <td class="align-middle"><span class="badge bg-secondary">No Cargo</span></td>
                        @else                 
                            <td class="align-middle">{{ $row->cargos->nom_cargo}}</td>  
                        @endif   --}}
                        {{-- <td>{{ $row->nivel}}</td> --}}
                        <td>{{ $row->sexo}}</td>
                        <td>{{ $row->fecha_nac}}</td>
                        <td>{{ $row->telefono}}</td>
                        <td>{{ $row->domicilio}}</td>
                        <td>{{ $row->universidad}}</td>
                        <td>{{ $row->grado}}</td>
                        
                       
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
                            </td></tr>@empty  <tr><td>No existen registros</td></tr>   @endforelse

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
                       <h5 class="modal-title" id="showFormLabel"> {{ $mode == 'create' ? 'Nuevo Residente' : 'Actualizar Residente ' }}</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <div class='form-group row'>
                            <label for='nombres' class="col-sm-2 col-form-label col-form-label-sm" >Nombres</label>
                            <div class="col-sm-4">
                                <input type='text' class='form-control form-control-sm @error('nombres')  is-invalid @enderror' wire:model='nombres'>
                                @error('nombres')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                            <label for='estado' class="col-sm-2 col-form-label col-form-label-sm" >Estado</label>
                            <div class="col-sm-4">
                                <select wire:model="estado" name="estado" id="estado" class="form-control form-control-sm">
                                        <option value="">Escoja Estado</option>
                                        <option value="1">ACTIVO</option>
                                        <option value="0">INACTIVO</option>
                                    </select>
                                    @error('estado') <span class="text-sm text-danger error">{{ $message }} </span>@enderror
                                </div>
                        </div>
                        <div class='form-group row'>
                            <label for='ap_paterno' class="col-sm-2 col-form-label col-form-label-sm" >Ap paterno</label>
                            <div class="col-sm-4">
                                <input type='text' class='form-control form-control-sm @error('ap_paterno')  is-invalid @enderror' wire:model='ap_paterno'>
                                @error('ap_paterno')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                        
                            <label for='ap_materno' class="col-sm-2 col-form-label col-form-label-sm" >Ap materno</label>
                            <div class="col-sm-4">
                                <input type='text' class='form-control form-control-sm @error('ap_materno')  is-invalid @enderror' wire:model='ap_materno'>
                                @error('ap_materno')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class='form-group row'>
                            <label for='ci' class="col-sm-2 col-form-label col-form-label-sm" >CI</label>
                            <div class="col-sm-4">
                                <input type='number' class='form-control form-control-sm @error('ci')  is-invalid @enderror' wire:model='ci'>
                                @error('ci')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>

                            <label for='adm_departamento_id' class="col-sm-2 col-form-label col-form-label-sm" >Ext</label>
                            <div class="col-sm-4">
                                <select wire:model="adm_departamento_id" id="adm_departamento_id" class="form-control form-control-sm" required>
                                        <option value="">-Escoja Extension-</option>
                                        <option value="1">LA PAZ</option>
                                        <option value="2">ORURO</option>
                                        <option value="3">POTOSI</option>
                                        <option value="4">COCHABAMBA</option>
                                        <option value="5">CHUQUISACA</option>
                                        <option value="6">TARIJA</option>
                                        <option value="7">PANDO</option>
                                        <option value="8">BENI</option>
                                        <option value="9">SANTA CRUZ</option>
                                    </select>                            
                                @error('adm_departamento_id') <span class="text-sm text-danger error">{{ $message }} </span>@enderror
                            </div>
                        </div>
                        <div class='form-group row'>
                            <label for='sexo' class="col-sm-2 col-form-label col-form-label-sm" >Genero</label>
                            <div class="col-sm-4">
                                <select wire:model="sexo" name="med" id="sexo" class="form-control form-control-sm">
                                    <option value="">-Genero-</option>
                                    <option value="MASCULINO">MASCULINO</option>
                                    <option value="FEMENINO">FEMENINO</option>
                                </select>
                                @error('sexo') <span class="text-sm text-danger error">{{ $message }} </span>@enderror
                            </div>
                        
                            <label for='fecha_nac' class="col-sm-2 col-form-label col-form-label-sm" >Fecha nac</label>
                            <div class="col-sm-4">
                                <input type='date' class='form-control form-control-sm @error('fecha_nac')  is-invalid @enderror' wire:model='fecha_nac'>
                                @error('fecha_nac')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class='form-group row'>
                            <label for='telefono' class="col-sm-2 col-form-label col-form-label-sm" >Telefono</label>
                            <div class="col-sm-4">
                                <input type='text' class='form-control form-control-sm @error('telefono')  is-invalid @enderror' wire:model='telefono'>
                                @error('telefono')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                        
                            <label for='domicilio' class="col-sm-2 col-form-label col-form-label-sm" >Domicilio</label>
                            <div class="col-sm-4">
                                <input type='text' class='form-control form-control-sm @error('domicilio')  is-invalid @enderror' wire:model='domicilio'>
                                @error('domicilio')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class='form-group row'>
                            <label for='universidad' class="col-sm-2 col-form-label col-form-label-sm" >Universidad</label>
                            <div class="col-sm-4">
                            <select wire:model="universidad"  id="UNIVERSIDAD" class="form-control form-control-sm">
                                <option value="">-Universidad de Egreso-</option>
                                <option value="ELAM-CUBA">ESCUELA LATINO AMERICANA DE MEDICINA (CUBA)</option>
                                <option value="ELAM-VENEZUELA">ESCUELA LATINO AMERICANA DE MEDICINA (VENEZUELA)</option>
                                <option value="U.G.R.M.">UNIVERSIDAD AUTONOMA GABRIEL RENE MORENO</option>
                                <option value="U.M.S.">UNIVERSIDAD AUTONOMA JUAN MISAEL SARACHO </option>
                                <option value="U.A.T.F.">UNIVERSIDAD AUTONOMA TOMAS FRIAS</option>
                                <option value="U.B.I.">UNIVERSIDAD BOLIVIANA DE INFORMATICA</option>
                                <option value="U.C.B.S.P.">UNIVERSIDAD CATOLICA BOLIVIANA SAN PABLO</option>
                                <option value="U.C.B.">UNIVERSIDAD CRISTIANA DE BOLIVIA</option>
                                <option value="UDABOL">UNIVERSIDAD DE AQUINO BOLIVIA</option>
                                <option value="U.M.S.A.">UNIVERSIDAD MAYOR DE SAN ANDRÉS</option>
                                <option value="U.M.S.S.">UNIVERSIDAD MAYOR DE SAN SIMÓN</option>
                                <option value="U.M.R.P.S.F.X.CH.">UNIVERSIDAD MAYOR REAL  Y PONTIFICIA DE SAN FRANCISCO XAVIER DE CHUQUISICA</option>
                                <option value="U.N.S.L.P.">UNIVERSIDAD NUESTRA SEÑORA DE LA PAZ</option>
                                <option value="UNIVALLE">UNIVERSIDAD PRIVADA DEL VALLE</option>
                                <option value="UPAL-ORURO">UNIVERSIDAD PRIVADA LATINOAMERICANA-UPAL ORURO </option>
                                <option value="U.P.E.A.">UNIVERSIDAD PUBLICA DE EL ALTO</option>
                                <option value="U.S.XX">UNIVERSIDAD SIGLO XX LLALLAGUA</option>
                                <option value="U.T.O.">UNIVERSIDAD TECNICA DE ORURO</option>
                                <option value="UTEPC">UNIVERSIDAD TECNICA PRIVADA COSMOS </option>
                                <option value="OTRAS UNIVERSIDADES">OTRA UNIVERSIDAD</option>
                            </select>
                            @error('universidad') <span class="text-sm text-danger error">{{ $message }} </span>@enderror
                            </div>
                        
                            <label for='grado' class="col-sm-2 col-form-label col-form-label-sm" >Titulo</label>
                            <div class="col-sm-4">
                                <input type='text' class='form-control form-control-sm @error('grado')  is-invalid @enderror' wire:model='grado'>
                                @error('grado')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class='form-group row'>
                            <label for='obs' class="col-sm-2 col-form-label col-form-label-sm" >Observaciones</label>
                            <div class="col-sm-10">
                                <textarea type='text' class='form-control form-control-sm @error('obs')  is-invalid @enderror' wire:model='obs'></textarea>
                                @error('obs')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </div>
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
                           Esta seguro que desea eliminar el registro?
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
