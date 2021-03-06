 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{asset('img/salud_logo.jpg')}}" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SAFCI-Mi Salud</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar text-sm">
    <!-- Sidebar user panel (optional) -->
    {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image"><img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div> --}}

    <!-- SidebarSearch Form -->
    {{-- <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="{{ route('dashboard') }}" class="nav-link active">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Inicio
              {{-- <i class="right fas fa-angle-left"></i> --}}
            </p>
          </a>
        </li>

              
        <li class="nav-header">Modulo RRHH</li>  
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-users nav-icon"></i>
            <p>Recursos Humanos
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">
            @can('admin.rrhh.list')   
            <li class="nav-item"><a href="{{ route('rrhh.list') }}" class="nav-link"><i class="fas fa-minus nav-icon"></i>RRHH Administrador</a></li>
            <li class="nav-item"><a href="{{ route('rrhh.departamental') }}" class="nav-link"><i class="fas fa-minus nav-icon"></i>RRHH Departamental</a></li>
            <li class="nav-item"><a href="{{ route('rrhh.municipal') }}" class="nav-link"><i class="fas fa-minus nav-icon"></i>RRHH Municipal</a></li>
            <li class="nav-item"><a href="{{ route('rrhh.municipal') }}" class="nav-link"><i class="fas fa-minus nav-icon"></i>RRHH EESS</a></li>
            {{-- <li class="nav-item"><a href="{{ route('rrhh.municipal') }}" class="nav-link"><i class="fas fa-minus nav-icon"></i>RRHH Residentes </a></li> --}}
            @endcan            
          </ul>
        </li>
        
        @can('admin.eess')                               
        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-hospital-alt"></i>
            <p>
              Establecimiento de Salud
              <i class="right fas fa-angle-left"></i>
              {{-- <span class="badge badge-info right">2</span> --}}
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="{{ route('eess.list')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Establecimientos</a></li>
            <li class="nav-item"><a href="{{ route('comunidades.index')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Comunidades</a></li>
            <li class="nav-item"><a href="{{ route('municipios.index')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Municipios</a></li>                       
            <li class="nav-item"><a href="{{ route('redes.index')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Redes</a></li>
            <li class="nav-item"><a href="{{ route('departamentos.index')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Departamentos</a></li>
          </ul>
        </li>
        @endcan

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-user-friends nav-icon"></i>
            <p>Anuencias
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">            
            <li class="nav-item"><a href="{{ route('comisiones.index') }}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Solictud Anuencia</a></li>
            {{-- <li class="nav-item"><a href="{{ route('comisiones.index') }}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Anuencia Recibidas</a></li>             --}}
          </ul>
        </li>

        {{-- <li class="nav-item">
          <a href="{{ route('calendario.index') }}" class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              Cronograma
              <i class="right fas fa-angle-left"></i>
              {{-- <span class="badge badge-info right">2</span> --}}
            </p>
          </a>
          <ul class="nav nav-treeview">            
            <li class="nav-item"><a href="{{ route('calendario.index') }}" class="nav-link"><i class="fas  nav-icon"></i>Solicitud cronograma</a></li>
            <li class="nav-item"><a href="{{ route('calendario.index') }}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Cronogramas Recibidos</a></li>
          </ul>
        </li> --}}

        <li class="nav-header">Modulo Sala Situacional</li> 
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-ambulance nav-icon"></i> 
            <p>Brigadas
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="{{ route('brigadas.index')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Lista Brigadas</a></li>
            <li class="nav-item"><a href="{{ route('antigenos.index')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Lista Antigeno</a></li>
            <li class="nav-item"><a href="{{ route('rastrillajes.index')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Lista Rastrillaje</a></li>
            <li class="nav-item"><a href="{{ route('vacunas.index')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Lista Vacunas</a></li>
                     
            
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-book nav-icon"></i> 
            <p>Cuadernos
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="{{ route('cuadernos.index')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Importar</a></li>
            <li class="nav-item"><a href="{{ route('cuadernos.c1')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Cuadernos</a></li>
          </ul>
        </li>

        <li class="nav-header">Modulo Seguimiento Plan Estudios</li> 
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-graduation-cap nav-icon"></i> 
            <p>Plan de Estudios
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="{{ route('planestudios.residencias')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Administracion Pensum</a></li>            
            <li class="nav-item"><a href="{{ route('planestudios.materias')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Notas</a></li>
            <li class="nav-item"><a href="{{ route('planestudios.residentes')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Residentes</a></li>
                     
            
          </ul>
        </li>

        {{-- @can('admin.eess')   --}}
        <li class="nav-header">Modulo Administracion</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-shopping-cart nav-icon"></i> 
            <p>Almacenes
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="{{ route('almacen.adm.partidas')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Administracion Almacenes</a></li>
            <li class="nav-item"><a href="{{ route('almacen.ingresos')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Comprobantes Ingreso</a></li>                       
            <li class="nav-item"><a href="{{ route('almacen.sal.solicitudes')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Registro Salidas</a></li>                       
            <li class="nav-item"><a href="{{ route('almacen.solicitud')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Solicitud Material</a></li>                       
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-plane nav-icon"></i> 
            <p>Viajes
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="{{ route('viajes.index')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Solicitud Viajes</a></li>
            {{-- <li class="nav-item"><a href="{{ route('almacen.ingresos')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Viajes Recibidos</a></li>                        --}}
                                
          </ul>
        </li>


        {{-- @endcan   --}}

        {{-- @can('admin.eess')  
        <li class="nav-header">Modulo Inicio (Web)</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-file-alt nav-icon"></i> 
            <p>Articulos
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="" class="nav-link"><i class="far fa-circle nav-icon"></i>Categorias</a></li>
            <li class="nav-item"><a href="" class="nav-link"><i class="far fa-circle nav-icon"></i>Lista Articulos</a></li>                       
          </ul>
        </li>
        @endcan   --}}

        <li class="nav-header">Modulo Configuracion</li>
       
        {{-- <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-globe-americas nav-icon"></i> 
            <p>Division Territorial
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="{{ route('departamentos.index')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Departamentos</a></li>
            <li class="nav-item"><a href="{{ route('redes.index')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Redes</a></li>
            <li class="nav-item"><a href="{{ route('municipios.index')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Municipios</a></li>                       
            <li class="nav-item"><a href="{{ route('comunidades.index')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Comunidades</a></li>
          </ul>
        </li>    --}}

        @can('admin.eess')    
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-user-lock nav-icon"></i> 
            <p>Roles y Permisos
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="{{ route('roles.index')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Roles y Permisos</a></li>          
            <li class="nav-item"><a href="{{ route('configuracion.gestiones')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Gestiones</a></li>          
            <li class="nav-item"><a href="{{ route('configuracion.poa')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Poa</a></li>          
            <li class="nav-item"><a href="{{ route('configuracion.unidades')}}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Unidades</a></li>          
          </ul>
        </li>
        @endcan
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
