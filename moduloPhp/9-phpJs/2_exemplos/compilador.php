<?php

$decoded = json_decode($_GET['json'], true);
//tratar os dados json inserindo-os na base de dados ou  comparando-os com algum valor, criando uma resposta nun array;

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'usuario';
$conn = @mysqli_connect($hostname, $username, $password);

if ($conn) {

    //selecionar a base dados

    if (mysqli_select_db($conn, $dbname) === TRUE) {

        //inserir registros

        $ler      = $decoded["passatempo"][0]["marcado"] == 1 ? 1 : 0;
        $desporto = $decoded["passatempo"][1]["marcado"] == 1 ? 1 : 0;


        $sql = "INSERT INTO tbl_usuario(nome, email, desporto, ler) VALUES('$decoded[firstname]', '$decoded[email]', '$ler', '$desporto')";


    }
    if (mysqli_query($conn, $sql)) {

        $json = array();
        $json['sucess'] = 1;
        $json['created'] = array();
        $json['created'][] = 'Registros inseridos com sucesso!';
        $encoded = json_encode($json);

        echo $encoded;

        return;
    }
}

$json = array();
$json['errosNum'] = 2;
$json['error'] = array();
$json['error'][] = 'email invalido!';
$json['error'][] = 'Bom passatempo!';


$encoded = json_encode($json);

echo $encoded;

?>