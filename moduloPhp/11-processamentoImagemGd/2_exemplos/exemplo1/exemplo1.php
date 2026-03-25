<?php

$ok = '';

if ($_POST["acc"] == "submeter") {

    //se vier do formulario, obter os dados do ficheiro

    $tamanho = $_FILES["ficheiro"]["size"];
    $tipo = $_FILES["ficheiro"]["type"];
    $ficheiro = $_FILES["ficheiro"]["name"];

    if ($ficheiro != "") {

        //salvar o ficheiro na raiz, desde que nao esteja vazio, chamando de 'novo_' e o nome que tinha computador

        $destino = "/novo_" .$ficheiro;

        if (copy($_FILES["ficheiro"]["tmp_name"], $destino)) {

            $ok = 'Ficheiro submetido: sim';

        } else {
            $ok = 'Ficheiro submetido: não';
        }
    } else {

        $ok = 'Nenhum ficheiro selecionado.';
    }
}
?>