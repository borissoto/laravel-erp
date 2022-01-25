<!DOCTYPE html>
<head>
    
    <title></title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
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
   
   <h5>PROGRAMA ATENCION PRIMARIA INTEGRAL SAFCI - MI SALUD</h5>
   <h5>PEDIDO DE MATERIAL DE ALMACEN</h5>
    <div class="a">
        <label>Boleta Nro: </label> <strong> {{$sol->boleta}}</strong> 
    </div>
    <div class="a">
        <label>Fecha Solicitud: </label>  <strong> {{$sol->fecha_solicitud}} </strong> 
    </div>
    <div class="a">
        <label>Unidad: </label> <strong> PROGRAMA ANTENCION PRIMARIA INTEGRAL SAFCI </strong> 
    </div>
    <div class="a">
        <label>Solicitante</label> <strong> {{$sol->usuario->nombres.' '.$sol->usuario->ap_paterno.' '.$sol->usuario->ap_materno}} </strong>
    </div>
   <div class="a">
       <label>Cargo: </label> <strong> {{$sol->usuario->cargos->nom_cargo}}</strong> 
   </div>
    <div>
        <label>Justificativo</label><textarea> {{$sol->justificativo}} </textarea>        
    </div>
    <p></p>
    <br/>
   <table width="100%">
    <thead>
    <tr>

        <th>Id</th>
        <th>Articulo</th>
        <th>Unidad</th>
        <th>Cantidad Solicitada</th>                        
       
    </tr>
    </thead>
    <tbody>
    @foreach($peds as $ped)
    <tr> 
        <td>{{ $ped->alm_articulo_id}}</td>
        <td>{{ $ped->articulo->descrip}}</td>
        <td>{{ $ped->articulo->unidad->unidad}}</td>
        <td>{{ $ped->cantidad}}</td>                        
    </tr> 
    @endforeach   
    </tbody>
</table>
</body>
</html>