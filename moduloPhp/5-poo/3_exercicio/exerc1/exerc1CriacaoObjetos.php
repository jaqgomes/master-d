<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="exercicio de criação de objetos do tipo classe devolução dos dados">

    <title>Exercício criação de objetos do tipo classe devolução dos dados </title>
</head>

<body>
    <?php
    class equipa
    {
        public $nome;
        public $perdidos;
        public $ganhos;

        public function __construct($nome, $ganhos, $perdidos)
        {
            $this->nome = $nome;
            $this->ganhos = $ganhos;
            $this->perdidos = $perdidos;
        }

        public function lerNome()
        {
            return $this->nome;

        }
        public function lerGanhos()
        {
            return $this->ganhos;
        }

        public function lerPerdidos()
        {
            return $this->perdidos;
        }

        public function qualidade()
        {
            return (($this->ganhos * 100) / ($this->ganhos + $this->perdidos));
        }

        public function somarVitoria()
        {
            $this->ganhos++;

        }

        public function somarDerrota()
        {
            $this->perdidos++;
        }
    }

    $obj = new equipa('Lisboa', 5, 5);
    $obj2 = new equipa('Porto', 2, 7);

    $obj->somarVitoria();
    $obj->somarVitoria();

    $obj2->somarVitoria();
    $obj->somarDerrota();

    echo $obj->lerNome() . ' com ' . $obj->lerGanhos() . ' jogos ganhos e 
    ' . $obj->lerPerdidos() . ' perdidos, tem uma qualidade média de 
    ' . $obj->qualidade() . '</br>';

    echo $obj2->lerNome() . ' com ' . $obj2->lerGanhos() . ' jogos ganhos e 
    ' . $obj2->lerPerdidos() . ' perdidos, tem uma qualidade média de 
    ' . $obj2->qualidade() . '</br>';

    ?>
</body>

</html>