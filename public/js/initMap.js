function initMap(){      
    const ubicacion = new Localizacion(()=>{
                
        const options = {
            center: {
                lat: ubicacion.latitude,
                lng: ubicacion.longitude
            },
            zoom: 14
        }

       
        var map = document.getElementById('gmap');       
               
        const mapa = new google.maps.Map(map, options);

        var pin = new google.maps.Marker(
                    { 
                    position: {lat:ubicacion.latitude, lng:ubicacion.longitude},
                    map: mapa,
                    title: "Usted esta Aqui",
                    draggable: true,
                    animation: google.maps.Animation.DROP,
                    });

        google.maps.event.addListener(pin, 'dragend', function (evt) {
            // var element = document.querySelector('input[name="lat"]').value = 'hola';
            // document.querySelector('input[name="long"]').value = 'hola';
            // element.dispatchEvent(new Event('input'));
        $("#lat").prop('value',evt.latLng.lat().toFixed(6));
        $("#long").prop('value', evt.latLng.lng().toFixed(6));
        var latitud = document.getElementById('lat');
        latitud.dispatchEvent(new Event('input'));
        var longitud = document.getElementById('long');
        longitud.dispatchEvent(new Event('input'));
        //map.panTo(evt.latLng);
        });
        
    });    
}

