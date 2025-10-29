<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="Exercicio pratica 27 - Calculadora">
    <link rel="stylesheet" type="text/css" href="estilos.css" >

    <title>Prática 27 - Calculadora HTML e PHP</title>
</head>

<body>

    <div class="caixa1">

        <h2>CALCULADORA EM HTML E PHP</h2>
        <br>

        <form method="post">
            <p><u>Primeiro número:</u></p><input type="number" step="any" name="num1">

            <p><u>Segundo número:</u></p><input type="number" step="any" name="num2">
            <br/><br/>

            <input type="submit" class="botao" value="+" name="opcao">
            <input type="submit" class="botao" value="-" name="opcao">
            <input type="submit" class="botao" value="*" name="opcao">
            <input type="submit" class="botao" value="/" name="opcao">

        </form>

        <?php
        $op = $_POST['opcao'];
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        switch ($op) {
            case '+':
                $resul = $num1 + $num2;
                break;

            case '-':
                $resul = $num1 - $num2;
                break;

            case '*':
                $resul = $num1 * $num2;
                break;

            case '/':
                $resul = $num1 / $num2;
                break;

        }

        echo "O resultado da operação é: $resul";

        ?>


    </div>


</body>



</html>