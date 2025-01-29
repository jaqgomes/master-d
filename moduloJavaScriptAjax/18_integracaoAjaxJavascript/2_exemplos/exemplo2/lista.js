function mostrar() {

    var xmlHttp = new XMLHttpRequest();

    xmlHttp.open("GET", "lista.php", false);
    xmlHttp.send(null);

    var resultado = document.getElementById("resultado");
    resultado.innerHTML = xmlHttp.responseText;
}

function esconder() {
    var resultado = document.getElementById("resultado");
    resultado.innerHTML = "";
}