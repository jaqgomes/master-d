<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="exemplo de variaveis de sessao">
    <title>Exemplo de variaveis de sessao e mostradas</title>
</head>

<body>
    <?php
    //session1.php
    session_start();
    //guardar numa variavel de sessao a hora atual.
    
    $_SESSION['tTime'] = time();
    $_SESSION['var'] = 'variável preenchida em variaveis2.php';
    ?>

    <p>
        <?php echo 'Sessão guardada. Agora vá para <a href="variaveis2.php">variaveis2.php</a>'; ?>

    </p>
</body>

</html>