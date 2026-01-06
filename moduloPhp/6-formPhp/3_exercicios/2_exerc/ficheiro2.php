<?php
session_start();

if (!empty($_SESSION['cor'])) {
    $cor = $_SESSION['cor'];

} else {
    $cor = 'Vazio';
}

?>

<html>

<body>
    <?php

    echo $cor
        ?>
</body>

</html>