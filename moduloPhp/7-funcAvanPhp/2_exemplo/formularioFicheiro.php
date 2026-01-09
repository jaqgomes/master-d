<html>

<body>
    <p>

        <?php
        if (isset($_POST['enviar'])) {

            //criar o ficheiro e salvar os dados
        
            $f = fopen('dadosFormulario.txt', 'w+');

            //escrever e adicionar \r \n para a quebra a linha
        
            fwrite($f, $_POST['corFavorita'] . "\r\n");
            fwrite($f, $_POST['corFavorita'] . "\r\n");
            fwrite($f, htmlentities($_POST['passatempo']));

            //fechar ficheiro
        
            fclose($f);

            //mostrar os valores enviados;
        
            echo 'Enviou o formulário!';
            echo '<br>';
            echo 'Os dados enviados foram:';
            echo '<ul><li> A minha cor favorita é ' . $_POST['corFavorita'] . '</li>';
            echo '<li> O meu animal favorito é ' . $_POST['animalFavorito'] . '</li>';
            echo '<li> Os meus passatempos são ' . htmlentities($_POST['passatempo']) . '</li></ul>';

        } else {

            ////se não for nada enviado, será mostrado no formulário
        

            echo '
        <strong>Formulário</strong>
        
        <br/>

        <form action="" method="post">
    
            <table>
                 <tr>
                         <td> A minha cor favorita é: </td>

                             <td>

                                <select name="corFavorita" id="corFavorita">
                                <option value= "laranja" ' . ($_COOKIE['corFavorita'] == "laranja" ? "selected" : "") . '>laranja</option>
                                <option value= "verde" ' . ($_COOKIE['corFavorita'] == "verde" ? "selected" : "") . '>verde</option>
                                <option value= "azul" ' . ($_COOKIE['corFavorita'] == "azul" ? "selected" : "") . '>azul</option>
                                <option value= "amarelo" ' . ($_COOKIE['corFavorita'] == "amarelo" ? "selected" : "") . '>amarelo</option>
                                <option value= "vermelho" ' . ($_COOKIE['corFavorita'] == "vermelho" ? "selected" : "") . '>vermelho</option>
                    
                             </select>

                        </td>
                    </tr>

                    <tr>

                        <td>O meu animal favorito é:</td>

                        <td>
                            <input type="text" name="animalFavorito" id="animalFavorito" value="' . htmlentities($_COOKIE['passatempo']) . '" size="20" maxlength="50"/>
                        </td>

                    </tr>

                    <tr>
                
                        <td>Os meus passatempos são:</td>

                    <td>

                        <textarea name="passatempo" id="passatempo" cols="35" rows="3">' . htmlentities($_COOKIE['passatempo']) . '</textarea>

                    </td>

                    </tr>

                    <td colspan = "2">
                
                        <input type="submit" id="enviar" name="enviar" value="Enviar Dados">

                    </td>

                 </tr>


                </table>
            </form>';

        }


        ?>

    </p>

</body>

</html>