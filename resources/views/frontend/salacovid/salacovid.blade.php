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
        
<!-- jQuery -->
<script src="{{asset('freeplugins/jquery/jquery.min.js')}}"></script>
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
            <h1 class="text-center" style="font-size: 20px"><b> SALA SITUACIONAL COVID -19 (BRIGADAS)</b> </h1>
            
                <div class="row">
                    <div class="col">
                        <div class="mt-4 mb-2 shadow-md">
                            <div id="sospechosos"></div>
                        </div>
                    </div>                
                    <div class="col">
                        <div class="mt-4 mb-2 shadow-md">
                            <div id="atendidos"></div>
                        </div>
                    </div>                
                
                    
                </div>
                
                <div class="row">
                    <div class="col">
                        <div class="mt-4 mb-2 shadow-md">
                            <div id="vacunas"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mt-4 mb-2 shadow-md">
                            <div id="antigenos"></div>
                        </div>
                    </div>
                </div>
               
            
        </div>

       
     





        
            <script src="{{asset('js/particles.js')}}"></script>
            <script src="{{asset('js/particles-app.js')}}"></script>
        
        
        

     
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/series-label.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>

        <script>

            /***********************************Confirmados por fecha************************************************/

            var optionsCon = {
               chart: {
                   type: 'line',
                   events: {
                       load:requestDataCon
                   }
               },
                title: {
                    text: 'Rastrillaje'
                    },
                subtitle: {
                    text: 'Fuente: Safci'
                    },
                yAxis: {
                    title:{
                            text: 'Numero de Sospechosos'
                            },                   
                    },
                // xAxis: {                    
                //     categories: catCon,          
                //     },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle'
                },
                // series: [{name: "Vacunados", data: []} ],
                
                responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom'
                            }
                        }
                    }]
                }

            };

            var chartCon = Highcharts.chart('sospechosos', optionsCon)

            function requestDataCon(){               
                fetch('/salacovid/positivos',{
                    method: 'GET',
                    headers: {"Accept": "application/json"}
                }).then(function(response){                    
                    return response.json()
                }).then(function(data){
                    console.log(data);
                    var valuesV = [];
                    var catCon= [];

                    data.forEach(function(item){
                        catCon.push(item.name);
                        valuesV.push(parseInt(item.data)); 
                    });
                    chartCon.xAxis[0].categories = catCon;
                    chartCon.addSeries({
                            name: "Sospechosos",
                            data: valuesV,
                    }) ;
                })
                .catch(function(error) {
                    console.log(error);
                })
            }

            /********Atendidos*********/

            var optionsCon1 = {
               chart: {
                   type: 'line',
                   events: {
                       load:requestDataCon1
                   }
               },
                title: {
                    text: 'Rastrillaje'
                    },
                subtitle: {
                    text: 'Fuente: Safci'
                    },
                yAxis: {
                    title:{
                            text: 'Numero de Atendidos'
                            },                   
                    },
                // xAxis: {                    
                //     categories: catCon,          
                //     },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle'
                },
                // series: [{name: "Vacunados", data: []} ],
                
                responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom'
                            }
                        }
                    }]
                }

            };

            var chartCon1 = Highcharts.chart('atendidos', optionsCon1)

            function requestDataCon1(){               
                fetch('/salacovid/atendidos',{
                    method: 'GET',
                    headers: {"Accept": "application/json"}
                }).then(function(response){                    
                    return response.json()
                }).then(function(data){
                    console.log(data);
                    var valuesV = [];
                    var catCon= [];

                    data.forEach(function(item){
                        catCon.push(item.name);
                        valuesV.push(parseInt(item.data)); 
                    });
                    chartCon1.xAxis[0].categories = catCon;
                    chartCon1.addSeries({
                            name: "Atendidos",
                            data: valuesV,
                            color: "#b87316",
                    }) ;
                })
                .catch(function(error) {
                    console.log(error);
                })
            }

              /*******Vacunas**********/

              var optionsVac = {
               chart: {
                   type: 'line',
                   events: {
                       load:requestDataVac
                   }
               },
                title: {
                    text: 'Vacunas'
                    },
                subtitle: {
                    text: 'Fuente: Safci'
                    },
                yAxis: {
                    title:{
                            text: 'Numero de Vacunas'
                            },                   
                    },
                // xAxis: {                    
                //     categories: catCon,          
                //     },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle'
                },
                // series: [{name: "Vacunados", data: []} ],
                
                responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom'
                            }
                        }
                    }]
                }

            };

            var chartVac = Highcharts.chart('vacunas', optionsVac)

            function requestDataVac(){               
                fetch('/salacovid/vacunas',{
                    method: 'GET',
                    headers: {"Accept": "application/json"}
                }).then(function(response){                    
                    return response.json()
                }).then(function(data){
                    console.log(data);
                    var dosisuno = [];
                    var dosisdos = [];
                    var catVac = [];
                    data.forEach(function(item){                        
                        switch (item.name) {  
                            case "1": item.name = "Enero"; break;
                            case "2": item.name = "Febreo"; break;
                            case "3": item.name = "Marzo"; break;
                            case "4": item.name = "April"; break;
                            case "5": item.name = "Mayo"; break;
                            case "6": item.name = "Junio"; break;
                            case "7": item.name = "Julio"; break;
                            case "8": item.name = "Agosto"; break;
                            case "9": item.name = "Septiembre"; break;
                            case "10": item.name = "Octubre"; break;
                            case "11": item.name = "Noviembre"; break;
                            case "12": item.name = "Diciembre"; break;
                            default: break;
                            };
                        catVac.push(item.name);
                        dosisuno.push(parseInt(item.dosisuno)); 
                        dosisdos.push(parseInt(item.dosisdos)); 


                    });
                    chartVac.xAxis[0].categories = catVac;
                    chartVac.addSeries({
                            name: "1era Dosis",
                            data: dosisuno,                            
                    }) ;
                    chartVac.addSeries({
                            name: "2da Dosis",
                            data: dosisdos,
                            color: "#10be2f",
                    }) ;
                })
                .catch(function(error) {
                    console.log(error);
                })
            }


            /***********************************Vacuna por mes************************************************/


            // var options = {
            //    chart: {
            //        type: 'line',
            //        events: {
            //            load:requestDataPos
            //        }
            //    },
            //     title: {
            //         text: 'Vacunas'
            //         },
            //     subtitle: {
            //         text: 'Fuente: Safci'
            //         },
            //     yAxis: {
            //         title:{
            //                 text: 'Numero de Vacunas'
            //         },                                                           
            //     },
            //     // xAxis: {                    
            //     //     categories: catVac,          
            //     //     },
            //     legend: {
            //         layout: 'vertical',
            //         align: 'right',
            //         verticalAlign: 'middle'
            //     },
            //     // series: [{name: "Vacunados", data: []} ],             
            //     responsive: {
            //         rules: [{
            //             condition: {
            //                 maxWidth: 500
            //             },
            //             chartOptions: {
            //                 legend: {
            //                     layout: 'horizontal',
            //                     align: 'center',
            //                     verticalAlign: 'bottom'
            //                 }
            //             }
            //         }]
            //     }

            // };

            // var chart = Highcharts.chart('vacunas', options)
        

            // function requestDataPos(){
                // $.ajax({
                //     url: '/salacovid/vacunas',
                //     type: "GET",
                //     dataType: "json",                    
                //     success: function(response){
                //         var valuesVac = [];
                //         response.forEach(function(item2){
                //             valuesVac.push(parseInt(item2.dosis1));
                //         });
                //         console.log(valuesVac);
                //         chart.addSeries({
                //             name: "Vacunas",
                //             data: valuesVac
                //         }) 
                //     },
                //     // cache: false
                // });
                // fetch('/salacovid/vacunas',{
                //     method: 'GET',
                //     headers: {"Accept": "application/json"}
                //     }).then(function(response){                    
                //         return response.json()
                //     }).then(function(data){                        
                //         console.log(data);
                //         var catVac = [];
                //         var dosis1 = [];
                //         var dosis2 = [];
                    //     data.forEach(function(item){               
                    //     switch (item.name) {  
                    //         case 1: item.name = "Enero"; break;
                    //         case 2: item.name = "Febreo"; break;
                    //         case 3: item.name = "Marzo"; break;
                    //         case 4: item.name = "April"; break;
                    //         case 5: item.name = "Mayo"; break;
                    //         case 6: item.name = "Junio"; break;
                    //         case 7: item.name = "Julio"; break;
                    //         case 8: item.name = "Agosto"; break;
                    //         case 9: item.name = "Septiembre"; break;
                    //         case 10: item.name = "Octubre"; break;
                    //         case 11: item.name = "Noviembre"; break;
                    //         case 12: item.name = "Diciembre"; break;
                    //         default: break;
                    //         };
                    //     catVac.push(item.name);
                    // }); 
                //     data.forEach(function(item){
                //         dosis1.push(parseInt(item.dosis1)); 
                //         dosis2.push(parseInt(item.dosis2)); 
                //     })                   
                //     chart.xAxis[0].categories = catVac,
                //     chart.addSeries({
                //             name: "1era Dosis",
                //             data: dosis1,
                //     });
                //     chart.addSeries({
                //             name: "2da Dosis",
                //             data: dosis2,
                //             color: "#10be2f",
                //     });
                //     })
                //     .catch(function(error) {
                //         console.log(error);
                //     })
                // }

            /***********************************Antigeno por mes************************************************/

            
            // var positivos = [];
            // var negativos = [];
            // var catAnt= [];
            // antigeno.forEach(function(item){               
            //     switch (item.name) {  
            //         case 1: item.name = 'Enero'; break;
            //         case 2: item.name = 'Febreo'; break;
            //         case 3: item.name = 'Marzo'; break;
            //         case 4: item.name = 'April'; break;
            //         case 5: item.name = 'Mayo'; break;
            //         case 6: item.name = 'Junio'; break;
            //         case 7: item.name = 'Julio'; break;
            //         case 8: item.name = 'Agosto'; break;
            //         case 9: item.name = 'Septiembre'; break;
            //         case 10: item.name = 'Octubre'; break;
            //         case 11: item.name = 'Noviembre'; break;
            //         case 12: item.name = 'Diciembre'; break;
            //         default: break;
            //         }
            //     // 
            //     catAnt.push(item.name);
            // });
            // antigeno.forEach(function(item){
            //     positivos.push(parseInt(item.posi)); 
            // });


            // Highcharts.chart('antigenos',{
            //     chart: {
            //         type: 'column'
            //     },
            //     title: {
            //         text: 'Pruebas Antigeno Nasal'                    
            //     },
            //     subtitle: {
            //         text: 'Fuente: Safci'
            //         },
            //     yAxis: {
            //         title:{
            //                 text: 'Numero de Positivos y Negativos'
            //                 },                   
            //     },
            //     xAxis: {                    
            //         categories: catAnt,          
            //         },
            //     legend: {
            //         layout: 'vertical',
            //         align: 'right',
            //         verticalAlign: 'middle'
            //     },
            //     series: [{name: "Positivos", data: positivos} ],
            //     plotOptions: {
            //         column: {
            //             stacking: 'normal',
            //             dataLabels: {
            //                 enabled: true
            //             }
            //         }
            //     },                
            //     responsive: {
            //         rules: [{
            //             condition: {
            //                 maxWidth: 500
            //             },
            //             chartOptions: {
            //                 legend: {
            //                     layout: 'horizontal',
            //                     align: 'center',
            //                     verticalAlign: 'bottom'
            //                 }
            //             }
            //         }]
            //     }

            // })

            var optionsAnt = {
               chart: {
                   type: 'column',
                   events: {
                       load:requestDataAnt
                   }
               },
                title: {
                    text: 'Pruebas Antigeno Nasal'                    
                },
                subtitle: {
                    text: 'Fuente: Safci'
                    },
                yAxis: {
                    title:{
                            text: 'Numero de Positivos y Negativos'
                            },
                    stackLabels: {
                        enabled: true,
                        style: {
                            fontWeight: 'bold',
                            color: ( // theme
                                Highcharts.defaultOptions.title.style &&
                                Highcharts.defaultOptions.title.style.color
                            ) || 'gray'
                        }
                    }
                },
                // xAxis: {                    
                //     categories: catCon,          
                //     },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle'
                },
                // series: [{name: "Vacunados", data: []} ],
                plotOptions: {
                    column: {
                        stacking: 'normal',
                        dataLabels: {
                            enabled: true
                        }
                    }
                },                
                responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom'
                            }
                        }
                    }]
                }

            };

            var chartAnt = Highcharts.chart('antigenos', optionsAnt)

            function requestDataAnt(){               
                fetch('/salacovid/antigenos',{
                    method: 'GET',
                    headers: {"Accept": "application/json"}})
                    .then(function(response){                    
                    return response.json()
                    })
                    .then(function(data1){
                    console.log(data1);
                    var positivos = [];
                    var negativos = [];
                    var catAnt= [];
                    data1.forEach(function(item){               
                        switch (item.name) {  
                            case '1': item.name = "Enero"; break;
                            case '2': item.name = "Febreo"; break;
                            case '3': item.name = "Marzo"; break;
                            case '4': item.name = "April"; break;
                            case '5': item.name = "Mayo"; break;
                            case '6': item.name = "Junio"; break;
                            case '7': item.name = "Julio"; break;
                            case '8': item.name = "Agosto"; break;
                            case '9': item.name = "Septiembre"; break;
                            case '10': item.name = "Octubre"; break;
                            case '11': item.name = "Noviembre"; break;
                            case '12': item.name = "Diciembre"; break;
                            default: break;
                            }
                        
                        catAnt.push(item.name);
                    });

                    data1.forEach(function(item){
                        positivos.push(parseInt(item.posi)); 
                        negativos.push(parseInt(item.neg)); 
                    });
                    // console.log(positivos);
                    chartAnt.xAxis[0].categories = catAnt;
                    chartAnt.addSeries({
                            name: "Positivos",
                            data: positivos,
                            color: '#e3390f',
                    }) ;
                    chartAnt.addSeries({
                            name: "Negativos",
                            data: negativos,
                            color: '#64b4f4',
                    }) ;
                })
                .catch(function(error) {
                    console.log(error);
                })
            }

       


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
