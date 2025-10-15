<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">

    <title>Exemplo array 2</title>
</head>
<body>
    <?php
        $vector = array(
            1=> array("nome"=>"Pedro", "idade"=>12),
            2=> array("nome"=>"Ana", "idade"=>22),
            3=> array("nome"=>"Luis", "idade"=>41)
        );

        echo $vector[2]["nome"];//mostra Ana
    ?>

</body>
</html>