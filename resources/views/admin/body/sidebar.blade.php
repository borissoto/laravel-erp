 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{asset('dist/img/salud_logo.jpg')}}" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
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
            @can('admin.rrhh')   
            <li class="nav-item"><a href="{{ route('rrhh.list') }}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Kardex</a></li>
            @endcan
            <li class="nav-item"><a href="{{ route('comisiones.index') }}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Comisiones</a></li>
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
            <li class="nav-item"><a href="{{ route('eess.list')}}" class="nav-link"><i class="fas fa-hospital-alt nav-icon"></i>Establecimientos</a></li>
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
            <p>Comisiones
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">            
            <li class="nav-item"><a href="{{ route('comisiones.index') }}" class="nav-link"><i class="fas fa-minus nav-icon"></i>Comisiones</a></li>
          </ul>
        </li>

        <li class="nav-header">Modulo Brigadas</li> 
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-ambulance nav-icon"></i> 
            <p>Brigadas
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="{{ route('brigadas.index')}}" class="nav-link"><i class="fas fa-briefcase-medical nav-icon"></i>Lista Brigadas</a></li>
            <li class="nav-item"><a href="{{ route('antigenos.index')}}" class="nav-link"><i class="fas fa-vial nav-icon"></i>Lista Antigeno</a></li>
            <li class="nav-item"><a href="{{ route('rastrillajes.index')}}" class="nav-link"><i class="fas fa-user-nurse nav-icon"></i>Lista Rastrillaje</a></li>
            <li class="nav-item"><a href="{{ route('vacunas.index')}}" class="nav-link"><i class="fas fa-syringe nav-icon"></i>Lista Vacunas</a></li>
                     
            
          </ul>
        </li>

             

        <li class="nav-header">Cronograma</li>
        
        <li class="nav-item">
          <a href="{{ route('calendario.index') }}" class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              Cronograma
              {{-- <span class="badge badge-info right">2</span> --}}
            </p>
          </a>
        </li>

        @can('admin.eess')  
        <li class="nav-header">Modulo Administracion</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-shopping-cart nav-icon"></i> 
            <p>Almacenes
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="{{ route('almacen.adm.partidas')}}" class="nav-link"><i class="far fa-circle nav-icon"></i>Administracion Almacenes</a></li>
            <li class="nav-item"><a href="{{ route('almacen.ingresos')}}" class="nav-link"><i class="far fa-circle nav-icon"></i>Comprobantes Ingreso</a></li>                       
            <li class="nav-item"><a href="{{ route('almacen.sal.solicitudes')}}" class="nav-link"><i class="far fa-circle nav-icon"></i>Registro Salidas</a></li>                       
            <li class="nav-item"><a href="" class="nav-link"><i class="far fa-circle nav-icon"></i>Solicitud Material</a></li>                       
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
            <li class="nav-item"><a href="{{ route('almacen.adm.partidas')}}" class="nav-link"><i class="far fa-circle nav-icon"></i>Administracion Almacenes</a></li>
            <li class="nav-item"><a href="{{ route('almacen.ingresos')}}" class="nav-link"><i class="far fa-circle nav-icon"></i>Comprobantes Ingreso</a></li>                       
            <li class="nav-item"><a href="{{ route('almacen.sal.solicitudes')}}" class="nav-link"><i class="far fa-circle nav-icon"></i>Registro Salidas</a></li>                       
            <li class="nav-item"><a href="" class="nav-link"><i class="far fa-circle nav-icon"></i>Solicitud Material</a></li>                       
          </ul>
        </li>


        @endcan  

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
            <li class="nav-item"><a href="{{ route('roles.index')}}" class="nav-link"><i class="far fa-circle nav-icon"></i>Roles y Permisos</a></li>          
          </ul>
        </li>
        @endcan
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
