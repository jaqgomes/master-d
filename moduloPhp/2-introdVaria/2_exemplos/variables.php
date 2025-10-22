<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=" author" content="Jaqueline Lima">
    <meta name="description"
        content="exemplo demonstrando utilizar os valores das variaveis como nomes de outras variaveis">

    <title>Variables Variables</title>
</head>

<body>
    <?php

    $var = 'Olá';
    $$var = 'mundo';

    echo "$var ${$var}";
    ?>
</body>

</html>