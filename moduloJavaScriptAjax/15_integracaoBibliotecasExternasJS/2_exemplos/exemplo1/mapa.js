function carregarMapa() {
    var ponto = new google.maps.LatLng(38.733572717953415, -9.141140002274987);

    var opcoes = {
        zoom: 12,
        center: ponto,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var m = new google.maps.Map(document.getElementById("mapa"), opcoes);
}