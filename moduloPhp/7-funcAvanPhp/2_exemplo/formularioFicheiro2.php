<html>

<body>
    <p>

        <?php
        if (file_exists('dadosFormulario.txt')) {
            echo 'Leitura do ficheiro utilizando file_get_contents()<br/>';

            echo '<pre>';

            echo file_get_contents('dadosFormulario.txt');

            echo '</pre>';

            echo '<hr/>';

            echo 'Leitra do ficheiro utilizando fgets()<br/>';

            $f = fopen('dadosFormulario.txt', 'r');

            if (!$f) {

                die('Não foi possível abrir o ficheiro');

            }

            echo '<pre>';

            //feof detecta o fim do ficheiro
        
            while (!feof($f)) {

                echo $linha;
            }

            echo '</pre>';

            fclose($f);

        } else {
            echo 'O ficheiro não foi criado. Vá para  <a href="formularioFicheiro.php">formularioFicheiro.php</a> para criá-lo';
        }

        ?>
    </p>
</body>

</html>