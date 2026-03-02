<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Jaqueline Lima">
    <meta name="description"
        content="Pratica 30 - Conexao, Acesso e Listagem de uma base de dados utilizando o MYSQL, com Ajax e PHP.">

    <title>Prática 10</title>

    <!-- Invocação da Folha de estilos -->
    <link href="css/estilos.css" rel="stylesheet">

    <!-- Invocação da Biblioteca Ajax -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <!-- Invocação do ficheiro JQuery -->
    <script language="javascript" type="text/javascript" src="jquery.js"></script>
</head>

<body>

    <!-- Div logo MasterD -->

    <div class="caixa0">
        <span id="logo"><img src="./images/logo.png"></span>
    </div>

    <!-- Div a ser utilizada com funções Jquery. Exibe as consultas escolhidas, devolve valor da consulta -->

    <div class="caixa1" id="selector">

        <p>Listagens MySQL apartir do PHP com jQuery/Ajax</p>

        <form id="form1">

            <select id="querys" onChange="mostrarVal()">

                <option value="" selected>Selecionar uma consulta</option>

                <option value="SELECT * FROM aluno">Consulta 1</option>

                <option value="SELECT * FROM aluno LIMIT 0,5">Consulta 2</option>

                <option value="SELECT * FROM aluno LIMIT 3,2">Consulta 3</option>

                <option value="SELECT * FROM aluno ORDER BY id DESC LIMIT 10">Consulta 4</option>

                <option value="SELECT * FROM aluno ORDER BY id DESC LIMIT 3,2">Consulta 5</option>

                <option value="SELECT * FROM aluno WHERE nome = 'Pedro'">Consulta 6</option>

                <option value="SELECT * FROM aluno WHERE id = 3 AND nome = 'Pedro'">Consulta 7</option>

                <option value="SELECT * FROM aluno WHERE idade >= 24">Consulta 8</option>

            </select>

            <br /><br />

            <input id="texto" name="text" class="textbox" maxlength="70" size="65" disabled />

            <br /><br />

            <button id="botao" type="submit" class="botao azul">Consultar</button>
        </form>
    </div>

    <br>

    <!-- Div para visualizar a consulta -->

    <div class="caixa1" id="conteudo"></div>

</body>

</html>