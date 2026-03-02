<?php
$pais = $_GET['pais'];
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'biblioteca';
$conn = @mysqli_connect($hostname, $username, $password);

if ($conn) {

    if (mysqli_select_db($conn, $dbname) === TRUE) {

        $sql = "SELECT * FROM provincias where pais = '" . $pais . "'";

        $result = mysqli_query($conn, $sql);

        if ($result) {

            if (mysqli_num_rows($result) !== 0) {

                echo 'Província : <select id="provincia" name="provincia">';

                while ($row = mysqli_fetch_array($result)) {

                    echo '<option value="' . $row['id'] . '">' . $row['provincia'] . '</option>';

                }
            } else {

                echo '<label>Não foram encontrados registros para "' . $pais . '"</label>';
            }

        }

    } else {
        echo 'Erro ao selecionar a base de dados';
    }

    echo '</select>';

    mysqli_close($conn);

} else {

    echo 'Falha na conexão';
}
?>