<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="Exercicio de Criacao de Pagina em PHP com recurso a Funções">

    <title>Exercicio de Criacao de Pagina em PHP com recurso a Funções</title>
</head>

<body>
    <?php

    function somarDias($dias)
    {
        $seguinte = time() + (7 * 24 * 60 * 60);

        echo 'Proxima  data ' . date('Y.m.d', $seguinte);
    }
    somarDias(4);
    ?>
</body>

</html>