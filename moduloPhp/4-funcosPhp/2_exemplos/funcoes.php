<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="Exemplo de criar uma funcao para calcular o fatorial de um determinado numero">

    <title>Exercicio de calculo de fatorial</title>
</head>

<body>
    <?php
    function fatorial($numero)
    {

        if ($numero == 0)
            return 1;

        return ($numero * fatorial($numero - 1));
    }
    echo fatorial(4);
    ?>
</body>

</html>