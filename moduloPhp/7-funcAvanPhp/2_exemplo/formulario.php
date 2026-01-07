<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

if (isset($_POST['enviar'])) {
    error_reporting(0);

    //guardar os cokkies durante a semana;
    //hora atual + ( 7 dias * 24horas * 60 minutos )

    $prazo = time() + (7 * 24 * 60 * 60);

    setcookie('corFavorita', $_POST['corFavorita'], $prazo);
    setcookie('animalFavorito', $_POST['animalFavorito'], $prazo);
    setcookie('passatempo', $_POST['passatempo'], $prazo);

    //mostrar valores enviados 

    echo 'Enviou o formulario!';

    echo '<br/>';

    echo 'Os dados enviados foram:';

    echo '<ul><li>A minha cor favorita é ' . $_POST['corFavorita']. '</li>';

    echo '<li>O meu animal favorito é ' . $_POST['animalFavorito'] . '</li>';

    echo '<li> Os meus passatempos são ' . htmlentities($_POST['passatempo']) . '</li></ul>';

} else {
    //se não for nada enviado, será mostrado no formulario

    echo '

    <strong>Formlário</strong>

    <br/>

    <form action="" method="post">
    <table>
        <tr>
            <td>A minha cor favorita: </td>

            <td>
                <select name="corFavorita" id="corFavorita">
                
                    <option value="laranja" '.($_COOKIE['corFavorita'] == "laranja" ? "selected" : "").'>laranja</option>

                    <option value="verde" '.($_COOKIE['corFavorita'] == "verde" ? "selected" : "").'>verde</option>

                    <option value="azul" '.($_COOKIE['corFavorita'] == "azul" ? "selected" : "").'>azul</option>

                    <option value="amarelo" '.($_COOKIE['corFavorita'] == "amarelo" ? "selected" : "").'>amarelo</option>

                    <option value="vermelho" '.($_COOKIE['corFavorita'] == "vermelho" ? "selected" : "").'>vermelho</option>        
        
                </select>
            </td>
        </tr>

        <tr>
            <td>O meu animal favorito é : </td>
            <td>
                <input type="text" name="animalFavorito" id="animalFavorito" value="'.htmlentities($_COOKIE['passatempo']).'" size="20" maxlength="50"/>
            </td>
        </tr>


        <tr>
            <td>
                Os meus passos são:
            </td>
            <td>
                <textarea name="passatempo" id="passatempo" cols="35" rows="3">
                    '.htmlentities($_COOKIE['passatempo']).'
                </textarea>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="submit" id="enviar" name="enviar" value="Enviar Dados"
            </td>
        </tr>
    </table>
    
    </form>
    ';
}
?>
</body>
</html>