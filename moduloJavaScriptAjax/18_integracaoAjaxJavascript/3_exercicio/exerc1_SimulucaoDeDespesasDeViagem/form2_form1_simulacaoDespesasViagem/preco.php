<?php

    error_reporting(0);

    $precos = array (0, 65, 85, 70); // preços dos hoteis
    $preco = '';
    $hotelPHP = $_GET['hotel'];
    $chegadaPHP = $_GET['chegada'];
    $partidaPHP = $_GET['partida'];

    $data1 = strtotime($chegadaPHP);
    $data2 = strtotime($partidaPHP);

    $dias = ($data2 - $data1)/86400; // o resultado da subtração a dividir pelo número total de segundos de um dia, para dar o resultado em dias e não em segundos
    
    switch ($hotelPHP) {
        
        case 1:
            $preco = $precos[1];
            break;
        case 2:
            $preco = $precos[2];
            break;
        case 3:
            $preco = $precos[3];
            break;
    }

    $total = $dias * $preco;

?>