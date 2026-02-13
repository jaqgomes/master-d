function getHTTPObject() {

  if (window.ActiveXObject) {

    return new ActiveXObject("Microsoft.XMLHTTP");

  } else if (window.XMLHttpRequest) {

    return new XMLHttpRequest();

  } else {

    alert("Não suportado");

    return null;
  }
}

function devolverProvincias() {
  var pais = document.getElementById("pais").value;

  httpObject = getHTTPObject();

  if (httpObject != null) {
    httpObject.open("GET", "provincias.php?pais=" + pais, true);

    httpObject.onReadyStatechange = function () {

      if (httpObject.readystate == 4) {

        document.getElementById("provincias").innerHTML =
          httpObject.responseText;
      }
    };

    httpObject.send(null);
  }
}
