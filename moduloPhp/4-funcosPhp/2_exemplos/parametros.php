<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="exemplo de passar parametros">
    <title>Exemplo de Parâmetros</title>
</head>

<body>
    <?php
    function teste1($valor)
    {
        $valor++;
        return $valor;
    }
    $teste = 3;
    $testeD = teste1($teste);
    echo $teste . '<br/>';
    echo $testeD;
    ?>
</body>

</html>