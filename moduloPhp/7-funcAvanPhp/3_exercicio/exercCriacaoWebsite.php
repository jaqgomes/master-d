<html>

<body>

    <?php

    $f = fopen('dadosConexao.txt', 'w+');

    //escreve e adiciona \r\n para saltar as linhas
    
    fwrite($f, "IP: " . $_SERVER['REMOTE_ADDR'] . "\r\n");

    fwrite($f, "Data e hora : " . date('Y-m-d H:i:s') . "\r\n");

    fwrite($f, "Port : " . $_SERVER['REMOTE_PORT'] . "\r\n");

    fwrite($f, "URL : " . $_SERVER['REQUEST_URI'] . "\r\n");

    //fecha o ficheiro
    
    fclose($f);



    ?>
</body>

</html>