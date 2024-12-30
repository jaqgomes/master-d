function carregar(numero) {
    var objHttp = null;

    if (window.XMLHttpRequest) {
        objHttp = new XMLHttpRequest();
    } else if (window.ActiveXobject) {
        objHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    objHttp.open("GET", "text" + numero + ".html", true);
    objHttp.onreadystatechange = function () {

        if (objHttp.readyState == 4) {
            document.getElementById('caixa').innerHTML = objHttp.responseText;
        }
    }
    objHttp.send(null);
}