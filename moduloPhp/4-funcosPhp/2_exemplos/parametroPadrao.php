<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="exemplo de perimetro padrao">

    <title>Paramentro Padrao</title>
</head>

<body>
    <p>
        <?php
        function animalPreferido($animal = "cão")
        {
            return 'O meu animal preferido é um ' . $animal;
        }
        echo animalPreferido('gato') . "<br/>";
        echo animalPreferido();
        ?>
    </p>
</body>

</html>