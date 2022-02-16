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
    {{-- <div>
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
    </div> --}}
    <div class="flex row card">
        <div class="card-body">
            <table width="100%" class="table table-sm table-bordered table-striped text-sm">
                <thead>
                <tr> 
                    <th colspan="100%" class="align-middle"> Jefe De Enseñanza </th>                    
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle">Escoja Jefe de Enseñanza para: EVALUACIONES TEORICO PRACTICAS y TRABAJO de INVESTIGACION</td>
                        <td>
                            <select wire:model="jefe"  name="jefe" class="form-control form-control-sm" required>
                                <option value="" class="text-primary">Jefe de Enseñanza*</option>
                                @foreach ($usuarios as $user)
                                    <option value="{{ $user->id }}">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno }}</option>
                                @endforeach
                            </select>                            
                        </td>
                        @error('jefe')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                    </tr>
                </tbody>
            </table>
            <div class="mx-auto" style="width: 200px;">
                PENSUM  <b> {{$nivel}}° AÑO</b>
            </div>
            @if($nivel == 1)
                <table width="100%" class="table table-sm table-bordered table-striped text-sm">
                    <thead>
                
                    <tr class="thead-dark"> 
                        <th colspan="100%">EVALUACION CONTINUA Y PERIODICA ROTE HOSPITALARIO</th>
                    </tr>
                    <tr style="background-color: lightblue">
                        
                        <th>Nro</th>
                        <th>Nombre Materia</th>
                        <th>Duracion</th>                    
                        <th>Nota Max.</th>                    
                        <th>Docente Calificador</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <td class="align-middle">1</td>
                            <td class="align-middle">OBSTETRICIA</td>
                            <td class="align-middle">2</td>                        
                            <td class="align-middle">50</td>                        
                            {{-- <td class="align-middle"> --}}
                                {{-- <select wire:model="dr_obs"  name="dr_obs" class="form-control form-control-sm" required> --}}
                                    {{-- <option value="" class="text-primary">Docente Instructor*</option> --}}
                                    {{-- @foreach ($obstetricia as $user) --}}
                                        {{-- <option value="{{ $user->id }}">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno }}</option> --}}
                                    {{-- @endforeach --}}
                                {{-- </select>                             --}}
                                {{-- @error('dr_obs')<div class='invalid-feedback'>{{ $message }}</div>@enderror --}}
                            {{-- </td>    --}}
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>   

                        </tr>
                        <tr>
                            
                            <td class="align-middle">2</td>
                            <td class="align-middle">GINECOLOGIA</td>
                            <td class="align-middle">1</td>
                            <td class="align-middle">50</td>
                            {{-- <td class="align-middle"> --}}
                                {{-- <select wire:model="dr_gin"  name="dr_gin" class="form-control form-control-sm" required> --}}
                                    {{-- <option value="" class="text-primary">Docente Instructor*</option> --}}
                                    {{-- @foreach ($usuarios as $user) --}}
                                        {{-- <option value="{{ $user->id }}">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno }}</option> --}}
                                    {{-- @endforeach --}}
                                {{-- </select>                             --}}
                                {{-- @error('dr_gin')<div class='invalid-feedback'>{{ $message }}</div>@enderror --}}
                            {{-- </td>    --}}
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>   

                        </tr>
                        <tr>
                            
                            <td class="align-middle">3</td>
                            <td class="align-middle">MEDICINA INTERNA</td>
                            <td class="align-middle">4</td>
                            <td class="align-middle">50</td>
                            {{-- <td class="align-middle"> --}}
                                {{-- <select wire:model="dr_int"  name="dr_int" class="form-control form-control-sm" required> --}}
                                    {{-- <option value="" class="text-primary">Docente Instructor*</option> --}}
                                    {{-- @foreach ($usuarios as $user) --}}
                                        {{-- <option value="{{ $user->id }}">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno }}</option> --}}
                                    {{-- @endforeach --}}
                                {{-- </select>                             --}}
                                {{-- @error('dr_int')<div class='invalid-feedback'>{{ $message }}</div>@enderror --}}
                            {{-- </td>    --}}
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>   

                        </tr>
                        <tr>
                            
                            <td class="align-middle">4</td>
                            <td class="align-middle">PEDIATRIA</td>
                            <td class="align-middle">2</td>
                            <td class="align-middle">50</td>
                            {{-- <td class="align-middle"> --}}
                                {{-- <select wire:model="dr_ped"  name="dr_ped" class="form-control form-control-sm" required> --}}
                                    {{-- <option value="" class="text-primary">Docente Instructor*</option> --}}
                                    {{-- @foreach ($usuarios as $user) --}}
                                        {{-- <option value="{{ $user->id }}">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno }}</option> --}}
                                    {{-- @endforeach --}}
                                {{-- </select>                             --}}
                                {{-- @error('dr_ped')<div class='invalid-feedback'>{{ $message }}</div>@enderror --}}
                            {{-- </td>    --}}
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>   

                        </tr>
                        <tr>
                            
                            <td class="align-middle">5</td>
                            <td class="align-middle">NEONATOLOGIA</td>
                            <td class="align-middle">1</td>
                            <td class="align-middle">50</td>
                            {{-- <td class="align-middle"> --}}
                                {{-- <select wire:model="dr_neo"  name="dr_neo" class="form-control form-control-sm" required> --}}
                                    {{-- <option value="" class="text-primary">Docente Instructor*</option> --}}
                                    {{-- @foreach ($usuarios as $user) --}}
                                        {{-- <option value="{{ $user->id }}">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno }}</option> --}}
                                    {{-- @endforeach --}}
                                {{-- </select>                             --}}
                                {{-- @error('dr_neo')<div class='invalid-feedback'>{{ $message }}</div>@enderror --}}
                            {{-- </td>    --}}
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>   

                        </tr>
                        <tr>
                            
                            <td class="align-middle">6</td>
                            <td class="align-middle">TRAUMATOLOGIA</td>
                            <td class="align-middle">1</td>
                            <td class="align-middle">50</td>
                            {{-- <td class="align-middle"> --}}
                                {{-- <select wire:model="dr_tra"  name="dr_tra" class="form-control form-control-sm" required> --}}
                                    {{-- <option value="" class="text-primary">Docente Instructor*</option> --}}
                                    {{-- @foreach ($usuarios as $user) --}}
                                        {{-- <option value="{{ $user->id }}">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno }}</option> --}}
                                    {{-- @endforeach --}}
                                {{-- </select>                             --}}
                                {{-- @error('dr_tra')<div class='invalid-feedback'>{{ $message }}</div>@enderror --}}
                            {{-- </td>    --}}
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>   

                        </tr>
                        <tr>
                            
                            <td class="align-middle">7</td>
                            <td class="align-middle">CIRUGIA</td>
                            <td class="align-middle">1</td>
                            <td class="align-middle">50</td>
                            {{-- <td class="align-middle"> --}}
                                {{-- <select wire:model="dr_cir"  name="dr_cir" class="form-control form-control-sm" required> --}}
                                    {{-- <option value="" class="text-primary">Docente Instructor*</option> --}}
                                    {{-- @foreach ($usuarios as $user) --}}
                                        {{-- <option value="{{ $user->id }}">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno }}</option> --}}
                                    {{-- @endforeach --}}
                                {{-- </select>                             --}}
                                {{-- @error('dr_cir')<div class='invalid-feedback'>{{ $message }}</div>@enderror --}}
                            {{-- </td> --}}
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>      

                        </tr>
                        
                    </tbody>
                </table>
                <table width="100%" class="table table-sm table-bordered table-striped text-sm">
                    <thead>
                        <tr class="thead-dark"> 
                            <th colspan="100%">EVALUACIONES TEORICO PRACTICAS TRIMESTRAL</th>
                        </tr>
                        <tr style="background-color: lightblue">
                            
                            <th>Nro</th>
                            <th>Nombre Materia</th>
                            <th>Nota Max.</th>                    
                            <th>Jefe de Enseñanza</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">1</td>
                            <td class="align-middle">PRIMERO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">2</td>
                            <td class="align-middle">SEGUNDO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">3</td>
                            <td class="align-middle">TERCERO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">4</td>
                            <td class="align-middle">CUARTO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>

                    </tbody>
                </table>
                <table width="100%" class="table table-sm table-bordered table-striped text-sm">
                    <thead>
                        <tr class="thead-dark"> 
                            <th colspan="100%">EVALUACIONES TEORICO PRACTICAS MENSUAL</th>
                        </tr>
                        <tr style="background-color: lightblue">
                            
                            <th>Nro</th>
                            <th>Nombre Materia</th>
                            <th>Nota Max.</th>                    
                            <th>Jefe de Enseñanza</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">1</td>
                            <td class="align-middle">MARZO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">2</td>
                            <td class="align-middle">ABRIL</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">3</td>
                            <td class="align-middle">MAYO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">4</td>
                            <td class="align-middle">JUNIO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">5</td>
                            <td class="align-middle">JULIO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">6</td>
                            <td class="align-middle">AGOSTO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">7</td>
                            <td class="align-middle">SEPTIEMBRE</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">8</td>
                            <td class="align-middle">OCTUBRE</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">9</td>
                            <td class="align-middle">NOVIEMBRE</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">10</td>
                            <td class="align-middle">DICIEMBRE</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">11</td>
                            <td class="align-middle">ENERO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">12</td>
                            <td class="align-middle">FEBRERO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                    </tbody>
                </table>
                <table width="100%" class="table table-sm table-bordered table-striped text-sm">
                    <thead>
                        <tr class="thead-dark"> 
                            <th colspan="100%">DEFENSA DE TRABAJO DE INVESTIGACION ANTE TRIBUNAL</th>
                        </tr>
                        <tr style="background-color: lightblue">

                            <th>Nro</th>
                            <th>DEFENSA ANTE TRIBUNAL EVALUADOR</th>
                            <th>Nota Max.</th>                    
                            <th>Jefe de Enseñanza</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">1</td>
                            <td class="align-middle">TRABAJO DE INVESTIGACION</td>                            
                            <td class="align-middle">20</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                    </tbody>
                </table>
                

                {{--                 Nivel 2            --}}
            @elseif($nivel == 2 )
                <table width="100%" class="table table-sm table-bordered table-striped text-sm">
                    <thead>
                
                    <tr class="thead-dark"> 
                        <th colspan="100%">EVALUACION CONTINUA Y PERIODICA ROTE HOSPITALARIO</th>
                    </tr>
                    <tr style="background-color: lightblue">

                        
                        <th>Nro</th>
                        <th>Nombre Materia</th>
                        <th>Duracion</th>                    
                        {{-- <th>Docente Calificador</th> --}}
                        <th>Jefe de Enseñanza</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <td class="align-middle">1</td>
                            <td class="align-middle">HERRAMIENTAS METODOLOGICAS  DE LA SAFCI</td>
                            <td class="align-middle">3</td>                        
                            {{-- <td class="align-middle">
                                <select wire:model="dr_2_1"  name="dr_2_1" class="form-control form-control-sm" required>
                                    <option value="" class="text-primary">Docente Instructor*</option>
                                    @foreach ($usuarios as $user)
                                        <option value="{{ $user->id }}">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno }}</option>
                                    @endforeach
                                </select>                            
                                @error('dr_2_1')<div class='invalid-feedback'>{{ $message }}</div>@enderror
                            </td>  --}}
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>  

                        </tr>
                        <tr>
                            
                            <td class="align-middle">2</td>
                            <td class="align-middle">PROMOCION DE SALUD Y GESTION PARTICIPATIVA LOCAL EN SALUD</td>
                            <td class="align-middle">2</td>
                            {{-- <td class="align-middle"> --}}
                                {{-- <select wire:model="dr_2_2"  name="dr_2_2" class="form-control form-control-sm" required> --}}
                                    {{-- <option value="" class="text-primary">Docente Instructor*</option> --}}
                                    {{-- @foreach ($usuarios as $user) --}}
                                        {{-- <option value="{{ $user->id }}">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno }}</option> --}}
                                    {{-- @endforeach --}}
                                {{-- </select>                             --}}
                                {{-- @error('dr_2_2')<div class='invalid-feedback'>{{ $message }}</div>@enderror --}}
                            {{-- </td> --}}
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     

                        </tr>
                        <tr>
                            
                            <td class="align-middle">3</td>
                            <td class="align-middle">INTERCULTURALIDAD</td>
                            <td class="align-middle">1</td>
                            {{-- <td class="align-middle"> --}}
                                {{-- <select wire:model="dr_2_3"  name="dr_2_3" class="form-control form-control-sm" required> --}}
                                    {{-- <option value="" class="text-primary">Docente Instructor*</option> --}}
                                    {{-- @foreach ($usuarios as $user) --}}
                                        {{-- <option value="{{ $user->id }}">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno }}</option> --}}
                                    {{-- @endforeach --}}
                                {{-- </select>                             --}}
                                {{-- @error('dr_2_3')<div class='invalid-feedback'>{{ $message }}</div>@enderror --}}
                            {{-- </td> --}}
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     

                        </tr>
                        <tr>
                            
                            <td class="align-middle">4</td>
                            <td class="align-middle">DISEÑO, ELABORACION, GESTION Y EVALUACION DE PROYECTOS EN SALUD</td>
                            <td class="align-middle">3</td>
                            {{-- <td class="align-middle"> --}}
                                {{-- <select wire:model="dr_2_4"  name="dr_2_4" class="form-control form-control-sm" required> --}}
                                    {{-- <option value="" class="text-primary">Docente Instructor*</option> --}}
                                    {{-- @foreach ($usuarios as $user) --}}
                                        {{-- <option value="{{ $user->id }}">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno }}</option> --}}
                                    {{-- @endforeach --}}
                                {{-- </select>                             --}}
                                {{-- @error('dr_2_4')<div class='invalid-feedback'>{{ $message }}</div>@enderror --}}
                            {{-- </td> --}}
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                           
                        </tr>
                        <tr>
                            
                            <td class="align-middle">5</td>
                            <td class="align-middle">METODOLOGIA DE INVESTIGACION</td>
                            <td class="align-middle">3</td>
                            {{-- <td class="align-middle"> --}}
                                {{-- <select wire:model="dr_2_5"  name="dr_2_5" class="form-control form-control-sm" required> --}}
                                    {{-- <option value="" class="text-primary">Docente Instructor*</option> --}}
                                    {{-- @foreach ($usuarios as $user) --}}
                                        {{-- <option value="{{ $user->id }}">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno }}</option> --}}
                                    {{-- @endforeach --}}
                                {{-- </select>                             --}}
                                {{-- @error('dr_2_5')<div class='invalid-feedback'>{{ $message }}</div>@enderror --}}
                            {{-- </td> --}}
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     

                        </tr>
                       
                    </tbody>
                </table>
                <table width="100%" class="table table-sm table-bordered table-striped text-sm">
                    <thead>
                        <tr class="thead-dark"> 
                            <th colspan="100%">EVALUACIONES TEORICO PRACTICAS TRIMESTRAL</th>
                        </tr>
                        <tr style="background-color: lightblue">
                            
                            <th>Nro</th>
                            <th>Nombre Materia</th>
                            <th>Nota Max.</th>                    
                            <th>Jefe de Enseñanza</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">1</td>
                            <td class="align-middle">HERRAMIENTAS METODOLOGICAS  DE LA SAFCI</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">2</td>
                            <td class="align-middle">PROMOCION DE SALUD Y GESTION PARTICIPATIVA LOCAL EN SALUD, INTERCULTURALIDAD</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">3</td>
                            <td class="align-middle">PROMOCION DE SALUD Y GESTION PARTICIPATIVA LOCAL EN SALUD, INTERCULTURALIDAD</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">4</td>
                            <td class="align-middle">METODOLOGIA DE INVESTIGACION</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>

                    </tbody>
                </table>
                <table width="100%" class="table table-sm table-bordered table-striped text-sm">
                    <thead>
                        <tr class="thead-dark"> 
                            <th colspan="100%">EVALUACIONES TEORICO PRACTICAS MENSUAL</th>
                        </tr>
                        <tr style="background-color: lightblue">
                            
                            <th>Nro</th>
                            <th>Nombre Materia</th>
                            <th>Nota Max.</th>                    
                            <th>Jefe de Enseñanza</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">1</td>
                            <td class="align-middle">MARZO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">2</td>
                            <td class="align-middle">ABRIL</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">3</td>
                            <td class="align-middle">MAYO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">4</td>
                            <td class="align-middle">JUNIO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">5</td>
                            <td class="align-middle">JULIO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">6</td>
                            <td class="align-middle">AGOSTO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">7</td>
                            <td class="align-middle">SEPTIEMBRE</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">8</td>
                            <td class="align-middle">OCTUBRE</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">9</td>
                            <td class="align-middle">NOVIEMBRE</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">10</td>
                            <td class="align-middle">DICIEMBRE</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">11</td>
                            <td class="align-middle">ENERO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">12</td>
                            <td class="align-middle">FEBRERO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                    </tbody>
                </table>
                <table width="100%" class="table table-sm table-bordered table-striped text-sm">
                    <thead>
                        <tr class="thead-dark"> 
                            <th colspan="100%">DEFENSA DE TRABAJO DE INVESTIGACION ANTE TRIBUNAL</th>
                        </tr>
                        <tr style="background-color: lightblue">

                            <th>Nro</th>
                            <th>DEFENSA ANTE TRIBUNAL EVALUADOR</th>
                            <th>Nota Max.</th>                    
                            <th>Jefe de Enseñanza</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">1</td>
                            <td class="align-middle">TRABAJO DE INVESTIGACION</td>                            
                            <td class="align-middle">20</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                    </tbody>
                </table>
           

                {{--                 Nivel 3            --}}
            @else
                <table width="100%" class="table table-sm table-bordered table-striped text-sm">
                    <thead>
                    
                    <tr class="thead-dark"> 
                        <th colspan="100%">EVALUACION CONTINUA Y PERIODICA </th>
                    </tr>
                    <tr style="background-color: lightblue">
    
                        <th>Nro</th>
                        <th>Nombre Materia</th>
                        <th>Duracion</th>                    
                        {{-- <th>Docente Calificador</th> --}}
                        <th>Jefe de Enseñanza</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <td class="align-middle">1</td>
                            <td class="align-middle">EPIDEMIOLOGIA</td>
                            <td class="align-middle">4</td>                        
                            {{-- <td class="align-middle"> --}}
                                {{-- <select wire:model="dr_3_1"  name="dr_3_1" class="form-control form-control-sm" required> --}}
                                    {{-- <option value="" class="text-primary">Docente Instructor*</option> --}}
                                    {{-- @foreach ($usuarios as $user) --}}
                                        {{-- <option value="{{ $user->id }}">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno }}</option> --}}
                                    {{-- @endforeach --}}
                                {{-- </select>                             --}}
                                {{-- @error('dr_3_1')<div class='invalid-feedback'>{{ $message }}</div>@enderror --}}
                            {{-- </td> --}}
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>    
    
                        </tr>
                        <tr>
                           
                            <td class="align-middle">2</td>
                            <td class="align-middle">GESTION PARTICIPATIVA MUNICIPAL</td>
                            <td class="align-middle">2</td>
                            {{-- <td class="align-middle"> --}}
                                {{-- <select wire:model="dr_3_2"  name="dr_3_2" class="form-control form-control-sm" required> --}}
                                    {{-- <option value="" class="text-primary">Docente Instructor*</option> --}}
                                    {{-- @foreach ($usuarios as $user) --}}
                                        {{-- <option value="{{ $user->id }}">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno }}</option> --}}
                                    {{-- @endforeach --}}
                                {{-- </select>                             --}}
                                {{-- @error('dr_3_2')<div class='invalid-feedback'>{{ $message }}</div>@enderror --}}
                            {{-- </td> --}}
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>    
    
                        </tr>
                        <tr>
                            
                            <td class="align-middle">3</td>
                            <td class="align-middle">HABILIDADES GERENCIALES</td>
                            <td class="align-middle">2</td>
                            {{-- <td class="align-middle"> --}}
                                {{-- <select wire:model="dr_3_3"  name="dr_3_3" class="form-control form-control-sm" required> --}}
                                    {{-- <option value="" class="text-primary">Docente Instructor*</option> --}}
                                    {{-- @foreach ($usuarios as $user) --}}
                                        {{-- <option value="{{ $user->id }}">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno }}</option> --}}
                                    {{-- @endforeach --}}
                                {{-- </select>                             --}}
                                {{-- @error('dr_3_3')<div class='invalid-feedback'>{{ $message }}</div>@enderror --}}
                            {{-- </td> --}}
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>    
    
                        </tr>
                        <tr>
                            
                            <td class="align-middle">4</td>
                            <td class="align-middle">EMERGENTOLOGIA DESASTRES-ATENCION PREHOSPITALARIA</td>
                            <td class="align-middle">4</td>
                            {{-- <td class="align-middle"> --}}
                                {{-- <select wire:model="dr_3_4"  name="dr_3_4" class="form-control form-control-sm" required> --}}
                                    {{-- <option value="" class="text-primary">Docente Instructor*</option> --}}
                                    {{-- @foreach ($usuarios as $user) --}}
                                        {{-- <option value="{{ $user->id }}">{{ $user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno }}</option> --}}
                                    {{-- @endforeach --}}
                                {{-- </select>                             --}}
                                {{-- @error('dr_3_4')<div class='invalid-feedback'>{{ $message }}</div>@enderror --}}
                            {{-- </td> --}}
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>    
    
                        </tr>                                         
                    </tbody>
                </table>
                <table width="100%" class="table table-sm table-bordered table-striped text-sm">
                    <thead>
                        <tr class="thead-dark"> 
                            <th colspan="100%">EVALUACIONES TEORICO PRACTICAS TRIMESTRAL</th>
                        </tr>
                        <tr style="background-color: lightblue">
                            
                            <th>Nro</th>
                            <th>Nombre Materia</th>
                            <th>Nota Max.</th>                    
                            <th>Jefe de Enseñanza</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">1</td>
                            <td class="align-middle">EPIDEMIOLOGIA</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">2</td>
                            <td class="align-middle">GESTION PARTICIPATIVA MUNICIPAL</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">3</td>
                            <td class="align-middle">HABILIDADES GERENCIALES</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">4</td>
                            <td class="align-middle">EMERGENTOLOGIA DESASTRES-ATENCION PREHOSPITALARIA</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>

                    </tbody>
                </table>
                <table width="100%" class="table table-sm table-bordered table-striped text-sm">
                    <thead>
                        <tr class="thead-dark"> 
                            <th colspan="100%">EVALUACIONES TEORICO PRACTICAS MENSUAL</th>
                        </tr>
                        <tr style="background-color: lightblue">
                            
                            <th>Nro</th>
                            <th>Nombre Materia</th>
                            <th>Nota Max.</th>                    
                            <th>Jefe de Enseñanza</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">1</td>
                            <td class="align-middle">MARZO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">2</td>
                            <td class="align-middle">ABRIL</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">3</td>
                            <td class="align-middle">MAYO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">4</td>
                            <td class="align-middle">JUNIO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">5</td>
                            <td class="align-middle">JULIO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">6</td>
                            <td class="align-middle">AGOSTO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">7</td>
                            <td class="align-middle">SEPTIEMBRE</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">8</td>
                            <td class="align-middle">OCTUBRE</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">9</td>
                            <td class="align-middle">NOVIEMBRE</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">10</td>
                            <td class="align-middle">DICIEMBRE</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">11</td>
                            <td class="align-middle">ENERO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                        <tr>
                            <td class="align-middle">12</td>
                            <td class="align-middle">FEBRERO</td>                            
                            <td class="align-middle">15</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                    </tbody>
                </table>
                <table width="100%" class="table table-sm table-bordered table-striped text-sm">
                    <thead>
                        <tr class="thead-dark"> 
                            <th colspan="100%">DEFENSA DE TRABAJO DE INVESTIGACION ANTE TRIBUNAL</th>
                        </tr>
                        <tr style="background-color: lightblue">

                            <th>Nro</th>
                            <th>DEFENSA ANTE TRIBUNAL EVALUADOR</th>
                            <th>Nota Max.</th>                    
                            <th>Jefe de Enseñanza</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">1</td>
                            <td class="align-middle">TRABAJO DE INVESTIGACION PROFUNDIDAD TESIS</td>                            
                            <td class="align-middle">20</td>
                            <td class="align-middle">
                                @if($nom_jefe)
                                    <span>{{ $nom_jefe->nombres.' '.$nom_jefe->ap_paterno.' '.$nom_jefe->ap_materno }}</span>
                                @else
                                    <span class="text-primary">Escoja Jefe Enseñanza <span>
                                @endif  
                            </td>     
                        </tr>
                    </tbody>
                </table>    
                
            @endif      
    </div>
    <div class="card-footer text-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" @if($mode == 'create') wire:click="store()" @else wire:click="update()" @endif  class="btn btn-primary">
          {{ $mode == 'create' ? 'Guardar' : 'Actualizar' }}
        </button>
    </div>
</div>

    {{-- <div class="flex row card">
            <div class="card-body">
                <table width="100%" class="table table-sm table-bordered table-striped text-sm">
                    <thead>
                    <tr>

                        <th>Nivel de Formacion</th>
                        <th>Nro</th>
                        <th>Nombre Tema (Materia)</th>
                        <th>Docente Califica</th>
                       
                        <th>
                            <span>Acciones</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($rows as $row)<tr> 
                        <td>{{ $row->modulo->residencia->nom_residencia.' ('.$row->modulo->residencia->gestion_ini.' '.$row->modulo->residencia->mes_ini.' - '.$row->modulo->residencia->gestion_fin.' '.$row->modulo->residencia->mes_fin.')' }}</td>
                        <td>{{ $row->modulo->nom_modulo}}</td>
                        <td>{{ $row->nom_materia}}</td>
                        <td>{{ $row->usuario->nombres.' '.$row->usuario->ap_paterno.' '.$row->usuario->ap_materno}}</td>
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


    </div> --}}


    {{--    create / edit form --}}

       {{-- <div class="modal fade" wire:ignore.self id="showForm" tabindex="-1" role="dialog" aria-labelledby="showFormLabel" aria-hidden="true">
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
                            <label for='pe_modulo_id'>Nro</label>
                            <select wire:model="pe_modulo_id"  name="pe_modulo_id" class="form-control form-control-sm" required>                                
                                <option value="" class="text-primary">Escoja Nro*</option>
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
                            <label for='nom_materia'>Nombre del Tema</label>
                            <input type='text' class='form-control @error('nom_materia')  is-invalid @enderror' wire:model='nom_materia'>
                            @error('nom_materia')<div class='invalid-feedback'>{{ $message }}</div>@enderror
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
       </div> --}}
    {{--    /create /edit form--}}


    {{--    delete popup--}}
    {{-- <div wire:ignore>
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
    </div> --}}
    {{--    /delete popup--}}
</div>
