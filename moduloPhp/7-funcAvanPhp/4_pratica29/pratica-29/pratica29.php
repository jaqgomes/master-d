<html>

<head>
    <meta charset="UTF-8">
    <title>Login - Prática 29</title>
    <link href="estilos.css" rel="stylesheet">
</head>

<body>
    <div class="caixa0">

        <span id="logo"><img src="logo.png"></span>

    </div>


    <div class="caixa1">
        <h2 class="titulo">LOGIN</h2>

        <form method="post" action="processoLogin.php" class="login form">

            <div>
                <label for="email">Email : </label>
                <input type="text" id="email" name="email" placeholder="Digite o email">
            </div>

            <div>
                <label for="pwd">Senha :</label>
                <input type="password" id="pwd" name="pwd" placeholder="Inserir a senha" required>
            </div>

            <button type="submit" class="botao">Enviar</button>
        </form>
    </div>
</body>

</html>