function carregarMapa() {
    var ponto = new google.maps.LatLng(38.73376520878317, -9.141150730691137);

    var opcoes = {
        zoom: 12,
        center: ponto,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var m = new google.maps.Map(document.getElementById("mapa"), opcoes);

    var marca = new google.maps.Marker({
        position: ponto,
        map: m,
        title: "MasterD"
    });
}