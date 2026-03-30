<?php
function redimensionarImagem($caminhoOriginal, $destino, $novaLargura,  $novaAltura, $manterProporcao = true, $qualidade = 100)
{

    $aInfo = getimagesize($caminhoOriginal);

    switch ($aInfo['mime']) {

        case 'image/jpeg':

            $image = imagecreatefromjpeg($caminhoOriginal);

            break;

        case 'image/gif':

            $image = imagecreatefromgif($caminhoOriginal);

            break;

        case 'image/png':

            $image = imagecreatefrompng($caminhoOriginal);

            break;
    }

    if ($manterProporcao) {

        $imgProporcao = $aInfo[0] / $aInfo[1];

        if ($imgProporcao > 1) {

            $novaAltura = $novaLargura / $imgProporcao;

        } else {

            $novaLargura = $novaAltura * $imgProporcao;
        }
    }

    $imagemNova = imagecreatetruecolor($novaLargura, $novaAltura);

    imagecopyresized($imagemNova, $image, 0, 0, 0, 0, $novaLargura, $novaAltura, $aInfo[0], $aInfo[1]);

    switch ($aInfo['mime']) {

        case 'image/jpeg':

            imagejpeg($imagemNova, $destino, $qualidade);

            break;

        case 'image/gif';

            imagegif($imagemNova, $destino);

            break;

        case 'image/png';

            imagepng($imagemNova, $destino);

            break;
    }
}

if (isset($_POST['btnEnviar'])) {

    if ($_FILES['imageOriginal']['size'] > 0) {

        //obter a extensão da image dividida em partes com o separador '.', e passar para minusculas

        $tmp = explode('.', $_FILES['imageOriginal']['name']);
        $extensao = strtolower(end($tmp));

        //validar extesão

        if (!in_array($extensao, array('jpg', 'gif', 'png'))) {

            echo 'A imagem deve estar num dos seguintes formatos: JPG, GIF ou PNG';

        } else {

            //Redimensionar e mostrar

            redimensionarImagem($_FILES['imageOriginal']['tmp_name'], './resize.jpeg', 150, 150, true, 100);

            echo 'Imagem Redimensionada<br/><img src="./resize.jpg"/>';

        }
    } else {

        echo 'Tem que fazer upload de um ficheiro !';
    }
}

echo '<br><br>

<form action = "" method = "post" enctype="multipart/form-data">
    
upload: <br>

<input type= "file" name="imageOriginal" id="imageOriginal" size="30">

<input type= "submit" name="btnEnviar" id="btnEnviar" value="Enviar imagem"/> <form>';



?>