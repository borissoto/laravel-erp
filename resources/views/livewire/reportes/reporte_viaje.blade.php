<!DOCTYPE html>
<head>
    
    <title></title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style type="text/css">
@page { margin-left: 80px; }
.justtext {text-align: justify}        

h4 {text-align: center;}
table {
    border-left: 1 solid #ccc;
    border-right: 1;
    border-top: 1 solid #ccc;
    border-bottom: 1;
    border-collapse: collapse;
}
table td,
table th {
    border-left: 1;
    border-right: 1 solid #666;
    border-top: 1;
    border-bottom: 1 solid #666;
}
div.a{
    font-size: 14px;
}
footer { position: fixed; bottom: 40px; left: 0px; right: 0px; background-color: lightblue; height: 50px; }

    </style>
        
    
</head>
<body>
    <img src="{{ public_path('img/anuencia_logo.jpg') }}" style="width: 100%">
    @php    \Carbon\Carbon::setLocale('es'); @endphp
   
   <h4>MEMORANDUM</h4>
   
   <h4>MSyD/PSAFCI/ME/{{$viaje->cite}}/2021</h4>
    <table width="100%" style="font-size: 14px">

        <tbody>
            <tr>
                <td style="padding-left: 8px">
                    MINISTERIO DE SALUD Y DEPORTES<br/>
                    PROGRAMA SALUD FAMILIAR<br/>
                    COMUNITARIA INTERCULTURAL<br/><br/><br/>

                    La Paz, {{ \Carbon\Carbon::parse($viaje->created_at)->translatedFormat('d F Y') }}
                </td>
                <td style="padding-left: 8px">
                    Dr(a).<br/>
                    <strong> {{$viaje->coordinador->nombres.' '.$viaje->coordinador->ap_paterno.' '.$viaje->coordinador->ap_materno}} </strong> <br/>
                    COORDINADOR(A)<br/>
                    DEPARTAMENTAL DE LA <br/>
                    IMPLEMENTACION DE LA <br/>
                    POLITICA SAFCI - MI SALUD<br/>
                    {{$viaje->departamento->nom_departamento}}<br/>

                </td>
            </tr>
        </tbody>
    </table>
    <br/>
    <br/>   
    
<div class="justtext" style="font-size: 14px">

    Doctor(a):  {{$viaje->coordinador->ap_paterno}} <br/> <br/>
    Mediante el presente memorandum tengo a bien comunicarle a usted, con el item Nro <b> {{$viaje->coordinador->item}} </b> y 
    CI <b> {{$viaje->coordinador->ci}} </b> que fue designado en comision de viaje a fin de realizar <b> {{$viaje->objeto}} </b>
    en el marco de la <strong> {{$viaje->poa->operacion}} </strong>, para el cumplimiento del mismo,
    se le designa a cumplir con el siguiente cronograma:

   
    <br/>
    <br/>
   

    <div class="a">
        <label>Lugar: </label> <strong> {{$viaje->lugar}}</strong> 
    </div>
    <div class="a">
        <label>Departamento: </label>  <strong> {{$viaje->departamento->nom_departamento}} </strong> 
    </div>
    <div class="a">
        <label>Objeto de la comision: </label> <strong>  {{$viaje->poa->operacion}} </strong> 
    </div>
    <div class="a">
        <label>Fecha Salida</label> <strong> {{ \Carbon\Carbon::parse($viaje->fecha_salida)->translatedFormat('d F Y')}} <strong>
    </div>
    <div class="a">
        <label>Fecha Retorno</label> <strong> {{ \Carbon\Carbon::parse($viaje->fecha_retorno)->translatedFormat('d F Y')}} </strong>
    </div>
   <div class="a">
       <label>Duracion: </label> <strong> {{$viaje->duracion}}</strong> dia(s).
   </div>
   <div class="a">
       <label>Medio de Transporte: </label> <strong> {{$viaje->transporte}}</strong> 
   </div>
    {{-- <div>
        <label>Justificativo</label><textarea> {{$viaje->justificativo}} </textarea>        
    </div> --}}
    <p></p>
    <br/>

    Por lo que se declara en comision en la efcha mencionadas, cabe señalar que el pago de viaticos y combustible y
    matenimiento sera con la Unidad Ejecutora 59, Programa de Atencion Primaria Integral SAFCI - MI SALUD, D.A. 10, Fuente 42
    - Transferenica de Recursos Especificos, Organismo 230 - Otros Recursos Especificos.
    <br/>
    Se le recuerda que una vez concluida la actividad debera emitir informe dentro del os plazos establecidos por el actual
    Reglamento de la Institucion.
    <br/>
    Atentamente.
    <br/>
    <br/>
</div>

    {{-- <table width="100%">
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
    </table> --}}
    <footer>
        <img src="{{ public_path('img/anuencia_footer.jpg') }}" style="width: 100%; ">
    </footer>
</body>
</html>