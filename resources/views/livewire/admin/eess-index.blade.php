<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">                 
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-lightblue">
                        <h3 class="card-title"></h3> 
                        {{-- <input wire:model="search" type="form-control" placeholder="Buscar..." > --}}
                        <div class="d-inline-flex ">
                            <select wire:model="perPage" class="form-control-sm text-secondary border-light"> 
                                <option value="5">5 por página</option>
                                <option value="10">10 por página</option>
                                <option value="15">15 por página</option>
                                <option value="25">25 por página</option>
                                <option value="50">50 por página</option>
                                <option value="100">100 por página</option>
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
                    @if($establecimientos->count())
                    <!-- card-header -->
                    <div class="card-body pb-1">
                        {{-- <div class="table-responsive"> --}}
                            <table id="example1" class="table table-bordered table-striped text-sm">
                            <thead>
                                <tr>
                                    {{-- <th>N°</th> --}}
                                    <th>Establecimiento 
                                        <button wire:click="sorteable('nom_establecimiento')" class="border-0">
                                            <span class="fa fa{{$campo === 'nom_establecimiento' ? $icon : '-sort'}}"></span>                                         
                                        </button>
                                    </th>
                                    <th>Dpto</th>
                                    <th>Municipio</th>                              
                                    <th>Cod-Red</th>
                                    <th>Tipo
                                        <button wire:click="sorteable('tipo')" class="border-0">
                                            <span class="fa fa{{$campo === 'tipo' ? $icon : '-sort'}}"></span>                                         
                                        </button>
                                    </th>                                    
                                    <th>Nivel
                                        <button wire:click="sorteable('nivel')" class="border-0">
                                            <span class="fa fa{{$campo === 'nivel' ? $icon : '-sort'}}"></span>                                         
                                        </button>
                                    </th>
                                    <th>Cod-SNIS</th>                                    
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($establecimientos as $establecimiento) 
                                <tr>
                                    {{-- <td>{{ $establecimiento->firstItem()+$loop->index}}</td> --}}
                                    <td>{{ $establecimiento->nom_establecimiento}}</td>                                                     
                              <td>{{ $establecimiento->departamento->abreviatura}}</td>
                              <td>{{ $establecimiento->municipio->nom_municipio}}</td>                                                     
                              <td>{{ $establecimiento->cod_red}}</td>                                                     
                              <td>{{ $establecimiento->tipo}}</td>                             
                              <td>{{ $establecimiento->nivel}}</td>                                                     
                              <td>{{ $establecimiento->codsnis}}</td>                                                     
                                    <td width="20px">
                                        <div class="btn-group">
                                          {{-- <button type="button" class="btn btn-secondary">Action</button> --}}
                                          <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bars"></i>
                                            <span class="sr-only">Toggle Dropdown</span>
                                          </button>
                                          <div class="dropdown-menu" style="min-width: 1rem;" role="menu">
                                            <a class="dropdown-item" href="{{ route('rrhh.view', $establecimiento->id)}}">Ver</a>
                                            <a class="dropdown-item" href="{{ route('rrhh.edit', $establecimiento->id)}}">Editar</a>
                                            <a class="dropdown-item" href="#"></a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#modal-default" href="#">Asignar establecimientos</a>
                                            <a class="dropdown-item" href="#">Brigada</a>
                                          </div>
                                        </div>
                                        {{-- <a href="{{ route('rrhh.view', $establecimiento->id)}}" class="btn btn-secondary btn-light" title="Ver"><i class="fa fa-eye" aria-hidden="true"></i></a>      
                                        <a href="{{ route('rrhh.edit', $establecimiento->id)}}" class="btn btn-secondary btn-light" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></a>      
                                        <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target="#view-rrhh" >	Modal</button> --}}
                            
                                        {{-- <a href="" class="btn btn-secondary btn-light" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a>       --}}
                                      </td>                           
                                </tr>
                                @endforeach                         
                                </tbody>                       
                            </table>
                            <div class="d-flex justify-content-start text-muted">
                                Mostrando {{ $establecimientos->firstItem() }} to {{ $establecimientos->lastItem() }} de {{$establecimientos->total()}} registros.
                            </div>                                     
                        {{-- </div> --}}
                    </div>
        
                    <div class="card-footer">
                       
                        <div class="d-flex justify-content-end">
                            {{$establecimientos->links()}}                   
                        </div>
                    </div>
                    <!-- card-body -->
                    @else
                        <div class="card-body">
                            <h5>No hay registros</h5>
                        </div>
                    @endif
        
                </div>
                <!-- card -->          
                        
            </div>
            <!-- /.col -->
            </div>
            <!-- /.row -->
        
            <!-- Modal -->
        </div>
    </section>
    
</div>
