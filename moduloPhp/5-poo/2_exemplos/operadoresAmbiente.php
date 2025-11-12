<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="exemplo de operadores ambiente">

    <title>Exemplo de operadores ambiente</title>
</head>

<body>
    <?php
    class livro
    {
        const titulo = 'Dom Quixote ';
        public static function vezesAlugado()
        {
            echo '50';
        }
    }

    echo livro::titulo;
    echo livro::vezesAlugado();
    ?>
</body>

</html>