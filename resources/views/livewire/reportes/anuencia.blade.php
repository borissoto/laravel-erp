<!DOCTYPE html>
<head>
    
    <title></title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
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


    </style>
        
    
</head>
<body>
   
   <h4>INSTRUCTIVO</h4>
   <h5>MYSD/PSAFCI/IN/{{$com->cite}}/2021</h5>

   LA COORDINADORA DEPARTAMENTAL Y PERSONAL DEPENDIENTE DEL PROGRAMA SAFCI DEL DEPARTAMENTO DE <strong> {{$com->departamento->nom_departamento}} </strong>
   EN RESPUESTSAA LA NOTA INTERNA <strong> {{$com->nota_interna}} </strong> SE INSTRUYE: <strong> {{$com->descripcion}} </strong>
   A SOLICITUD DE LA COORDINADORA DEPARTAMENTAL DEL PROGRAMA SAFCI.<br/>
   LA ACTIVIDAD QUE SE DESARROLLARA EN FECHA <strong> {{$com->fecha_ini}}  </strong> AL <strong> {{$com->fecha_fin}} </strong>
   <br/> EL PERSONAL QUE PARTICIPARA SE DETALLLA A CONTINUACION:<br/><br/>
 
    <p></p>
    <br/>
   <table width="100%" style="font-size: 14px">
    <thead>
    <tr>

        <th>Id</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Grado</th>                        
        <th>CI</th>                        
        <th>Item</th>                        
       
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr> 
        <td>{{ $user->id}}</td>
        <td>{{ $user->usuario->nombres}}</td>
        <td>{{ $user->usuario->ap_paterno}}</td>
        <td>{{ $user->usuario->grado}}</td>                        
        <td>{{ $user->usuario->ci}}</td>                        
        <td>{{ $user->usuario->item}}</td>                        
    </tr> 
    @endforeach   
    </tbody>
</table>
<br/>
    
EL INCUMPLIMIENTO AL PRESENTE INSTRUCTIVO SERA SANCIONADO SEGUN NORMATIVA VIGENTE
<br/>
ATENTAMENTE
</body>
</html>