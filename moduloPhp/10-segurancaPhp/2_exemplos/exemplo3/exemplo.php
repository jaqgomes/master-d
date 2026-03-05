<?php

session_start();

if (isset($_POST['utilizador'])) {

    if ($_POST['utilizador'] == 'teste' && $_POST['senha'] == 'masterd') {

        $encriptada = md5(session_id());

        $_SESSION['string'] = $encriptada;

        $resultado = '<p style="color:green;">Chave Correta</p>';

    } else {
        $resultado = '<p style="color:red;">Chave Incorreta</p>';
    }
} else {
    $resultado = '<p>Preencha o nome do utilizador e a senha</p>';
}
?>

<html>

<head></head>

<body>

    <p>Teste de MD5: (utilizador = teste; senha = masterd): </p>

    <?php

    echo $resultado;
    ?>

    <form action="?" method="post">

        <label for="utilizador">Utilizador:</label>
        <input id="utilizador" name="utilizador" type="text"><br><br>

        <label for="utilizador">Senha:</label>
        <input id="senha" name="senha" type="text"><br><br>

        <input type="submit" value="Enviar">

    </form>

    <a href="exemplo2.php">Ir para exemplo2.php</a>
</body>

</html>