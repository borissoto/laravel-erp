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
         <link rel="stylesheet" href="{{asset('/CSS/mindex.css')}}">
         <!--datables estilo bootstrap 4 CSS-->  
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="{{asset('js/maindex.js')}}"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
           
<div class="container">

    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Administracion</a>
        @else
        <button>
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Ingresar</a>
        </button>

            {{-- @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrar</a>
            @endif --}}
        @endauth
    </div>
@endif
            <header>
            
                <div class="container">
                    <img src="{{asset('dist/img/topbanner.jpg')}}" id="banner" alt="Ministerio de Salud de Bolivia">
                </div>
                <div class="menu_bar">
                    <a href="#" class="bt-menu"><span <i class="material-icons">menu</i></span>Menú</a>
                </div>
                <nav class="navbar" style="background-color: #31487c;">
                    <a class="navbar-brand" href="index1.html">PROGRAMA SAFCI</a>
                    <ul>
                        <li><a href="#"><span <i class="fa fa-home"></i></span>Inicio</a></li>
                        <li class="submenu">
                            <a href="#"><span <i class="fa fa-user-nurse"></i></span>¿Quienes Somos?</a>
                            <ul class="children">
                                <li><a href="#">Residencia Médica SAFCI (Formacion SAFCI)</a></li>
                                <li><a href="#">Implementacion SAFCI</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span <i class="fa fa-syringe"></i></span>INFORMACION COVID</a>
                            <ul class="children">
                                <li><a href="/descargas/fcov1.5.xlsx">Descarga formulario COVID-19 V. 1.5 <marquee width="300">ULTIMA VERSION</marquee></a></li>
                            <li><a href="/php/covdirect.php">PRODUCCION COVID</a></li>
                            <li><a href="/php/salacovid.php">SALA SITUACIONAL COVID-19 <marquee width="300">Nuevo</marquee></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span <i class="fa fa-graduation-cap"></i></span>EDUCACION PERMANENTE</a>
                            <ul class="children">
                                <li><a href="/descargas/incorporacion.docx"> DESCARGA MODELO DE CARTA DE SOLICITUD <marquee width="300">ULTIMA VERSION</marquee></a></li>
                                <li><a href="/descargas/conclusion.docx"> DESCARGA MODELO DE COMPROMISO <marquee width="300">ULTIMA VERSION</marquee></a></li>
                                <li><a href="/inscripcion/inscripcion.php"> INSCRIPCION<marquee width="300">ULTIMA VERSION</marquee></a></li>
                            <li><a href="/aula/">AULA <marquee width="300">Nuevo</marquee></a></li>
                            </ul>
                        </li>
                        {{-- <li><a href="login.php"><span <i class="material-icons">account_circle</i></span>Login</a></li>     --}}
                    </ul>
                </nav>
            </header>

            <div class="tarjetitas">

                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('dist/img/visita.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">EDUCACION PERMANENTE</h5>
                        <p class="card-text">Curso Estrategias de la Promocion de la Salud Modalidad Virtual Sedunda Version </p>
                        {{-- <a href="/aula/" class="btn btn-primary">ENTRAR AL CURSO</a> --}}
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('dist/img/vacunacion.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Registro</h5>
                        <p class="card-text">ACTIVIDADES DE VACUNACION COVID-19</p>
                        {{-- <a href="/vacunas/vacunas.php" class="btn btn-primary">REGISTRAR</a> --}}
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('dist/img/rastrillaje.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Rastrillaje</h5>
                        <p class="card-text">REGISTRO DE ACTIVIDADES EN RASTRILLAJE COVID-19</p>
                        {{-- <a href="/vacunas/rastrillaje.php" class="btn btn-primary">REGISTRAR</a> --}}
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('dist/img/antigeno.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Pruebas de Antigeno Nasal</h5>
                        <p class="card-text">REGISTRO DE PRUEBAS DE ANTIGENO NASAL REALIZADAS</p>
                        {{-- <a href="/vacunas/antigeno.php" class="btn btn-primary">REGISTRAR</a> --}}
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('dist/img/brigadas.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">BRIGADAS</h5>
                        <p class="card-text">CREA BRIGADAS DE VACUNACION O RASTRILLAJE</p>
                        {{-- <a href="/vacunas/brigadas.php" class="btn btn-primary">VAMOS</a> --}}
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('dist/img/responsable.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">RESPONSABLE</h5>
                        <p class="card-text">NOMBRA RESPONSABLES DE BRIGADAS DE VACUNACION O RASTRILLAJE</p>
                        {{-- <a href="/vacunas/responsable.php" class="btn btn-primary">VAMOS</a> --}}
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('dist/img/produccion.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">PRODUCCION</h5>
                        <p class="card-text">SUBIR FORMULARIO SEMANAL DE PRODUCCION COVID-19|</p>
                        {{-- <a href="/php/FORMCOVID.php" class="btn btn-primary">VAMOS</a> --}}
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('dist/img/sala.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">SALA SITUACIONAL COVID-19</h5>
                        <p class="card-text">CONSOLIDADO DE RESULTADOS</p>
                        <a href="/php/salacovid.php" class="btn btn-primary">VAMOS</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('dist/img/vacunaton.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">VACUNATON EL ALTO</h5>
                        <p class="card-text">MARATON PARA VACUNACION</p>
                        {{-- <a href="/vacunaton/vacunaton.php" class="btn btn-primary">REGISTRAR</a> --}}
                    </div>
                </div>
            </div>

            {{-- <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    
                </div>
                <h1> Dashboard Page </h1>
                <a href="{{ url('/') }}">Dashboard</a> |
                <a href="{{ URL::to('/about') }}">About</a> |
                <a href="{{ route('con') }}">Contact</a> |

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div> --}}
        </div>
        </div>
    </body>
</html>
