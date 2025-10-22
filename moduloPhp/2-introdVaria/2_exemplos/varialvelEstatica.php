<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="exemplo de variavel estatica">

    <title>Variável estática</title>
</head>

<body>
    <p>
        <?php

        function contador()
        {
            static $ct = 0;
            echo $ct;
            $ct++;
        }

        contador();
        contador();
        contador();
        contador();
        contador();
        contador();
        ?>
    </p>
</body>

</html>