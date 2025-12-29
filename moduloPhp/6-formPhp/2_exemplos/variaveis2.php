<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="criadas as variaveis de sessao e mostradas">

    <title>Criacao de variaves</title>
</head>

<body>
    <?php
    session_start();

    if (!empty($_SESSION['tTime'])) {
        $hora = date('H:i:s', $_SESSION['tTime']);
        $cont = (time() - $_SESSION['tTime']);

        echo 'Olá, entrou na primeira página às ' . $hora . ' faz agora ' . $cont . ' segundos.';

        echo '</br>';

        echo 'O valor da $_SESSION[\'var\'] é : ' . $_SESSION['var'];


    } else {
        echo 'Ainda não foi guardada uma variável de sessão. Vá para o variaveis.php';
    }
    ?>
</body>

</html>