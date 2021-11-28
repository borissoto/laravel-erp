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
        <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
         <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
         <link rel="stylesheet" href="{{asset('/css/mindex.css')}}">
         <!--datables estilo bootstrap 4 CSS-->  
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="{{asset('/js/maindex.js')}}"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

          {{-- Tailwind --}}
        <link rel="stylesheet" href="{{ asset('/css/tailwind.css') }}">

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
                    <img src="{{asset('dist/img/topbanner.jpg')}}"  id="banner" alt="Ministerio de Salud de Bolivia">
                {{-- </div> --}}
                <div class="menu_bar">
                    <a href="#" class="bt-menu"><span> <i class="material-icons">menu</i></span>Menú</a>
                </div>
                <nav class="navbar" style="background-color: #31487c;">
                    <a class="navbar-brand" href="index1.html">PROGRAMA SAFCI</a>
                    <ul>
                        <li><a href="#"><span> <i class="fa fa-home"></i></span>Inicio</a></li>
                        <li class="submenu">
                            <a href="#"><span> <i class="fa fa-user-nurse"></i></span>¿Quienes Somos?</a>
                            <ul class="children">
                                <li><a href="#">Residencia Médica SAFCI (Formacion SAFCI)</a></li>
                                <li><a href="#">Implementacion SAFCI</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span> <i class="fa fa-syringe"></i></span>INFORMACION COVID</a>
                            <ul class="children">
                                <li><a href="/descargas/fcov1.5.xlsx">Descarga formulario COVID-19 V. 1.5 <marquee width="300">ULTIMA VERSION</marquee></a></li>
                            <li><a href="/php/covdirect.php">PRODUCCION COVID</a></li>
                            <li><a href="/php/salacovid.php">SALA SITUACIONAL COVID-19 <marquee width="300">Nuevo</marquee></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span> <i class="fa fa-graduation-cap"></i></span>EDUCACION PERMANENTE</a>
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

            <div class="tarjetitas">

                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('dist/img/visita.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">EDUCACION PERMANENTE</h5>
                        <p class="card-text">Curso Estrategias de la Promocion de la Salud Modalidad Virtual Sedunda Version </p>
                        
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('dist/img/vacunacion.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Registro</h5>
                        <p class="card-text">ACTIVIDADES DE VACUNACION COVID-19</p>
                        
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('dist/img/rastrillaje.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Rastrillaje</h5>
                        <p class="card-text">REGISTRO DE ACTIVIDADES EN RASTRILLAJE COVID-19</p>
                        
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('dist/img/antigeno.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Pruebas de Antigeno Nasal</h5>
                        <p class="card-text">REGISTRO DE PRUEBAS DE ANTIGENO NASAL REALIZADAS</p>
                        
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('dist/img/brigadas.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">BRIGADAS</h5>
                        <p class="card-text">CREA BRIGADAS DE VACUNACION O RASTRILLAJE</p>
                       
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('dist/img/responsable.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">RESPONSABLE</h5>
                        <p class="card-text">NOMBRA RESPONSABLES DE BRIGADAS DE VACUNACION O RASTRILLAJE</p>
                       
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('dist/img/produccion.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">PRODUCCION</h5>
                        <p class="card-text">SUBIR FORMULARIO SEMANAL DE PRODUCCION COVID-19|</p>
                       
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('dist/img/sala.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">SALA SITUACIONAL COVID-19</h5>
                        <p class="card-text">CONSOLIDADO DE RESULTADOS</p>
                       
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('dist/img/vacunaton.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">VACUNATON EL ALTO</h5>
                        <p class="card-text">MARATON PARA VACUNACION</p>
                       
                    </div>
                </div>
            </div>

          
        </div>

        <div class="container-lg">
            <div class="parallax-completo1">
                
                <div class="tarjetero">
                    <div class="card">
                        <a href="#">
                            <div class="card-header">
                                <span><i class="material-icons">map</i></span>
                                <br>
                            </div>
                            <div class="contenido">
                            <h3>SALA SITUACIONAL</h3>
                        </a>    
                            <h4>Comparacion de indicadores de salud segun produccion de servicios del programa SAFCI</h4>
                        </div>
                        </div>
                        <div class="card">
                            <a href="/php/registrorrhh.php">
                            <div class="card-header">
                            <span><i class="material-icons">person_pin</i></span>
                            </div>
                            <div class="contenido">
                            <h3>REGISTRO DE RECURSOS HUMANOS</h3>
                        </a>
                            <h4>Registro o modificacion de datos del recurso humano dependiente del programa SAFCI</h4>
                        </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a href="/aula/">
                            <span><i class="material-icons">history_edu</i></span>
                            <br>
                        </div>
                        <div class="contenido">
                                <H3>Aula virtual</H3>
                            </a>
                                <h4>Curso de Educacion Permanente</h4>
                        </div>
                        </div>
                        <div class="card">
                            {{-- <a href="/php/registrorrhh.php"> --}}
                            <div class="card-header">
                            <span><i class="material-icons">add_business</i></span>
                            <br>
                        </div>
                        <div class="contenido">
                            <H3>REGISTRO DE ESTABLECIMIENTOS</H3>
                        </a>
                            <h4>Registro o modificacion de Establecimiento de intervencion del Programa SAFCI</h4>
                        </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                {{-- <a href="/inscripcion/inscripcion.php"> --}}
                            <span><i class="material-icons">school</i></span>
                            <br>
                        </div>
                        <div class="contenido">
                                <H3>REGISTRO EDUCACION PERMANENTE</H3>
                            </a>
                                <h4>Registro de Cursasntes de Educacion Permanente en SAFCI</h4>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <a href="/php/301.php">
                            <span><i class="material-icons">medical_services</i></span>
                            <br>
                        </div>
                        <div class="contenido">
                            <H3>PRODUCCION DE SERVICIOS</H3>
                            </a>
                                <h4>Introduccion a la base de datos de los formularios correspondientes a los cuadernos SNIS</h4>
                        </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a href="/php/FORMCOVID.php">
                            <span><i class="material-icons">coronavirus</i></span>
                            <br>
                        </div>
                        <div class="contenido">
                                <H3>PRODUCCION COVID</H3>
                            </a>
                                <h4>Introduccion de informacion proveniente de la produccion de servicios en la contingencia COVID-19</h4>
                        </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a href="/php/rrhhycovid.php">
                            <span><i class="material-icons">masks</i></span>
                            <br>
                        </div>
                        <div class="contenido">
                                <H3>SITUACION RRHH COVID</H3>
                            </a>
                            <H4>Registro de la situacion de salud del personal de salud del Programa SAFCI en la Contingencia COVID-19</H4>
                        </div>
                        </div>
                        </div>
                </div>
                <div class="Galeria">
                    <div class="row">
                    <div class="imagenes">
                        <img src="{{asset('dist/img/familia.jpeg')}}" loading="lazy" alt="">
                    </div>
                    <div class="imagenes">
                        <img src="{{asset('dist/img/salud.jpeg')}}" loading="lazy" alt="">
                    </div>
                    <div class="imagenes">
                        <img src="{{asset('dist/img/familia3.jpeg')}}" loading="lazy" alt="">
                    </div>
                    <div class="imagenes">
                        <img src="{{asset('dist/img/salud1.jpeg')}}" loading="lazy" alt="">
                    </div>
                    <div class="imagenes">
                        <img src="{{asset('dist/img/disc.jpeg')}}" loading="lazy" alt="">
                    </div>
                </div>
            </div>
        </div>

        {{-- </div> --}}
        
            <script src="{{asset('/js/particles.js')}}"></script>
            <script src="{{asset('/js/particles-app.js')}}"></script>
        
        
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
