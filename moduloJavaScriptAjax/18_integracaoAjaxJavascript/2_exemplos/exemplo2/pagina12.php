<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Carrregar dados</title>

    <!-- <script type="text/javascript" src="lista.js"></script> -->

    <script type="text/javascript">
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
    </script>
</head>

<body>


    <form>
        <input type="button" onClick="mostrar()" value="Mostrar Cantores">

        <input type="button" onClick="esconder()" value="Esconder muscias">

    </form>

    <div id="resultado"></div>
</body>

</html>