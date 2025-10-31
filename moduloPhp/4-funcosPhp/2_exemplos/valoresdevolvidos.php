<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="Exemplo de criação da função">

    <title>Exemplo de criação de função</title>
</head>

<body>

    <p>
        <?php
        function teste1(): string
        {
            return "Devolve uma string.";
        }
        echo teste1();
        ?>
    </p>
</body>

</html>