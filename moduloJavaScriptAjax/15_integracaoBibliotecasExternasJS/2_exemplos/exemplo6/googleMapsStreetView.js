function carregarMapa() {
    var ponto = new google.maps.LatLng(38.73376520878317, -9.141150730691137);

    var opcoes = {
        zoom: 12,
        center: ponto,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    mapa = new google.maps.Map(document.getElementById("mapa"), opcoes);

    var opcoesFotos = {
        position: ponto,

        pov: {
            heading: 90,
            pitch: 0,
            zoom: 2
        }
    };

    var fotos = new google.maps.StreetViewPanorama(document.getElementById("fotos"), opcoesFotos);

    mapa.setStreetView(fotos);
}