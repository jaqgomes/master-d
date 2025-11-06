<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="">

    <title>Livro</title>
</head>

<body>
    <p>
        <?php
        class livro
        {
            public $titulo;
            public function mostrarTitulo()
            {
                echo $this->titulo;
            }
        }

        $liv1 = new livro();
        $liv1 -> titulo = 'Dom Quixote';
        $liv1 -> mostrarTitulo();
        ?>
    </p>
</body>

</html>