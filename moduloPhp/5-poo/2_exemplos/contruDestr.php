<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="exemplo de constrututor do objeto ara criar instancias dos elemmento livro">

    <title>Document</title>
</head>

<body>
    <?php
    class Pessoa
    {
        private $nome;
        private $apelidos;

        //construtor. ë executado ao criar uma instancia desta classe
    
        function __construct($nome = '', $apelidos = '')
        {
            $this->nome = $nome;
            $this->apelidos = $apelidos;
        }

        function setNome($nome)
        {
            $this->nome = $nome;
        }

        function getNome()
        {
            return $this->nome;
        }

        function setApelidos($apelidos)
        {
            $this->apelidos = $apelidos;
        }

        function getNomeCompleto()
        {
            return $this->nome . ' ' . $this->apelidos;
        }

    }

    $Pessoa = new Pessoa('Carlos', 'Construct Teste');
    echo 'Utilizando o método __contruct... <br>';
    echo 'Olá o meu nome completo é ' . $Pessoa->getNomeCompleto();

    ?>
</body>

</html>