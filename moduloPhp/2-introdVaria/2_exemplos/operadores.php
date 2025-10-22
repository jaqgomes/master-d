<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="operadores aritmeticos">

    <title>Operadores Aritmeticos</title>
</head>

<body>
    <?php 
    $a=2;
    echo "Valor de A: $a <br>";
    
    $b=4;
    echo "Valor de B: $b <br>"; 
    
    $c=-$a; 
    echo "Valor de -A: $c <br>";
    
    $c=$a + $b;
    echo "Soma A+B: $c <br>"; 
    
    $c= $a - $b;
    echo "Subtração A-B: $c <br>"; 
    
    $c= $a * $b;
    echo "Multiplicação A*B: $c <br>"; 
    
    $c= $b / $a;
    echo "Divisão B/A: $c <br>"; 
    
    $c= $b % $a;
    echo "Resto B/A: $c <br>"; 
    ?>
</body>

</html>