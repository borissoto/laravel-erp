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
         <link rel="stylesheet" href="{{asset('css/mindex.css')}}">
         <!--datables estilo bootstrap 4 CSS-->  
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="{{asset('js/maindex.js')}}"></script>
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
        <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">

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
                        <li><a href="{{ route('sala.index')}}"><span> <i class="fa fa-chart-bar"></i></span>Sala Situacional</a></li>
                        <li class="submenu">
                            <a href="#"><span> <i class="fa fa-syringe"></i></span>Informacion Covid</a>
                            <ul class="children">
                                <li><a href="/descargas/fcov1.5.xlsx">Descarga formulario COVID-19 V. 1.5 <marquee width="300">ULTIMA VERSION</marquee></a></li>
                            <li><a href="{{ route('sala.covid')}}">SALA SITUACIONAL COVID-19 <marquee width="300">Nuevo</marquee></a></li>
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
           
                <h1 class="text-center" style="font-size: 20px"><b> SALA SITUACIONAL </b> </h1>

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
                            <option value="1">PATACAMAYA</option>
                            
                        </select>                                       
                    </div>
        
                    <label for='adm_departamento_id' class="col-sm-1 col-form-label col-form-label-sm">Establecimiento</label>
                    <div class="col-sm-2" >
                        <select wire:model="adm_departamento_id" id="adm_departamento_id" class="form-control form-control-sm" required>                                        
                            <option value="">-Elija Establecimiento-</option>
                            <option value="1">ESTABLECIMIENTO UNO</option>
                            <option value="2">ESTABLECIMIENTO DOS</option>
                        </select>                                       
                    </div>
                </div>

                <div class='form-group row'>
                    <label for='adm_departamento_id' class="col-sm-1 col-form-label col-form-label-sm">Gestion</label>
                    <div class="col-sm-2" >
                        <select wire:model="adm_departamento_id" id="adm_departamento_id" class="form-control form-control-sm" required>                                        
                            <option value="">-Elija Año-</option>
                            <option value="1">2020</option>
                            <option value="2">2021</option>
                            <option value="3">2022</option>
                            <option value="4">2023</option>
                            <option value="5">2024</option>      
                        </select>                           
                    </div>

                    <label for='adm_departamento_id' class="col-sm-1 col-form-label col-form-label-sm">Mes</label>
                    <div class="col-sm-2" >
                        <select wire:model="adm_departamento_id" id="adm_departamento_id" class="form-control form-control-sm" required>  
                            <option value="">-Elija Mes-</option>
                            <option value="2">ENERO</option> 
                            <option value="3">FEBRERO</option>
                            <option value="4">MARZO</option>
                            <option value="5">ABRIL</option>
                            <option value="6">MAYO</option>
                            <option value="7">JUNIO</option>
                            <option value="8">JULIO</option>
                            <option value="9">AGOSTO</option>
                            <option value="1">SEPTIEMBRE</option>
                            <option value="10">OCTUBRE</option>
                            <option value="11">NOVIEMBRE</option>
                            <option value="12">DICIEMBRE</option>
                            </select>                                       
                    </div>
                    
                </div>

                 
                 <div class="row">
                    <div class="col-sm-3 bg-white">
                        <button type="button" class="btn btn-outline-primary btn-sm mt-2 mb-1" style="width: 100%" data-toggle="modal" data-target="#mision">Misión</button><br/>
                        <button type="button" class="btn btn-outline-primary btn-sm mb-2" style="width: 100%" data-toggle="modal" data-target="#demografia">Demografía</button>
                        <label class="bg-secondary text-light text-center" style="width: 100%">COMP. DE ATENCIÓN</label>
                        <button type="button" class="btn btn-primary btn-sm mb-2" style="width: 100%" data-toggle="modal" data-target="#org">Organigrama</button><br/>
                        <button type="button" class="btn btn-primary btn-sm mb-2" style="width: 100%" data-toggle="modal" data-target="#piramide">Piramide Poblacional</button><br/>
                        <div class="btn-group" style="width: 100%" >
                            <button type="button" class="btn btn-primary btn-sm mb-2 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Perfil Epidemiológico
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#pe-0-1">De 6 meses - 1 año</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#pe-1-4">De 1 a 4 años</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#pe-5-9">De 5 a 9 años</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#pe-10-14">De 10 a 14 años</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#pe-15-19">De 15 a 19 años</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#pe-20-39">De 20 a 39  años</button>                              
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#pe-40-49">De 40 a 49 años</button>                              
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#pe-50-59">De 50 a 59 años</button>                              
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#pe-60">De 60 a + años</button>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-sm mb-2" style="width: 100%" data-toggle="modal" data-target="#mvacunas">Mon. Vacunas</button><br/>
                        <button type="button" class="btn btn-primary btn-sm mb-2" style="width: 100%" data-toggle="modal" data-target="#nutri">Mon. Micronutrientes</button><br/>
                        <button type="button" class="btn btn-primary btn-sm mb-2" style="width: 100%" data-toggle="modal" data-target="#ce">Comp. Epidemiológico</button><br/>                        
                        <!-- <button type="button" class="btn btn-primary btn-sm mb-2" style="width: 100%" data-toggle="modal" data-target="#demografia">Prog. Nutrición</button><br/> -->
                        <button type="button" class="btn btn-primary btn-sm mb-2" style="width: 100%" data-toggle="modal" data-target="#enotrans">Prog E No Transmisibles</button><br/>
                        <!-- <button type="button" class="btn btn-primary btn-sm mb-2" style="width: 100%" data-toggle="modal" data-target="#demografia">Prog. Tuberculosis</button><br/>
                        <button type="button" class="btn btn-primary btn-sm mb-2" style="width: 100%" data-toggle="modal" data-target="#demografia">Mortalidad</button><br/>
                        <button type="button" class="btn btn-primary btn-sm mb-2" style="width: 100%" data-toggle="modal" data-target="#demografia">Nacimientos</button><br/> -->
                    </div>

                        <div class="col-sm-6">    
                            <div class="text-center">MAPA PARLANTE <span id="info-mun" style="font-weight: bolder; text-transform:uppercase;"></span> </div><br/>
                            {{-- <img src="{{asset('img/sala/mapaparlante.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; width:80%; "> --}}
                            <div id="map"  style="display: block; margin-left:auto; margin-right:auto; height:680px; width:100%; "></div>
                        </div>



                    <div class="col-sm-3 bg-white">
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
                            <button type="button" class="btn btn-primary btn-sm mb-2 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              A. Socioculturales
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#temporal">Residencia Temporal</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#lee">Lee</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#escribe">Escribe</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#nivel">Nivel Instrucción</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#ocupacion1">Ocupación</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#ocupacion2">Ocupación Resultados</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#contribuye">Contribuye Economia</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#tradicional">Medicina Tradicional</button>                              
                            </div>
                        </div>

                        <div class="btn-group" style="width: 100%" >
                            <button type="button" class="btn btn-primary btn-sm mb-2 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Nacimientos
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#sexo">Sexo</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#parto">Parto</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#atendido">Atendido por</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#cert">Certificado Nacimiento</button>                                                             
                            </div>
                        </div>

                        <div class="btn-group" style="width: 100%" >
                            <button type="button" class="btn btn-primary btn-sm mb-2 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Defunciones
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#mes">Defunciones por mes</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#numero">N° Defunciones</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#dcert">Certificado Defunciones</button>
                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#causal">Causas del Problema</button>                                                             
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
            <img src="{{asset('img/sala/demografia1.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
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

        

{{-- --------------------------- ------------------   ORGANIGRAMA ------------------------ ------------------ --}}
<div class="modal fade demografia" id="org"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Organigrama</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/organigrama.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>

{{-- --------------------------- ------------------   PIRAMIDE POBLACIONAL ------------------------ ------------------ --}}
<div class="modal fade demografia" id="piramide"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Piramide Poblacional</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/piramide.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>

{{-- --------------------------- ------------------   PERFIL EPIDEMIOLOGICO ------------------------ ------------------ --}}
<div class="modal fade demografia" id="pe-0-1"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/pe-0-1.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="pe-1-4"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/pe-1-4.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="pe-5-9"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/pe-5-9.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="pe-10-14"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/pe-10-14.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="pe-15-19"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/pe-15-19.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="pe-20-39"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/pe-20-39.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="pe-40-49"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/pe-40-49.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="pe-50-59"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/pe-50-59.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="pe-60"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/pe-60.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>

{{-- --------------------------- ------------------   MONITOREO VACUNAS ------------------------ ------------------ --}}
<div class="modal fade demografia" id="mvacunas"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Vacunas</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/va-1.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
              <img src="{{asset('img/sala/va-2.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
              <img src="{{asset('img/sala/va-3.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
{{-- --------------------------- ------------------   MONITOREO MICRONUTRIENTES ------------------------ ------------------ --}}
<div class="modal fade demografia" id="nutri"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Micronutrientes</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/nu-1.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
              <img src="{{asset('img/sala/nu-2.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">              
          </div>
      </div>
    </div>
</div>

{{-- --------------------------- ------------------   COMPORTAMIENTO EPIDEMIOLOGICO ------------------------ ------------------ --}}
<div class="modal fade demografia" id="ce"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Comportamiento Epidemiológico</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/ce-1.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
              <img src="{{asset('img/sala/ce-2.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
              <img src="{{asset('img/sala/ce-3.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>

{{-- --------------------------- ------------------   ENFERMEDADES NO TRANSMISIBLES ------------------------ ------------------ --}}
<div class="modal fade demografia" id="enotrans"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Canal Epidemiológico</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
                <label for="">IRAS</label>
              <img src="{{asset('img/sala/iras.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
                <label for="">EDAS</label>
              <img src="{{asset('img/sala/edas.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">              
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

{{-- --------------------------- ------------------  ASPECTOS SOCIOCULTURALES   ------------------------ ------------------ --}}
<div class="modal fade demografia" id="temporal"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Residencia Temporal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/as-temporal.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="lee"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Lee</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/as-lee.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="escribe"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Escribe</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/as-escribe.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="nivel"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Nivel de Instruccion</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/as-nivel.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="ocupacion1"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ocupacion</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/as-ocupacion.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="ocupacion2"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ocupacion Resultados</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/as-ocupacion2.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="contribuye"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Contribuye a la Economia Familiar</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/as-contribuye.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="tradicional"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Recurren a la Medicina Tradicional</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/as-tradicional.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
    
{{-- --------------------------- ------------------  NACIMIENTOS   ------------------------ ------------------ --}}
<div class="modal fade demografia" id="sexo"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Sexo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/n-sexo.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="parto"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Parto</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/n-parto.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="atendido"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Atendido por</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/n-atendido.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="cert"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tiene Certificado Nacimiento?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/n-cert.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>

{{-- --------------------------- ------------------  DEFUNCIONES   ------------------------ ------------------ --}}
<div class="modal fade demografia" id="mes"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Defunciones por mes</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/de-mes.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="numero"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Numero de Defunciones</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/de-numero.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="dcert"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Certificado de Defunciones</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/de-cert.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>
<div class="modal fade demografia" id="causal"   tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Causas del Problema</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <img src="{{asset('img/sala/de-causa.jpg')}}"  style="display: block; margin-left:auto; margin-right:auto; ">
          </div>
      </div>
    </div>
</div>


<br/>
<br/>





        
            <script src="{{asset('js/particles.js')}}"></script>
            <script src="{{asset('js/particles-app.js')}}"></script>
        
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-QEZ5LT90RD"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-QEZ5LT90RD');
        </script>

        <script>
            function initMap(){
                var options = {
                    zoom:6,
                    // center:{lat:-17.413977, lng:-66.165321},
                    center:{lat:-16.290154, lng:-63.588653},
                    zoomControl: true,
                    zoomControlOptions: {
                        style: google.maps.ZoomControlStyle.DEFAULT,
                    },
                    disableDoubleClickZoom: true,
                    mapTypeControl: false,
                    scaleControl: true,
                    scrollwheel: true,
                    panControl: true,
                    streetViewControl: true,
                    draggable: true,
                    overviewMapControl: true,
                    overviewMapControlOptions: {
                        opened: false,
                    },
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    styles: [
                {
                    "featureType": "administrative",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "administrative.country",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "administrative.province",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#e3e3e3"
                        }
                    ]
                },
                {
                    "featureType": "landscape.natural",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#cccccc"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "labels.text",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit.station.airport",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit.station.airport",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#FFFFFF"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                }
            ],
                }

       

                const map = new google.maps.Map(document.getElementById('map'), options);

                         	//setting overlay color, etc.
                map.data.setStyle({
                    // fillColor: 'white',
                    strokeWeight: 0.5,
                    strokeColor: '#448CCB',
                    fillOpacity: 0.4
                });
                // Cochabamba
                // map.data.loadGeoJson('/img/kmz/Morochata.geojson');
                // map.data.loadGeoJson('/img/kmz/Cocapata.geojson');
                // map.data.loadGeoJson('/img/kmz/Quillacollo.geojson');
                // map.data.loadGeoJson('/img/kmz/Colcapirhua.geojson');
                map.data.loadGeoJson('/img/kmz/bn-sm.geojson');
           
                map.data.loadGeoJson('/img/kmz/cbba-sm.geojson');
                map.data.loadGeoJson('/img/kmz/ch-sm.geojson');
                map.data.loadGeoJson('/img/kmz/lp-sm.geojson');
                map.data.loadGeoJson('/img/kmz/or-sm.geojson');
                map.data.loadGeoJson('/img/kmz/pn-sm.geojson');
                map.data.loadGeoJson('/img/kmz/pt-sm.geojson');
                map.data.loadGeoJson('/img/kmz/sc-sm.geojson');
                map.data.loadGeoJson('/img/kmz/tj-sm.geojson');

                map.data.addListener('mouseover', function(event) {
                    map.data.revertStyle();
                    map.data.overrideStyle(event.feature, {strokeWeight: 3, fillColor: 'white'});                    
                });
                
                map.data.addListener('mouseout', function(event) {
                    map.data.revertStyle();
                });

                let infowindow = new google.maps.InfoWindow({
                    content: "municipio"
                });

                map.data.addListener('click', function(event) {
                    console.log(event);
                    document.getElementById('info-mun').textContent = event.feature.getProperty('name');
                    zoomLevel = map.getZoom();
                    if(zoomLevel <= 6){
                        var center = new google.maps.LatLng(event.latLng);
                        map.setCenter(center);
                        map.setZoom(8);                       

                    }else{
                        var center = new google.maps.LatLng(-16.290154, -63.588653);
                        map.setCenter(center);
                        map.setZoom(6);
                    }

                    let nameMunicipio = event.feature.getProperty('description');
                    infowindow.setContent(nameMunicipio);
                    infowindow.setPosition(event.latLng);
                    infowindow.setOptions({
                        pixelOffset: new google.maps.Size(1, 1)
                    }); // move the infowindow up slightly to the top of the marker icon
                    infowindow.open(map);
                });
                

                // const ctaLayer = new google.maps.KmlLayer({
                //     url: "http://drive.google.com/uc?export=download&id=1MCeDfcIvcMAcdl9YJnYSYn3a2_LhsqT0",
                //     // url: "http://drive.google.com/file/d/1MCeDfcIvcMAcdl9YJnYSYn3a2_LhsqT0/view?usp=sharing",
                //     //  url: "https://drive.google.com/file/d/1F3s2aQStR4TPLmIe59-vBBeQXlp8N86m",                    
                //     // url: "https://googlearchive.github.io/js-v2-samples/ggeoxml/cta.kml",                  
                //     map: map,
                // });

            }
        </script>

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwC0dKzZNKNbnzsslPYLNSExYd8uLqRIk&callback=initMap"></script>
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
