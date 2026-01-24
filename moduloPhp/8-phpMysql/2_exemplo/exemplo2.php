<html>

<body>

    <p>
        <?php

        $hostaname = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'escola';

        $conn = @mysqli_connect($hostaname, $username, $password);

        if ($conn) {

            //selecionar a base de dados
        
            if (mysqli_select_db($conn, $dbname) === true) {

                
                //inserir registros
        
                $sql = "INSERT INTO tbl_aluno(num_contribuinte, nome, apelido) VALUES('999999999', 'aluno1', 'apelido1'), ('988888888', 'aluno2', 'apelido2'), ('977777777', 'aluno3', 'apelido3')";

               // if (mysqli_query($conn, $sql)) {
               if (mysqli_query($conn, $sql)){ 


                    echo 'Registro inseridos com sucesso! <br/><br/>';
                }

                $sql = "SELECT * FROM tbl_aluno";

                $result = mysqli_query($conn, $sql);

                if ($result) {

                    // se houver registros
        
                    if (mysqli_num_rows($result) !== 0) {

                        ?>

                        <strong>Mostrar os daods após inserir os registros:</strong>

                    <table cellpadding="4" cellspacing="1" bor-der="1">

                        <tr>
                            <th>ID</th>
                            <th>Número do Contribuinte</th>
                            <th>Nome</th>
                            <th>Apelido</th>

                        </tr>


                        <?php

                        while ($row = mysqli_fetch_array($result)) {

                            ?>

                            <tr>

                                <td><?php echo $row['id_aluno']; ?></td>
                                <td><?php echo $row['num_contribuinte']; ?></td>
                                <td><?php echo $row['nome']; ?></td>
                                <td><?php echo $row['apelido']; ?></td>
                            </tr>

                            <?php

                        }

                        ?>

                    </table>

                    <?php

                    }
                }

                // mudar o registro com ID igual a 1
        
                $sql = " UPDATE tbl_aluno SET nome = 'Nome alterado'  WHERE id_aluno = 1";


                mysqli_query($conn, $sql);

                echo 'Eu atualizei o registro 1<br/>';


                //eliminar o registro 2
        
                $sql = "DELETE FROM tbl_aluno WHERE id_aluno = 2 ";

                mysqli_query($conn, $sql);

                echo 'Eu apaguei o registro 2 <br/>';

                $sql = "SELECT * FROM tbl_aluno";

                $result = mysqli_query($conn, $sql);

                if ($result) {

                    // se houver registros
        
                    if (mysqli_num_rows($result) !== 0) {

                        ?>

                    <strong>Mostrar novamente após as mudanças feitas:</strong>

                    <table cellpadding="4" cellspacing="1" bor-der="1">

                        <tr>
                            <th>ID</th>
                            <th>Número de Contribuinte</th>
                            <th>Nome</th>
                            <th>Apelido</th>
                        </tr>

                        <?php

                        while ($row = mysqli_fetch_array($result)) {

                            ?>

                            <tr>

                                <td><?php echo $row['id_aluno']; ?></td>
                                <td><?php echo $row['num_contribuinte']; ?></td>
                                <td><?php echo $row['nome']; ?></td>
                                <td><?php echo $row['apelido']; ?></td>
                            </tr>

                            <?php

                        }
                        ?>

                    </table>

                    <?php

                    } else {
                        echo 'Falha ao recolher o registro <br/>';
                    }
                } else {
                    echo 'Erro: A ação não pôde ser realizada <br/>';
                }
            } else {
                echo 'A atualização do registro falhou<br/>';
            }

            mysqli_close($conn);
        } else {
            echo 'Falha ao conectar à base de dados <br/>';
        }
        ?>

    F

    </p>
</body>

</html>