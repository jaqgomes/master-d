<html>

<body>

    <p>

        <?php

        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'escola';
        $conn = @mysqli_connect($hostname, $username, $password);

        if ($conn) {

            //selecionar a base de dados;
        
            if (mysqli_select_db($conn, $dbname) === true) {

                $sql = "SELECT * FROM tbl_aluno";

                $result = mysqli_query($conn, $sql);


                if ($result) {

                    //se houver registros
        
                    if (mysqli_num_rows($result) !== 0) {

                        while ($row = mysqli_fetch_array($result)) {

                            echo $row['num_contribuinte'] . ' - ' . $row['nome'] . ' ' . $row['apelido'] . '<br/>';
                        }

                    } else {

                        echo 'Sem registros enocntrados';
                    }
                } else {

                    echo 'Falha ao selecionar a base dados';
                }

                //fechar a conexao 
        
                mysqli_close($conn);


            } else {
                echo 'Falha na conexao';

            }


        }

        ?>
    </p>
</body>

</html>