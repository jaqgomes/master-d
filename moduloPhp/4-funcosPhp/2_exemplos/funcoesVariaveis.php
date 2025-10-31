<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="Exemplo de Função Variáveis">
    <title>Document</title>
</head>

<body>
    <p>
        <?php
        function teste()
        {
            echo 'Sou uma função variável !';
        }
        $var = 'teste';
        $var();
        ?>
    </p>
</body>

</html>