<html>

<body>
    <p>
        <?php

        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'supermercado';
        $conn = @mysqli_connect($hostaname, $username, $password);


        if ($conn) {

            if (mysqli_select_db($conn, $dbname) === TRUE) {

                $sql = "SELECT * FROM tbl_produtos";
                $result = mysqli_query($conn, $sql);

                if ($result) {

                    if (mysqli_num_rows($result) !== 0) {

                        while ($row = mysqli_fetch_array($result)) {
                            echo $row['quantidade'] . ' - ' . $row['valor'] . ' ' . $row['validade'] . '<br/>';
                        }

                    } else {

                        echo ' Sem registros encontrados';
                    }
                } else {

                    echo ' Falha ao selecionar a base de dados';
                }

                mysqli_close($conn);

            }
            echo ' Falha na conexão';
        }
        ?>
    </p>
</body>

</html>