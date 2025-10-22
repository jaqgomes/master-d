<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="exemplo de elseif">

    <title>Exemplo de elseIf</title>

</head>

<body>
    <?php

    $var = 2;
    $var2 = 4;

    if ($var > $var2) {
        echo 'var é menor que var2';

    } elseif ($var = $var2) {
        echo 'var é igual a var2';

    } else {
        echo 'var é maior que var2';
    }
    ?>
</body>

</html>