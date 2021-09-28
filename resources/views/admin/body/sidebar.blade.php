 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{asset('dist/img/salud_logo.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
          
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-users nav-icon"></i>
            <p>Recursos Humanos
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="{{ route('rrhh.list') }}" class="nav-link"><i class="far fa-circle nav-icon"></i>Lista Usuarios</a></li>
            <li class="nav-item"><a href="{{ route('rrhh.add') }}" class="nav-link"><i class="far fa-circle nav-icon"></i>Añadir Usuario</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-hospital-alt nav-icon"></i> 
            <p>Establecimientos de Salud
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="{{ route('eess.list') }}" class="nav-link"><i class="far fa-circle nav-icon"></i>Lista EESS</a></li>
            <li class="nav-item"><a href="{{ route('eess.add') }}" class="nav-link"><i class="far fa-circle nav-icon"></i>Añadir EESS</a></li>            
            <li class="nav-item"><a href="{{ route('eess.tipo.list') }}" class="nav-link"><i class="far fa-circle nav-icon"></i>Tipo EESS</a></li>          
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-tasks nav-icon"></i> 
            <p>Administracion
              <i class="right fas fa-angle-left"></i>
            </p>            
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="{{ route('red.list')}}" class="nav-link"><i class="far fa-circle nav-icon"></i>Lista Redes</a></li>
            <li class="nav-item"><a href="{{ route('municipio.list')}}" class="nav-link"><i class="far fa-circle nav-icon"></i>Lista Municipios</a></li>            
            <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i>Tipo EESS</a></li>          
          </ul>
        </li>
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

 {{-- <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{ asset('backend/images/logo-dark.png') }}" alt="">
						  <h3><b>SAFCI</b> System</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li>
          <a href="index.html">
            <i data-feather="pie-chart"></i>
			<span>Inicio</span>
          </a>
        </li>  
		
        <li class="treeview">
          <a href="#">
            <i data-feather="user"></i>
            <span>Recursos Humanos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('rrhh.list') }}"><i class="ti-more"></i>Lista Usuarios</a></li>
            <li><a href="{{ route('rrhh.add') }}"><i class="ti-more"></i>Añadir Usuario</a></li>
          </ul>
        </li> 
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="home"></i> <span>Establecimientos de Salud</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('eess.list') }}"><i class="ti-more"></i>Lista EESS</a></li>
            <li><a href="{{ route('eess.add') }}"><i class="ti-more"></i>Añadir EESS</a></li>            
            <li><a href="{{ route('eess.tipo.list') }}"><i class="ti-more"></i>Tipo EESS</a></li>          
          </ul>
        </li>
		
        <li class="treeview">
          <a href="#">
            <i data-feather="file"></i>
            <span>Administracion</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('red.list')}}"><i class="ti-more"></i>Redes</a></li>
            <li><a href="{{ route('municipio.list')}}"><i class="ti-more"></i>Municipios</a></li>            
            <li><a href="invoice.html"><i class="ti-more"></i>Unidades</a></li>            
            <li><a href="invoice.html"><i class="ti-more"></i>Cargos</a></li>            
          </ul>
        </li> 		  
		 
        <li class="header nav-small-cap">User Interface</li>        
        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Pagina Web</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="components_alerts.html"><i class="ti-more"></i>Alerts</a></li>
            <li><a href="components_badges.html"><i class="ti-more"></i>Badge</a></li>
            <li><a href="components_buttons.html"><i class="ti-more"></i>Buttons</a></li>
            <li><a href="components_sliders.html"><i class="ti-more"></i>Sliders</a></li>
            <li><a href="components_dropdown.html"><i class="ti-more"></i>Dropdown</a></li>
            <li><a href="components_modals.html"><i class="ti-more"></i>Modal</a></li>
            <li><a href="components_nestable.html"><i class="ti-more"></i>Nestable</a></li>
            <li><a href="components_progress_bars.html"><i class="ti-more"></i>Progress Bars</a></li>
          </ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i data-feather="credit-card"></i>
            <span>Configuracion</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="card_advanced.html"><i class="ti-more"></i>Advanced Cards</a></li>
			<li><a href="card_basic.html"><i class="ti-more"></i>Basic Cards</a></li>
			<li><a href="card_color.html"><i class="ti-more"></i>Cards Color</a></li>
		  </ul>
    </li>  
		  
       
		  
		<li class="header nav-small-cap">-°-</li>		  
		  
        
		  
        
      </ul>
    </section>

  </aside> --}}