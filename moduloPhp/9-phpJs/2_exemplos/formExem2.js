function getHTTObject() {
  //criar o objeto AJAX para carregar ficheiros do servidor.
  if (window.ActiveXObject) {
    return new ActiveXObject("Microsoft.XMLHTTP");
  } else if (window.XMLHttpRequest) {
    return new XMLHttpRequest();
  } else {
    alert("Não suportado");
    return null;
  }
}

function validate() {
  //criar um string JSON a partir dos dados do formulario

  var p = document.forms["pessoal"];

  var JSONObject = new Object();

  JSONObject.firstname = p["nome"].value;

  JSONObject.email = p["email"].value;

  JSONObject.passatempo = new Array();

  for (var i = 0; i < 2; i++) {
    JSONObject.passatempo[i] = new Object();
    JSONObject.passatempo[i].passatempo = p["passatempo"][i].value;
    JSONObject.passatempo[i].marcado = p["passatempo"][i].checked;
  }

  jsonString = JSON.stringify(JSONObject);
  runAjax(jsonString);
}

var request;
function runAjax(jsonString) {
  request = getHTTObject();

  //chamar sendData quando o ficheiro AJAX é carregado

  request.onreadystatechange = sendData;

  request.open("GET", "compilador.php?json=" + jsonString, true);

  request.send(null);
}

function sendData() {
  if (request.readyState == 4) {
    var jsonText = request.responseText;

    try {
      // esta funcao Javascript converte uma string em JSON
      var JSONObject = JSON.parse(jsonText);

      var msg;

      if (JSONObject.sucess == 1) {

        msg = JSONObject.created;

      } else {

        msg =
          "Erros: " +
          JSONObject.errorsNum +
          "\n- " +
          JSONObject.error[0] +
          "\n- " +
          JSONObject.error[1];
      }

      //mostrar os dados depois de carregá-los como JSON

      alert(msg);

    } catch (e) {
      
      alert(jsonText);
    }
  }
}
