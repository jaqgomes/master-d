<?php
session_start();

$email = htmlspecialchars($_POST["email"]);
$pwd = htmlspecialchars($_POST["pwd"]);

if ($email == "pratica@teste.com" && $pwd == "senha") {
    header("Location:catalogo.php");
    exit();

} else {

    echo "<!DOCTYPE html>
    <html lang='pt'>
    <head>
        <meta charset='UTF-8'>
        <link href='estilos.css' rel='stylesheet'>
        <title>Erro de Login</title>
    </head>
    <body>
        <div class='caixa1'>
            <h2>Login Inválido</h2>
            <p>O email ou a senha não estão corretos.</p>
            <a href='pratica29.php' class='botao'>Tentar novamente</a>
        </div>
    </body>
    </html>";
}
?>