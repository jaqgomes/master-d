<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="descriiption" content="escrever email">
    <meta name="author" content="Jaqueline Lima">

    <title>Escrever email</title>
</head>

<body>

    <?php

    if ($_GET["acc"] == "envioMail") {

        //carregar as classes 
    
        require 'src/Exception.php';
        require 'src/PHPMailer.php';
        require 'src/SMTP.php';

        //criar o objeto 
    
        $mail = new phpMailer(true);

        //passar os parametros 
    
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;
        $mail->Username = "xxxxxxx@gmail.com";  // a sua conta 
        $mail->Password = "senha"; // a sua senha 
        $mail->SetFrom('xxxxxxx@gmail.com', 'Nome');

        //preencher o email com conteudo do formulário 
    
        $mail->Subject = "Contacto através do Formulario - WEB";
        $conteudo = "Nome: " . $_POST["nome"] . "<br/>";
        $conteudo .= "Apelidos: " . $_POST["apelidos"] . "<br/>";
        $conteudo .= "Email: " . $_POST["email"] . "<br/>";
        $conteudo .= "Telemóvel: " . $_POST["telemovel"] . "<br/>";
        $conteudo .= "Mensagem: " . $_POST["mensagem"] . "<br/>";
        $mail->MsgHTML($conteudo);
        $mail->AltBody = "Contacto desde Formulario\nxxxx.";

        //indicar a conta a enviar 
        $mail->AddAddress('xxxxxxx@gmail.com', 'Contacto');

        //enviar verificando que funciona 
    
        if (!$mail->Send()) {

            echo "Error: " . $mail->ErrorInfo;

        } else {

            echo "<br/><br/>Obrigado pelo contacto, terá uma resposta o mais 
            brevemente possível.<br/>";


        }


    } else {

    }

    ?>
    <!-- formulario de envio-->

    <form name="envio" method="post" action="">

        Nome* : <input type="text" name="nome" id="nome" /><br />

        Apelidos* :<input type="text" name="apelidos" id="apelidos" /><br />

        E-mail* : <input type="text" name="email" id="email" /><br />

        Telemóvel* : <input type="text" name="telemovel" id="telemovel" /><br />

        Mensagem : <br />

        <textarea cols="60" rows="8" name="mensagem" id="mensagem">

        </textarea>

        <input type="hidden" name="acc" value="envioMail" />

        <br />

        <input type="submit" name="bot" value="Enviar" />

    </form>

</body>

</html>