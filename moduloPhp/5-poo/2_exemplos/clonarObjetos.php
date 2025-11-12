<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="Exemplo de clonar objetos">
    <title>Exemplo de clonar objetos</title>
</head>

<body>
    <p>
        <?php

        class novaClasse
        {
            static $instancia = 0;
            public $valor;
            public function __construct()
            {
                $this->valor = ++self::$instancia;
            }

            public function __clone()
            {
                $this->valor = ++self::$instancia;
            }
        }

        $objeto = new novaClasse();
        $objeto2 = clone $objeto;

        print ("Objeto Original:\n");
        print_r($objeto);

        echo '<br/><br/>';
        print ("Objeto Clonado:\n");

        print_r($objeto2);
        echo '<br/><br/>';

        ?>
    </p>

</body>

</html>