{{-- <x-app-layout>
    Hola Mundo
</x-app-layout> --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SAFCI</title>

         <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{asset('freeplugins/fontawesome-free/css/all.min.css')}}">
         <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
         <link rel="stylesheet" href="/css/mindex.css">
         <!--datables estilo bootstrap 4 CSS-->  
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="/js/maindex.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

          {{-- Tailwind --}}
        <link rel="stylesheet" href="/css/tailwind.css">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    {{-- <body class="antialiased"> --}}
    <body>
        <div id="particles-js"></div>
        
            {{-- <div class="container"> --}}
            
            @if (Route::has('login'))
            <div class="relative flex items-top justify-center h-10 bg-gray-800 sm:items-center py-2 sm:block text-white text-sm">

                {{-- <div class="hidden fixed top-0 right-0 h-8 bg-gray-800 px-6 py-4 sm:block"> --}}
                    @auth
                        @php
                            $user = Auth::user();    
                        @endphp
                        <div class="pl-4"> Bienvenido {{$user->nombres.' '.$user->ap_paterno.' '.$user->ap_materno}}, 
                            regresar a<a href="{{ url('/dashboard') }}" class="pl-2 text-primary underline">Administracion</a>
                    </div>
                    @else
                    
                        {{-- <a href="{{ route('login') }}" class="pl-4 text-white underline">INGRESAR</a> --}}
                    

                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrar</a>
                        @endif  --}}
                    @endauth
                {{-- </div> --}}
            </div>
            @endif
            <header>
            
               {{-- <div class="container">  --}}
                    {{-- <img src="{{asset('img/topbanner.jpg')}}"  id="banner" alt="Ministerio de Salud de Bolivia" style="display: block; margin-left:auto; margin-right:auto; width: 80%;"> --}}
                {{-- </div> --}}
                <div class="menu_bar">
                    <a href="#" class="bt-menu"><span> <i class="material-icons">menu</i></span>Menú</a>
                </div>
                <nav class="navbar" style="background-color: #31487c;">
                    <a class="navbar-brand" href="index1.html">PROGRAMA SAFCI</a>
                    <ul>
                        <li><a href="{{ url('/') }}"><span> <i class="fa fa-home"></i></span>Inicio</a></li>
                        <li class="submenu">
                            <a href="#"><span> <i class="fa fa-user-nurse"></i></span>¿Quienes Somos?</a>
                            <ul class="children">
                                <li><a href="#">Residencia Médica SAFCI (Formacion SAFCI)</a></li>
                                <li><a href="#">Implementacion SAFCI</a></li>
                            </ul>
                        </li>
                        <li><a href=""><span> <i class="fa fa-chart-bar"></i></span>Sala Situacional</a></li>
                        <li class="submenu">
                            <a href="{{ route('sala.index')}}"><span> <i class="fa fa-syringe"></i></span>Informacion Covid</a>
                            <ul class="children">
                                <li><a href="/descargas/fcov1.5.xlsx">Descarga formulario COVID-19 V. 1.5 <marquee width="300">ULTIMA VERSION</marquee></a></li>
                            <li><a href="/php/covdirect.php">PRODUCCION COVID</a></li>
                            <li><a href="/php/salacovid.php">SALA SITUACIONAL COVID-19 <marquee width="300">Nuevo</marquee></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span> <i class="fa fa-graduation-cap"></i></span>Educacion Permanente</a>
                            <ul class="children">
                                <li><a href="/descargas/incorporacion.docx"> DESCARGA MODELO DE CARTA DE SOLICITUD <marquee width="300">ULTIMA VERSION</marquee></a></li>
                                <li><a href="/descargas/conclusion.docx"> DESCARGA MODELO DE COMPROMISO <marquee width="300">ULTIMA VERSION</marquee></a></li>
                                <li><a href="/inscripcion/inscripcion.php"> INSCRIPCION<marquee width="300">ULTIMA VERSION</marquee></a></li>
                            <li><a href="/aula/">AULA <marquee width="300">Nuevo</marquee></a></li>
                            </ul>
                        </li>
                        

                        <li>
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}"> <span> <i class="fas fa-user-circle"></i> </span>Administracion</a>
                                @else                            
                                    <a href="{{ url('/login') }}"> <span> <i class="fas fa-user-circle"></i></span>Login</a>                        
                                @endauth
                            @endif                          
                        </li> 

                        
                    </ul>
                </nav>
            </header>
        </div>

        <div class="bg-light pl-5 pr-5 pb-5 pt-4" >
           
                <h1 class="text-center">SALA SITUACIONAL</h1>

                <div class='form-group row'>
                    <label for='adm_departamento_id' class="col-sm-1 col-form-label col-form-label-sm">Departamento</label>
                    <div class="col-sm-2" >
                        <select wire:model="adm_departamento_id" id="adm_departamento_id" class="form-control form-control-sm" required>                                        
                            <option value="">-Elija Departamento-</option>
                            <option value="1">LA PAZ</option>
                            <option value="2">ORURO</option>
                            <option value="3">POTOSI</option>
                            <option value="4">COCHABAMBA</option>
                            <option value="5">CHUQUISACA</option>
                            <option value="6">TARIJA</option>
                            <option value="7">PANDO</option>
                            <option value="8">BENI</option>
                            <option value="9">SANTA CRUZ</option>
                        </select>                                       
                    </div>
               
                    <label for='adm_departamento_id' class="col-sm-1 col-form-label col-form-label-sm">Municipio</label>
                    <div class="col-sm-2" >
                        <select wire:model="adm_departamento_id" id="adm_departamento_id" class="form-control form-control-sm" required>                                        
                            <option value="">-Elija Municipio-</option>
                            <option value="1">LA PAZ</option>
                            <option value="2">ORURO</option>
                        </select>                                       
                    </div>
        
                    <label for='adm_departamento_id' class="col-sm-1 col-form-label col-form-label-sm">Establecimiento</label>
                    <div class="col-sm-2" >
                        <select wire:model="adm_departamento_id" id="adm_departamento_id" class="form-control form-control-sm" required>                                        
                            <option value="">-Elija Establecimiento-</option>
                            <option value="1">LA PAZ</option>
                            <option value="2">ORURO</option>
                        </select>                                       
                    </div>
                </div>

                 <!-- Large modal -->
                 <div class="row">
                    <div class="col-sm-2 bg-white">
                        <button type="button" class="btn btn-outline-primary btn-sm mt-2 mb-1" style="width: 100%" data-toggle="modal" data-target="#mision">Misión</button><br/>
                        <button type="button" class="btn btn-outline-primary btn-sm mb-2" style="width: 100%" data-toggle="modal" data-target="#demografia">Demografía</button>
                        <label class="bg-secondary text-light text-center" style="width: 100%">COMP. DE ATENCIÓN</label>
                        <button type="button" class="btn btn-primary btn-sm mb-2" style="width: 100%" data-toggle="modal" data-target="#demografia">Prog Nutrición</button><br/>
                        <button type="button" class="btn btn-primary btn-sm mb-2" style="width: 100%" data-toggle="modal" data-target="#demografia">Prog E No Transmisibles</button><br/>
                        <button type="button" class="btn btn-primary btn-sm mb-2" style="width: 100%" data-toggle="modal" data-target="#demografia">Prog Tuberculosis</button><br/>
                        <button type="button" class="btn btn-primary btn-sm mb-2" style="width: 100%" data-toggle="modal" data-target="#demografia">Perfil Epidemiológico</button><br/>
                        <button type="button" class="btn btn-primary btn-sm mb-2" style="width: 100%" data-toggle="modal" data-target="#demografia">Mortalidad</button><br/>
                        <button type="button" class="btn btn-primary btn-sm mb-2" style="width: 100%" data-toggle="modal" data-target="#demografia">Nacimientos</button><br/>
                    </div>
                        <div class="col-sm-8">                    
                            <img src="{{asset('img/sala/mapaparlante.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; width:80%; ">
                        </div>
                    <div class="col-sm-2 bg-white">
                        <button type="button" class="btn btn-outline-primary btn-sm mt-2 mb-1" style="width: 100%" data-toggle="modal" data-target="#vision">Visión</button><br/>
                        <button type="button" class="btn btn-outline-primary btn-sm mb-2" style="width: 100%" data-toggle="modal" data-target="#isocrona">Isocronas</button>
                        <label class="bg-secondary text-light text-center" style="width: 100%">COMP. DE GESTIÓN</label>
                        <div class="btn-group" style="width: 100%" >
                            <button type="button" class="btn btn-primary btn-sm mb-2 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Datos Generales
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#idioma">Idioma Hablado</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#idioma-materno">Idioma Materno</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#km">Distancia Vivienda</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#pie">Tiempo a Pie</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#movil">Tiempo Movilidad</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#responsables">Responsables Llenado</button>                              
                            </div>
                        </div>
                        <div class="btn-group" style="width: 100%" >
                            <button type="button" class="btn btn-primary btn-sm mb-2 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Determinates Salud
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#tipo">Tipo Vivienda</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#tenencia">Tenencia Vivienda</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#personas">N° Personas</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#agua">Abastecim. Agua</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#excretas">Elim. Excretas</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#basura">Manejo Basura</button>                              
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#ingreso">Ingreso Familiar</button>                              
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#alimentos">Consumo Alimentos</button>                              
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#instruccion">Nivel Instruccion</button>                              
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#riesgo">Rango Riesgo</button>                              
                            </div>
                        </div>
                        <div class="btn-group" style="width: 100%" >
                            <button type="button" class="btn btn-primary btn-sm mb-2 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Salud Integrantes
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#integrantes">N° Integrantes</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#factores">Factores Riesgo</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#trans">E. Transmisibles</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#notrans">E. No Transmisibles</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#discapacidad">Discapacidad</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#grupo1">Grupo Riesgo I</button>                              
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#grupo2">Grupo Riesgo II</button>                              
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#grupo3">Grupo Riesgo III</button>                              
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#grupo4">Grupo Riesgo IV</button>                              
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#cf">N° Carpetas Fam.</button>                              
                            </div>
                        </div>

                        
                        <div class="btn-group" style="width: 100%" >
                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              A. Socioculturales
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#">Residencia Temporal</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#">Alfabetización Lee</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#">Alfabetización Escribe</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#">Nivel Instrucción</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#">Ocupación</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#">Ocupación Resultados</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#">Contribuye Economia</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#">Medicina Tradicional</button>                              
                            </div>
                        </div>
                 </div>
            

        </div>

       
{{-- mision --}}
<div class="modal fade demografia" id="mision"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Misión</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <img src="{{asset('img/sala/mision.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
        </div>
    </div>
  </div>
</div>
{{-- vision --}}
<div class="modal fade demografia" id="vision"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Visión</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <img src="{{asset('img/sala/vision.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
        </div>
    </div>
  </div>
</div>
{{-- demografia --}}
<div class="modal fade demografia" id="demografia"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Demografía</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <img src="{{asset('img/sala/demografia.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
        </div>
    </div>
  </div>
</div>

{{-- Isocrona --}}
<div class="modal fade" id="isocrona" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Isocronas</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <img src="{{asset('img/sala/isocronas.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; width:80%; margin:20px; ">
        </div>
    </div>
  </div>
</div>

        





{{-- --------------------------- ------------------   DATOS GENERALES ------------------------ ------------------ --}}
<div class="modal fade demografia" id="idioma"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Idioma</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/dg-idioma.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="idioma-materno"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Idioma Materno</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/dg-idioma-materno.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="km"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Distancia de Vivienda al Establecimiento</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/dg-km.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="pie"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tiempo a Pie </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/dg-pie.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="movil"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tiempo en Movilidad</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/dg-movilidad.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="responsables"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Responsables del Llenado</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/dg-responsables.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>


{{-- --------------------------- ------------------   DETERMINATES DE SALUD  ------------------------ ------------------ --}}
<div class="modal fade demografia" id="tipo"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tipo de Vivienda</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/ds-tipo.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="tenencia"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tenencia de Vivienda</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/ds-tenencia.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="personas"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Numero de Personas/Cuarto</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/ds-personas.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="agua"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Abastecimiento de Agua</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/ds-agua.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="excretas"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Eliminacion de Excretas</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/ds-excretas.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="basura"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Manejo de Basura</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/ds-basuras.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="ingreso"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ingreso Familiar</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/ds-ingreso.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="alimentos"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Consumo Diario de Alimentos</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/ds-alimentos.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="instruccion"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Nivel de Instruccion de la Madre</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/ds-instruccion.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="riesgo"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Rangos de Riesgo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/ds-riesgos.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>

{{-- --------------------------- ------------------  SALUD INTEGRANTES FAMILIA   ------------------------ ------------------ --}}
<div class="modal fade demografia" id="integrantes"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Integrantes de la Familia</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/si-integrantes.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="factores"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Factores de Riesgo<h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/si-factores.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="trans"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Enfermedades Transmisibles</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/si-transmisibles.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="notrans"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Enfermedades No Transmisibles</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/si-notrans.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="discapacidad"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Discapacidad</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/si-discapacidad.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="grupo1"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Grupo de Riesgo I </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/si-grupo1.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="grupo2"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Grupo de Riesgo II</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/si-grupo2.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="grupo3"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Grupo de Riesgo III</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/si-grupo3.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="grupo4"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Grupo de Riesgo IV</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/si-grupo4.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="cf"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Carpetas Familiares</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/si-cf.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>


    



        
            <script src="/js/particles.js"></script>
            <script src="/js/particles-app.js"></script>
        
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-QEZ5LT90RD"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-QEZ5LT90RD');
        </script>
    </body>

    <footer>
        <div class="pie">
    <h5>PROGRAMA DE SALUD FAMILIAR COMUNITARIA INTERCULTURAL</h5>
    <H6>EDIFICIO LOTERIA NACIONAL PISO 6 AVENIDA MARISCAL SANTA CRUZ ESQUINA CALLE COCHABAMBA</H6>
    <H6>TELEFONO: 2319870-2319904</H6>
    <H6>LA PAZ - BOLIVIA</H6>
    </div>
    </footer>
</html>
