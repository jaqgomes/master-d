<html>

<head></head>

<body>
    <script type="text/javascript">
        /*funcao para criar o objeto AJAX que permite a conexao */$

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

        function passarPhp() {
            var valor1 = 5;

            var valor2 = 6;

            httpObject = getHTTPObject();

            if (httpObject !== null) {

                /*abrir a conexao AJAX com o PHP enviando as variaveis */

                httpObject.open("GET", "soma.php?v1=" + valor1 + "&v2=" + valor2, true);

                httpObject.onreadystatechange = function () {

                    if (httpObject.readyState == 4) {

                        /* quando terminar de carregar soma.php mostra o conteudo criado */arguments

                        alert(httpObject.responseText);
                    }
                }

                httpObject.send(null);
            }
        }

    </script>

    <a href="#" onclick="passarPhp()">Envio de teste</a>
    /* Este link gera o evento que chama o AJAX */
    </scrip>
</body>

</html>