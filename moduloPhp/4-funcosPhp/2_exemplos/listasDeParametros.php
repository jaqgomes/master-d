<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="Exemplo de lista de Parametros">

    <title>Exemplo de Lista de Parametros</title>
</head>

<body>
    <p>
        <?php
        function teste1()
        {
            $argumentos = func_num_args();

            if ($argumentos >= 3) {
                echo "O terceiro parâmetro é: " . func_get_arg(2);
            } else {
                echo "Não existe este valor!</br>";
            }
        }

        teste1('azul', 3);
        teste1('azul', 3, 'casa', 'true');
        ?>
    </p>
</body>

</html>