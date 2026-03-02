<?php

$conexao = mysqli_connect('localhost', 'root', '', 'escola');

if (!$conexao) {
    echo "<p style='color:red;'>Erro: Não foi possível conectar ao MySQL.</p>" . PHP_EOL;
    echo "<p>Erro: </p>" . mysqli_connect_errno() . "<br/><br/>" . PHP_EOL;
    exit;
}

echo "<p style='color:green;'>A conexão foi feita com sucesso!</p>" . PHP_EOL;
echo "<p>Informação da conexão: </p>" . mysqli_get_host_info($conexao) . "<br/><br/>" . PHP_EOL;
?>