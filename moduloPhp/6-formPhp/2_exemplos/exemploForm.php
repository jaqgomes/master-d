<html>
<p>
    <?php
    echo 'Olá ' . $_POST['nome'] . ' ' . $POST['apelidos'] . '<br>';
    echo 'Tem ' . $_POST['idade'] . ' anos' . '<br/>';
    echo 'A sua cor favorita é o ' . $_REQUEST['cor'] . '<br>';

    if ($_POST['cinema'] == 'on') {
        echo 'Gosta de cinema <br/>';

    } else {
        echo 'Não gosta de cinema <br/>';
    }

    echo ' E uma breve descricao sobre si seria' . $_REQUEST['descricao']


        ?>
</p>

</html>