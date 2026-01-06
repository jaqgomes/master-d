<html>

<body>
    <p>

        <?php

        echo 'Olá bem-vindo/a ' . $_POST['nome'] . ' 
        com morada em ' . $_POST['morada'] . ', com  ' . $_POST['idade'] . ' anos';

        if ($_POST['animais'] == 'on') {

            echo ' e tem animais de estimação.';

        } else {
            echo ' e não tem animais de estimação.';
        }



        ?>
    </p>

</body>

</html>