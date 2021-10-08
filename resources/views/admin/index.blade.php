@extends('admin.admin_master')
@section('admin')


<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
		<h1 class="m-0">Tablero de: </h1><h5>{{$user->name}}</h5>
		</div><!-- /.col -->
		<div class="col-sm-6">
		<ol class="breadcrumb float-sm-right">
			{{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active">Dashboard v1</li> --}}
		</ol>
		</div><!-- /.col -->
	</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="content">

	<!-- Main content -->
	<section class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-info">
				<div class="inner">
					<h3>{{$rastrillajes}}</h3>

					<p>Ratrillajes</p>
				</div>
				<div class="icon">
					<i class="ion ion-medkit"></i>
				</div>
				<a href="#" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-success">
				<div class="inner">
					<h3>{{$brigadas}}<sup style="font-size: 20px"></sup></h3>

					<p>Brigadas</p>
				</div>
				<div class="icon">
					<i class="ion ion-ios-people"></i>
				</div>
				<a href="#" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-warning">
				<div class="inner">
					<h3>{{$vacunas}}</h3>

					<p>Vacunados</p>
				</div>
				<div class="icon">
					<i class="ion ion-person-add"></i>
				</div>
				<a href="#" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-danger">
				<div class="inner">
					<h3>{{$antigenos}}</h3>

					<p>Pruebas Antigeno Hoy</p>
				</div>
				<div class="icon">
					<i class="ion ion-thermometer"></i>
				</div>
				<a href="#" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			</div>

	</section>
	<!-- /.content -->
</div>


@endsection