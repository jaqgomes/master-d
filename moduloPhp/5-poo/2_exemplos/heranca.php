<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="exemplo de heranca pode ser atribuida a um método">
    <title>Herança</title>
</head>

<body>
    <p>
        <?php

        class livro
        {
            public $titulo;
            function __construct()
            {
                $this->titulo = func_get_arg(0);
            }

            public function mostrarTitulo()
            {
                echo $this->titulo . 
                '<br>';
            }

        }

        class livro_ficcao extends livro
        {
            public $tematica;
            public function mostrarTematicaFiccao()
            {
                echo $this->tematica . '<br>';
            }
        }

        $liv1 = new livro('Dom Quixote');
        $liv2 = new livro_ficcao('Encontros Imediatos de Terceiro Grau');
        $liv2->tematica = 'Extraterrestres';
        $liv1->mostrarTitulo();

        //$liv1 -> mostrarTematicaFiccao();
        
        $liv2->mostrarTitulo();
        $liv2->mostrarTematicaFiccao();

        ?>
    </p>

</body>

</html>