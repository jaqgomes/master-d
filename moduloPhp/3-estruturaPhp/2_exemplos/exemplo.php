<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="continuacao de exemplo de include">

    <title>Exemplo include</title>
</head>

<body>
    <p>
        <?php
        include 'variaveis.php';
        echo 'resultado: ' . $variavel.'-'. $variavel2.'-'. $variavel3;
        ?>
    </p>
</body>

</html>