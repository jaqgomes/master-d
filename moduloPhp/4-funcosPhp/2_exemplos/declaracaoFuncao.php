<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="Declaração de Função">

    <title>Exemplo de Declaração de função</title>
</head>

<body>
    <p>
        <?php
        function teste1(array $argumento1, int $argumento2)
        {
            echo "Eu forço o argumento1 a ser um array, é: ";
            foreach ($argumento1 as $chave => $valor) {
                echo $chave . " => " . $valor . ", ";
            }
            echo "Eu forco o argumento2 a ser um numero inteiro, e o valor e: " . $argumento2;
        }
        teste1(array(0 => 'valor1', 1 => 'valor2'), 3);
        ?>
    </p>
</body>

</html>