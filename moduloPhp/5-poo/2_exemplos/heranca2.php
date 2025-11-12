<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="exemplo herança em classes">

    <title>Exemplo de herança em classes</title>
</head>

<body>

    <p>

        <?php

        class Animal
        {
            private $tamanho = '';
            private $tipo = '';

            function __construct($tamanho, $tipo)
            {
                $this->tamanho = $tamanho;
                $this->tipo = $tipo;
            }

            function cumprimentar()
            {
                echo 'Olá eu sou de um tamanho ' . $this->tamanho . ' e de tipo ' . $this->tipo = '.';
            }
        }

        class Peixe extends Animal
        {
            //pode usar e modificar os métodos a classe principal
        
            function cumprimentar()
            {
                parent::cumprimentar();
                echo 'Mas eu tamabém faço glup glup glup';
            }

            //método que só tem esta classe
        
            function nada()
            {
                echo 'Estou a nadar !!';
            }
        }

        class Passaro extends Animal
        {

            //pode usar e modificar os métodos da classe principal
        
            function cumprimentar()
            {
                parent::cumprimentar();
                echo ' Mas eu também faço piu piu';
            }

            //método que só tem classe 
            function voa()
            {
                echo 'Estou a voar!!';
            }
        }

        $peixe = new Peixe('pequeno', 'herbívero');
        $passaro = new Passaro('mediando', 'carnívoro');

        //Peixe
        
        $peixe->cumprimentar();
        echo '<br>';

        $peixe->nada();
        echo '<br><br>';

        //Pássaro
        $passaro->cumprimentar();
        echo '<br>';
        $passaro->voa();

        ?>

    </p>
</body>

</html>