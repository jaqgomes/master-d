<?php

session_start();

if (isset($_SESSION['string']) == md5(session_id())) {

    $resultado = 'sessao correta';

} else {

    $resultado = 'Erro na sessao <br/> <a href="exemplo.php">Voltar</a>';

}
?>

<html>

<head></head>

<body>
    Teste de MD5: <br />

    <?php

    echo $resultado;

    ?>
</body>

</html>