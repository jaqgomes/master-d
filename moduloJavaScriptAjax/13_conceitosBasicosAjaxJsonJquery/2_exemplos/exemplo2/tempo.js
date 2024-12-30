function carregar() {

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {
            mostrar(this);
        }
    };

    xhttp.open("GET", "tempo.xml", true);
    xhttp.send();


    function mostrar(xml) {
        var nome, i, objHttp, frase;

        objHttp = xml.responseXML;
        frase = "";
        nome = objHttp.getElementsByTagName('nome');
        estado = objHttp.getElementsByTagName('estado');
        max = objHttp.getElementsByTagName('maxima');
        min = objHttp.getElementsByTagName('minima');

        for (i = 0; i < nome.length; i++) {
            frase += "Cidade: <b>" + nome[i].childNodes[0].nodeValue + "</b><br/>";

            frase += "Estado do céu: " + estado[i].childNodes[0].nodeValue + "<br/>";

            frase += "Temperatura Máxima: " + max[i].childNodes[0].nodeValue + "<br/>";

            frase += "Temperatura Mínima: " + min[i].childNodes[0].nodeValue + "<br/><br/><br/>";


        }

        document.getElementById("caixa").innerHTML = frase;
    }

}