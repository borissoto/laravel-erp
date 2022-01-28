<!DOCTYPE html>
<head>
    
    <title></title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style type="text/css">
         @page { margin-left: 80px; }
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
footer { position: fixed; bottom: 180px; left: 0px; right: 0px; height: 50px; }

    </style>
        
    
</head>
<body>
    <img src="{{ public_path('img/anuencia_logo.jpg') }}" style="width: 100%">
   
   <h5>PROGRAMA ATENCION PRIMARIA INTEGRAL SAFCI - MI SALUD</h5>
   <h5 style="text-decoration-line: underline; ">PEDIDO DE MATERIAL DE ALMACEN</h5>
   <table width="100%" style="font-size: 12px">
       <thead></thead>
       <tbody>
            <tr>
               <td>Boleta Nro:</td>
               <td><strong> {{$var['sol']->boleta}}</strong></td>
            </tr>
            <tr>
               <td>Fecha Solicitud:</td>
               <td><strong> {{$var['sol']->fecha_solicitud}} </strong> </td>
            </tr>
            <tr>
               <td>Unidad:</td>
               <td><strong> PROGRAMA ANTENCION PRIMARIA INTEGRAL SAFCI </strong> </td>
            </tr>
            <tr>
               <td>Solicitante</td>
               <td><strong> {{$var['sol']->usuario->nombres.' '.$var['sol']->usuario->ap_paterno.' '.$var['sol']->usuario->ap_materno}} </strong></td>
            </tr>
            <tr>
               <td>Cargo</td>
               <td><strong> {{$var['sol']->usuario->cargos->nom_cargo}}</strong> </td>
            </tr>
            <tr>
               <td>Justificativo</td>
               <td>{{$var['sol']->justificativo}}</td>
            </tr>
       </tbody>

   </table>
    {{-- <div class="a">
        <label>Boleta Nro: </label> <strong> {{$var['sol']->boleta}}</strong> 
    </div>
    <div class="a">
        <label>Fecha Solicitud: </label>  <strong> {{$var['sol']->fecha_solicitud}} </strong> 
    </div>
    <div class="a">
        <label>Unidad: </label> <strong> PROGRAMA ANTENCION PRIMARIA INTEGRAL SAFCI </strong> 
    </div>
    <div class="a">
        <label>Solicitante</label> <strong> {{$var['sol']->usuario->nombres.' '.$var['sol']->usuario->ap_paterno.' '.$var['sol']->usuario->ap_materno}} </strong>
    </div>
   <div class="a">
       <label>Cargo: </label> <strong> {{$var['sol']->usuario->cargos->nom_cargo}}</strong> 
   </div>
    <div class="a">
        <label>Justificativo</label><textarea> {{$var['sol']->justificativo}} </textarea>        
    </div> --}}
    <p></p>
    <br/>
   <table width="100%" style="font-size: 12px">
    <thead>
    <tr>

        <th>Id</th>
        <th>Articulo</th>
        <th>Unidad</th>
        <th>Cantidad Solicitada</th>                        
       
    </tr>
    </thead>
    <tbody>
    @foreach($var['peds'] as $ped)
    <tr> 
        <td>{{ $ped->alm_articulo_id}}</td>
        <td>{{ $ped->articulo->descrip}}</td>
        <td>{{ $ped->articulo->unidad->unidad}}</td>
        <td>{{ $ped->cantidad}}</td>                        
    </tr> 
    @endforeach   
    </tbody>
</table>


<footer>
<table width="100%" style="font-size: 12px; table-layout:fixed; width:100%;">
    <thead>
        <tr>
            <th>SOLICITADO POR:</th>
            <th>AUTORIZADO POR:</th>
            <th>ENTREGUE CONFORME:</th>
            <th>RECIBI CONFORME:</th>                        
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="width: 25%;"><br/><br/><br/><br/><br/></td>
            <td style="width: 25%;"></td>
            <td style="width: 25%;"></td>
            <td style="width: 25%;"></td>                        
        </tr>

    </tbody>
    <tfoot>
        <tr>
            <td>FIRMA y SELLO</td>
            <td>FIRMA y SELLO</td>
            <td>FIRMA y SELLO</td>
            <td>FIRMA y SELLO</td>                        
        </tr>
    </tfoot>
</table>
<br/>


    <img src="{{ public_path('img/comision_footer.jpg') }}" style="width: 100%; ">
</footer>
</body>
</html>