<?php
session_start();

if ($_SESSION['key_id'] != md5((session_id()))) {

    header('Location: exemplo.php');
}
?>

<html>

<body>
    <p>
        <a href="desconectar.php">Desconectar sessao</a><br /><br /><br />

        <?php
        function is_date($str)
        {
            $stamp = strtotime($str);
            //converter string para data
        
            if (!is_numeric($stamp)) {

                //verificar se e numerico
                return false;
            }

            //dividir a data em dia, mes, ano
        
            $month = date('m', $stamp);
            $day = date('d', $stamp);
            $year = date('Y', $stamp);

            //verificar se a data e valida
        
            if (checkdate($month, $day, $year)) {
                return true;
            }

            return false;

        }

        if (isset($_POST['livro'])) {

            $hostname = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'biblioteca';
            $conn = @mysqli_connect($hostname, $username, $password);

            if ($conn) {

                if (mysqli_select_db($conn, $dbname) === TRUE) {

                     $result = mysqli_query($conn, sprintf("SELECT * FROM livros where idLivro = '%s'",
                         mysqli_real_escape_string($conn, $_POST['livro'])
                     ));

                    //$result = mysqli_query($conn, "SELECT * FROM livros where idLivro = " . $_POST['livro'] . ";");
                    // Se descomentar a linha anterior mostrará todos os livros da biblioteca, é enviado o código no campo: 1 ou 1 = 1
                
                    if ($result) {

                        if (mysqli_num_rows($result) !== 0) {

                            while ($row = mysqli_fetch_array($result)) {

                                if (is_date($row['dataAluguer'])) {

                                    echo '<span style="color:#ff0000">';

                                } else {
                                    echo '</span>';
                                }

                                echo '<b>' . $row['titulo'] . '</b> - ' . $row['descricao'] . '<br/>';
                            }
                        } else {
                            echo 'Nenhum livro com esse nome foi encontrado<br/><br/>';
                        }
                    }
                } else {

                    echo 'Erro ao selecionar a base de dados <br/><br/>';

                }

                mysqli_close($conn);

            } else {

                echo 'Falha na conexão<br/><br/>';
            }
        }

        ?>

        Encontre o livro para aluguar:

    <form name="envio" method="post" action="?acc=procurar">
        Id do livro <input type="text" name="livro" /><br />
        <input type="submit" value="procurar" />
    </form>
    </p>
</body>

</html>