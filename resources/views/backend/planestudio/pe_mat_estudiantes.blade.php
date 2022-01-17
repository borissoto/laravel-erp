<div>
    @extends('admin.admin_master')
    @section('admin')
  
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-6">
          <div class="col-sm-8">
            <h1>
              Notas Estudiantes
           
            </h1>
          </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Notas</li>
            </ol>
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
 
  
    {{-- con blade --}}
    {{-- <div>
      @yield('kardex') 
    </div> --}}
    
    {{-- @livewire('admin.kardex-index', ['user'=>$user]) --}}
    {{-- @livewire('admin.kardex-index', ['user'=>$user->id]) --}}
    {{-- <livewire:admin.kardex-index :user="$user->id">  --}}


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
                        @if($users->count())
                        <!-- card-header -->
                        <div class="card-body pb-1">
                            {{-- <div class="table-responsive"> --}}
                                <table id="example1" class="table table-bordered table-striped text-sm">
                                <thead>
                                    <tr>
                                        {{-- <th>N°</th> --}}
                                        <th>Residente</th>
                                        <th>Nombres</th>                                        
                                        <th>Ap Paterno</th>
                                        <th>Ap Materno</th>
                                        <th>CI</th>
                                        <th>Nota</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user) 
                                    <tr>
                                        {{-- <td>{{ $user->firstItem()+$loop->index}}</td> --}}
                                        <td>{{ $user->pe_residente_id}}</td>
                                        <td>{{ $user->residente->nombres}}</td>
                                        <td>{{ $user->residente->ap_paterno}}</td>
                                        <td>{{ $user->residente->ap_materno}}</td>
                                        <td>{{ $user->residente->ci}}</td>
                                        {{-- <td>{{ $user->pe_residencia_id}}</td> --}}
                                        {{-- <td>{{ $user->ap_paterno}}</td>
                                        <td>{{ $user->ap_materno}}</td>
                                        <td>{{ $user->ci}}</td>                               --}}
                                        <td width="20px">
                                            <div class="btn-group">
                                            {{-- <button type="button" class="btn btn-secondary">Action</button> --}}
                                            <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bars"></i>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" style="min-width: 1rem;"  role="menu">                                        
                                                <a class="dropdown-item" href="{{route('role.edit', $user)}}">Editar</a>
                                            </div>
                                            </div>
                                            {{-- <a href="{{ route('rrhh.view', $user->id)}}" class="btn btn-secondary btn-light" title="Ver"><i class="fa fa-eye" aria-hidden="true"></i></a>      
                                            <a href="{{ route('rrhh.edit', $user->id)}}" class="btn btn-secondary btn-light" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></a>      
                                            <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target="#view-rrhh" >	Modal</button> --}}
                                
                                            {{-- <a href="" class="btn btn-secondary btn-light" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a>       --}}
                                        </td>                              
                                    </tr>
                                    @endforeach                         
                                    </tbody>                       
                                </table>
                                {{-- <div class="d-flex justify-content-start text-muted">
                                    Mostrando {{ $users->firstItem() }} to {{ $users->lastItem() }} de {{$users->total()}} registros.
                                </div>                                      --}}
                            {{-- </div> --}}
                        </div>
            
                        <div class="card-footer">
                           
                            {{-- <div class="d-flex justify-content-end">
                                {{$users->links()}}                   
                            </div> --}}
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
  
    @endsection
  </div>