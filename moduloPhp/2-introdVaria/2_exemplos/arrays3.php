<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">

    <title>Exemplo 3 - Array</title>
</head>
<body>
    <?php

    $vector = array("nome"=>"Maria", "idade"=>23);

    $vector ["nome"] = "Ana";
    //altera o valor da Ana

    $vector["casada"] = true;
    //nova chave para um valor boolean

    echo $vector["casada"];
    ?>
</body>
</html>