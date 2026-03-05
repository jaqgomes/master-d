<?php
$password = crypt('masterd', 'oo');
if (crypt($_POST['senha'], 'oo') == $password) {

    echo "<b>Senha correta</b>";
}
?>