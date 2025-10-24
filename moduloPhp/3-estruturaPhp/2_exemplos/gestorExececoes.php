<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="Gestor de exceções: Uma exececao pode ser lancada e capturada dentro da execucao do PHP: o codigo tera que estar dentro de um try devera 
        ter pelo menos um try e cada try devera ter pelo menos um catch,
         e se nenhum erro for criado ou lancar qualquer exececucao do script, continuira apos o ultimo catch.">

    <title>Gestor de Exceções</title>
</head>

<body>
    <p>
        <?php

        function teste($var)
        {

            try {
                if ($var == '') {
                    throw new exception('não estou a pensar a nada');
                }

                if ($var == 'carros') {
                    throw new exception('estou a pensar em carros');
                }

                if ($var == 'motas') {
                    throw new exception('estou a pensar em motas');
                }

                echo 'pensei em ' . $var;

            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        teste('motas');


        ?>
    </p>
</body>

</html>