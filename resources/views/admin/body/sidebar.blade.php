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
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Inicio
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>

        @can('admin.rrhh')         
        <li class="nav-header">Modulo RRHH</li>  
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-users nav-icon"></i>
            <p>Recursos Humanos
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="{{ route('rrhh.list') }}" class="nav-link"><i class="far fa-circle nav-icon"></i>Lista Usuarios</a></li>
            <li class="nav-item"><a href="{{ route('rrhh.add') }}" class="nav-link"><i class="far fa-circle nav-icon"></i>Nuevo Usuario</a></li>
          </ul>
        </li>
        @endcan

        @can('admin.eess')         
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-hospital-alt nav-icon"></i> 
            <p>Establecimientos de Salud
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="{{ route('eess.list') }}" class="nav-link"><i class="far fa-circle nav-icon"></i>Lista EESS</a></li>
            <li class="nav-item"><a href="{{ route('eess.add') }}" class="nav-link"><i class="far fa-circle nav-icon"></i>Nuevo EESS</a></li>            
            <li class="nav-item"><a href="{{ route('eess.tipo.list') }}" class="nav-link"><i class="far fa-circle nav-icon"></i>Tipo EESS</a></li>          
          </ul>
        </li>
        @endcan

        <li class="nav-header">Modulo Brigadas</li> 
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-ambulance nav-icon"></i> 
            <p>Brigadas
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="{{ route('brigadas.index')}}" class="nav-link"><i class="far fa-circle nav-icon"></i>Lista Brigadas</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>Nueva Brigada</a></li>            
            
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-vial nav-icon"></i> 
            <p>Antigeno
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="{{ route('antigenos.index')}}" class="nav-link"><i class="far fa-circle nav-icon"></i>Lista Antigeno</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>Nueva Antigeno</a></li>            
            
          </ul>
        </li>
        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-user-nurse nav-icon"></i> 
            <p>Rastrillaje
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="{{ route('rastrillajes.index')}}" class="nav-link"><i class="far fa-circle nav-icon"></i>Lista Rastrillaje</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>Nueva Rastrillaje</a></li>            
            
          </ul>
        </li>      
        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-syringe nav-icon"></i> 
            <p>Vacunas
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="{{ route('vacunas.index')}}" class="nav-link"><i class="far fa-circle nav-icon"></i>Lista Vacunas</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>Nueva Vacunas</a></li>            
            
          </ul>
        </li>        

        <li class="nav-header">Cronograma</li>
        
        <li class="nav-item">
          <a href="{{ route('calendario.index') }}" class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              Calendario
              {{-- <span class="badge badge-info right">2</span> --}}
            </p>
          </a>
        </li>

        <li class="nav-header">Modulo Administracion</li>
       
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-compass nav-icon"></i> 
            <p>Locaciones
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="{{ route('red.list')}}" class="nav-link"><i class="far fa-circle nav-icon"></i>Lista Redes</a></li>
            <li class="nav-item"><a href="{{ route('municipio.list')}}" class="nav-link"><i class="far fa-circle nav-icon"></i>Lista Municipios</a></li>                       
          </ul>
        </li>   

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-map-signs nav-icon"></i> 
            <p>Comunidades
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>Comunidades(EESS)</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>Nueva Comunidad</a></li>            
          </ul>
        </li>
        
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
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
