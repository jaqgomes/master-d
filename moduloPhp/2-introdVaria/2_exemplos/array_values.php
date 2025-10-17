<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">

    <title>Array values</title>
</head>

<body>
    <?php
    $vec = array('seat', 'renault', 'fiat');
    unset($vec[1]);

    $vec_r = array_values($vec);


    ?>

</body>

</html>