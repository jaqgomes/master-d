<html>

<head>
    <meta charset="UTF-8">
    <title>Prática 32</title>
    <link href="estilos.css" rel="stylesheet">
</head>

<body>
    <div class="caixa0">
        <span id="logo"><img src="logo.png"></span>
    </div>
    <div class="caixa1">

        <img src="php.png" style="width: 100%;">

        <?php
        $image = imagecreatefrompng('php.png');

        $stamp = imagecreatetruecolor(300, 100);
        imagefilledrectangle($stamp, 0, 0, 200, 50, 0x000000);
        imagestring($stamp, 5, 100, 30, 'MASTER D', 0xffffff);

        $right = 350;
        $bottom = 50;
        $sx = imagesx($stamp);
        $sy = imagesy($stamp);

        imagecopymerge($image, $stamp, imagesx($image) - $sx - $right, imagesy($image) - $sy - $bottom, 0, 0, imagesx($stamp), imagesy($stamp), 70);
        imagepng($image, 'php.png');
        imagedestroy($image);

        ?>
    </div>
</body>

</html>