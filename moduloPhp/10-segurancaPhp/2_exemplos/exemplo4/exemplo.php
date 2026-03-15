<?php

session_start();

if (isset($_POST['utilizador'])) {

    //utilizando mysql

    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'biblioteca';
    $conn = @mysqli_connect($hostname, $username, $password);

    if ($conn) {

        //selecionar a base de dados

        if (mysqli_select_db($conn, $dbname) === true) {

            $result = mysqli_query($conn, sprintf(
                "select utilizador, senha, idUtilizador from utilizadores where utilizador = '%s' and senha ='%s'",
                mysqli_real_escape_string($conn, $_POST['utilizador']),
                mysqli_real_escape_string($conn, $_POST['senha'])
            ));
        }

        if (mysqli_num_rows($result) !== 0) {

            $row = mysqli_fetch_array($result);
            $_SESSION['key_id'] = md5(session_id());
            $_SESSION['idUtilizador'] = md5($row['idUtilizador']);
            header('Location:exemplo2.php');
        } else {
            echo 'Dados de acesso errados';
        }
    } else {
        echo 'Erro ao selecionar a base de dados';
    }
    mysqli_close($conn);
} else {
echo 'User not connect';
}
?>

<html>

<body>
    <p>
    <form action="?" method="post">
        <label>Utilizador</label>
        <input type="text" name="utilizador"><br />
        <label>Senha</label>
        <input type="password" name="senha">
        <input type="submit">
    </form>
    </p>
</body>

</html>