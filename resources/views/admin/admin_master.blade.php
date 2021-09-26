<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('backend/images/favicon.ico' )}}">

    <title>SAFCI - Dashboard</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css')}} ">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('backend/css/skin_color.css')}} ">

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
     
  </head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">

	@include('admin.body.header')
  
  <!-- Left side column. contains the logo and sidebar -->
  
	@include('admin.body.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  

    @yield('admin')



  </div>
 


  @include('admin.body.footer')

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
	
	<!-- Vendor JS -->
	<script src="{{ asset('backend/js/vendors.min.js') }}"></script>
  <script src="{{ asset('../assets/icons/feather-icons/feather.min.js') }}"></script>	
	{{-- <script src="{{ asset('../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js') }}"></script>
	<script src="{{ asset('../assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>
	<script src="{{ asset('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script> --}}

  <script src="{{ asset('../assets/vendor_components/datatable/datatables.min.js') }}"></script>
	<script src="{{ asset('backend/js/pages/data-table.js') }}"></script>

  {{-- Steps --}}
  <script src="{{ asset('../assets/vendor_components/jquery-steps-master/build/jquery.steps.js') }}"></script>
  <script src="{{ asset('../assets/vendor_components/jquery-validation-1.17.0/dist/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('../assets/vendor_components/sweetalert/sweetalert.min.js') }}"></script>
  <script src="{{ asset('backend/js/pages/steps.js') }}"></script>
	
	<!-- SAFCI Admin App -->
	<script src="{{ asset('backend/js/template.js')}}"></script>
	<script src="{{ asset('backend/js/pages/dashboard.js')}}"></script>

 
 
	
	
</body>
</html>
