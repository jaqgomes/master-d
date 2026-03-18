<?php

$email = htmlspecialchars($_POST['email']);
$pwd = htmlspecialchars($_POST['pwd']);
$emailLogin = 'pratica31@teste.com';
$senha = 'senha';
$senhaLogin = password_hash($senha, PASSWORD_DEFAULT);

if (password_verify($pwd, $senhaLogin)) {

    $login = true;

}

if ($email == $emailLogin && $login == true) {

    echo "<h2>Olá $email </br> Bem vindo.</h2>";

} else {

    Header("Location:login.php?invalid=1&email=$email");
}
?>