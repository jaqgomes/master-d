<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="exemplo de criptacao">

    <title>Teste de criptacao</title>
</head>

<body>

    Teste de criptacao: <br/>

    <?php

    if (CRYPT_STD_DES == 1) {

        echo ' Extendido DES: ' . crypt('senha do utlizador', '_G4.uter3') . "<br/>";
    }

    if (CRYPT_EXT_DES == 1) {
        echo 'Extendido DES: ' . crypt('senha do utilizador', '_G4.uter3')
            . "<br/>";
    }
    if (CRYPT_MD5 == 1) {
        echo 'MD5: ' . crypt('senha do utilizador', '$1$ujdert54$') .
            "<br/>";
    }
    if (CRYPT_BLOWFISH == 1) {
        echo 'Blowfish: ' . crypt(
            'senha do utilizador',
            '$2a$07$ujfdentredsedwe34ed2sw$'
        ) . "<br/>";
    }

    if (CRYPT_SHA256 == 1) {
        echo 'SHA-256: ' . crypt('senha do utilizador', '$5$rounds=5000$de4rhfr43ehd5dje$') . "<br/>";
    }

    if (CRYPT_SHA512 == 1) {
        echo 'SHA-512: ' . crypt(
            'senha do utilizador',
            '$6$rounds=5000$de4rhfr43ehd5dje$'
        ) . "<br/>";
    }
    ?>


</body>

</html>