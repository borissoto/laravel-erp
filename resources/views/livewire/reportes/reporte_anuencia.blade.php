<!DOCTYPE html>
<head>
    
    <title></title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style type="text/css">
          @page { margin-left: 80px; }
.justtext {text-align: justify}        
h4 {text-align: center;}
h5 {text-align: center;}
table {
    border-left: 0.01em solid #ccc;
    border-right: 0;
    border-top: 0.01em solid #ccc;
    border-bottom: 0;
    border-collapse: collapse;
}
table td,
table th {
    border-left: 0;
    border-right: 0.01em solid #ccc;
    border-top: 0;
    border-bottom: 0.01em solid #ccc;
}
div.a{
    font-size: 14px;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}

footer { position: fixed; bottom: 40px; left: 0px; right: 0px; background-color: lightblue; height: 50px; }


    </style>
        
    
</head>
<body>
    
        <img src="{{ public_path('img/anuencia_logo.jpg') }}" style="width: 100%">
    
    <br/>

   <h4 >INSTRUCTIVO</h4>  
   <h4>MYSD/PSAFCI/IN/{{$var['com']->cite}}/2021</h4>
    <div class="justtext" style="font-size: 14px">
        
        LA COORDINADORA DEPARTAMENTAL Y PERSONAL DEPENDIENTE DEL PROGRAMA SAFCI DEL DEPARTAMENTO DE <strong> {{$var['com']->departamento->nom_departamento}} </strong>
        EN RESPUESTA LA NOTA INTERNA <strong> {{$var['com']->nota_interna}} </strong> 
        <br/>SE INSTRUYE: <strong> {{$var['com']->descripcion}} </strong>
        A SOLICITUD DE LA COORDINADORA DEPARTAMENTAL DEL PROGRAMA SAFCI.<br/>
        LA ACTIVIDAD QUE SE DESARROLLARA <strong> {{$var['com']->lugar}} </strong>. EN FECHA <strong> {{ \Carbon\Carbon::parse($var['com']->fecha_ini)->format('Y/m/d')}}  </strong> AL <strong> {{\Carbon\Carbon::parse($var['com']->fecha_fin)->format('Y/m/d')}} </strong>


        


        <br/><br/> EL PERSONAL QUE PARTICIPARA SE DETALLLA A CONTINUACION:
    </div>
  
    <p></p>
    <br/>
   <table width="100%" style="font-size: 14px">
    <thead>
    <tr style="background-color:lightgreen; font-size: 0.8em">

        <th>Id</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Cargo</th>                        
        <th>CI</th>                        
        <th>Item</th>                        
        <th>Municipio</th>                        
       
    </tr>
    </thead>
    <tbody>
    @foreach($var['users'] as $user)
    <tr style="font-size: 0.8em"> 
        <td>{{ $user->user_id}}</td>
        <td>{{ $user->usuario->nombres}}</td>
        <td>{{ $user->usuario->ap_paterno.' '.$user->usuario->ap_materno }}</td>
        <td>{{ $user->usuario->grado}}</td>                        
        <td>{{ $user->usuario->ci}}</td>                        
        <td>{{ $user->usuario->item}}</td>                        
        <td>{{ $user->usuario->establecimiento->municipio->nom_municipio}}</td>                        
    </tr> 
    @endforeach  
    </tbody>
</table>
<br/>
<div class="justtext" style="font-size: 14px">    
    EL INCUMPLIMIENTO AL PRESENTE INSTRUCTIVO SERA SANCIONADO SEGUN NORMATIVA VIGENTE
    <br/>
    <br/>
    ATENTAMENTE
</div>
<br/>
<br/>
@php
   \Carbon\Carbon::setLocale('es');
@endphp
<div style="text-align: right">
La Paz, {{ \Carbon\Carbon::parse($var['com']->created_at)->translatedFormat('d F Y') }}
</div>
<footer>
    <img src="{{ public_path('img/comision_footer.jpg') }}" style="width: 100%; ">
</footer>
</body>
</html>