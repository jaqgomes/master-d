function carregar(ano) {
    var objHttp = null;

    if (window.XMLHttpRequest) {

        objHttp = new XMLHttpRequest();

    } else if (window.ActiveXObject) {

        objHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    console.log(ano);
    objHttp.open("GET", "dados.php?ano=" + ano, true);

    objHttp.onreadystatechange = function () {

        if (objHttp.readyState == 4) {
            document.getElementById('caixa').innerHTML = objHttp.responseText;

        }
    }

    objHttp.send(null);
}