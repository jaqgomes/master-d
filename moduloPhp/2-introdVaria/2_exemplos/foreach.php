<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">

    <title>Foreach</title>
</head>

<body>
    <p>
        <?php

        $vector = array(34, 2, 12, 14);

        foreach ($vector as $item => $value) {
            echo " Valor {$item} : " . ($value * 11) . "<br/>";
        }
        ?>
    </p>
</body>

</html>