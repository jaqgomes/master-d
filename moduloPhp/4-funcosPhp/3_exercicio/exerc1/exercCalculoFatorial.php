<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="Exercício de Fatorial de Número Utilizando funções em PHP">

    <title>Exercício de Função de PHP</title>
</head>

<body>
    <?php
    function fatorial($numero)
    {

        if ($numero == 0)
            return 1;
        return ($numero * fatorial($numero - 1));
    }
    echo fatorial(
        15
    )
        ?>
</body>

</html>