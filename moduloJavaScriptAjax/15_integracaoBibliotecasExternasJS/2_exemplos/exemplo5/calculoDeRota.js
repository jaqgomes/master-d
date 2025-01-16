var mapa;
var mostrarDireccao;
var serviceRota;

function carregarMapa() {
    mostrarDireccao = new google.maps.DirectionsRenderer();
    serviceRota = new google.maps.DirectionsService();
    var ponto = new google.maps.LatLng(38.733572717953415, -9.141140002274987);

    var opcoes = {
        zoom: 7,
        center: ponto,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    mapa = new google.maps.Map(document.getElementById("mapa"), opcoes);

    mostrarDireccao.setMap(mapa);
    mostrarDireccao.setPanel(document.getElementById("rota"));
}

function calcularRota() {
    var partida = document.getElementById("partida").value;
    var destino = document.getElementById("destino").value;

    var opcoes = {
        origin: partida,
        destination: destino,
        travelMode: google.maps.DirectionsTravelMode.DRIVING,
    };


    serviceRota.route(opcoes, function (response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            mostrarDireccao.setDirections(response);
        }
    })
}
