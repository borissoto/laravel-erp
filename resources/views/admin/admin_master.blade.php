<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SAFCI - System</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- overlayScrollbars -->
   {{-- <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}"> --}}
  {{-- Tailwind --}}
   {{-- <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}"> --}}
  <!-- fullCalendar -->
  <link rel="stylesheet" href="{{asset('plugins/fullcalendar/main.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">

  
   @livewireStyles
   @stack('styles')

   <!-- Tailwind Scripts -->
   {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}} 
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  @include('admin.body.header')

  <!-- Left side column. contains the logo and sidebar -->
  
	@include('admin.body.sidebar')

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper"> 

    @yield('admin')

    {{-- <div>
    @yield('kardex')
    </div> --}}

  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  @include('admin.body.footer')

</div>
<!-- ./wrapper --> 


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- jQuery UI -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- overlayScrollbars -->
{{-- <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script> --}}
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- fullCalendar 2.2.5 -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/fullcalendar/main.js')}}"></script>
<script src="{{asset('plugins/fullcalendar/locales/es.js')}}"></script>

<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>

  @livewireScripts

  @stack('modals')
  <script type="text/javascript">
    window.addEventListener('closeComunidadStore', event => {
        $('#comunidadCreate').modal('hide');
    });
    window.addEventListener('closeRrhhStore', event => {
        $('#rrhhCreate').modal('hide');
    });
    window.livewire.on('closeKardexInfoUpdate', () => {
        $('#kardexInfoUpdate').modal('hide');
    });
    window.livewire.on('closeKardexCargoCreate', () => {
        $('#kardexCargoCreate').modal('hide');
    });
    window.livewire.on('closeKardexCargoUpdate', () => {
        $('#kardexCargoUpdate').modal('hide');
    });
    window.livewire.on('closeKardexEducacionCreate', () => {
        $('#kardexEducacionCreate').modal('hide');
    });
    window.livewire.on('closeKardexEducacionUpdate', () => {
        $('#kardexEducacionUpdate').modal('hide');
    });
    window.livewire.on('closeKardexSupervisionCreate', () => {
        $('#kardexSupervisionCreate').modal('hide');
    });
    window.livewire.on('closeKardexSupervisionUpdate', () => {
        $('#kardexSupervisionUpdate').modal('hide');
    });
    window.livewire.on('closeKardexBajaCreate', () => {
      $('#kardexBajaCreate').modal('hide');
    });
    window.livewire.on('closeKardexBajaUpdate', () => {
      $('#kardexBajaUpdate').modal('hide');
    });
    window.livewire.on('closeKardexBajaEstadoUpdate', () => {
      $('#kardexBajaStatus').modal('hide');
    });
    window.livewire.on('closeKardexEstablecimientoCreate', () => {
      $('#kardexEstablecimientoCreate').modal('hide');
    });
    window.livewire.on('closeKardexCovidUCreate', () => {
      $('#kardexCovidUCreate').modal('hide');
    });
    window.livewire.on('closeKardexCovidUUpdate', () => {
      $('#kardexCovidUUpdate').modal('hide');
    });
    window.livewire.on('closeComisionCreate', () => {
      $('#comisionCreate').modal('hide');
    });
    window.livewire.on('closeComisionUpdate', () => {
      $('#comisionUpdate').modal('hide');
    });
    window.livewire.on('closeEstablecimientoCreate', () => {
      $('#eessCreate').modal('hide');
    });
    window.livewire.on('closeEstablecimientoUpdate', () => {
      $('#eessUpdate').modal('hide');
    });
  </script>

<script type="text/javascript">
  window.livewire.on('showConfirmDelete', () => {
      $('#deleteModal').modal('show');
  });
  window.livewire.on('hideConfirmDelete', () => {
      $('#deleteModal').modal('hide');
  });
  window.livewire.on('showForm', () => {
              $('#showForm').modal('show');
          });
  window.livewire.on('hideForm', () => {
      $('#showForm').modal('hide');
  });
</script>


{{-- <script type="text/javascript" src="{{asset('js/initMap.js')}}"></script> --}}
{{-- <script type="text/javascript" src="{{asset('/js/localizacion.js')}}"></script> --}}
{{-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwC0dKzZNKNbnzsslPYLNSExYd8uLqRIk&callback=initMap"></script> --}}

@stack('scripts')

</body>
</html>