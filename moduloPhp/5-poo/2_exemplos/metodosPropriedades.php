<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaqueline Lima">
    <meta name="description" content="Exemplo de metodos e propriedades">

    <title>Metodos e propriedades</title>
</head>

<body>
    <?php
    class disciplina
    {
        private $nome;
        private $Professor = null;

        function __construct($nome)
        {
            $this->nome = $nome;
        }

        function getNome()
        {
            return $this->nome;
        }

        function setProfessor(Professor $professor)
        {
            $this->Professor = $professor;
        }

        function getProfessor()
        {
            return $this->Professor;
        }
    }

    class Pessoa
    {
        private $nome;
        private $apelidos;

        // Construtor. É executado ao criar uma instância desta classe 
    
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

    class Professor extends Pessoa
    {
        private $skype;

        function __construct($nome = '', $apelidos = '', $skype = '')
        {

            // Chama o construtor da classe pai Pessoa 
            parent::__construct($nome, $apelidos);
            $this->skype = $skype;
        }

        function getSkype()
        {
            return $this->skype;
        }
    }

    // Embora não seja usado neste exemplo, pode imaginar as classes 
//que poderia criar que se estendem de Pessoa 
    
    class Aluno extends Pessoa
    {
        private $skype;
        private $numeroMatricula;
        function __construct($nome = '', $apelidos = '', $skype = '')
        {

            // Chama o construtor da classe pai Person 
    
            parent::__construct($nome, $apelidos);
            $this->skype = $skype;
        }

        function setNumeroMatricula($numeroMatricula)
        {
            $this->numeroMatricula = $numeroMatricula;
        }

        function getNumeroMatricula()
        {
            return $this->numeroMatricula;
        }
    }

    // Definir um professor 
    
    $professor1 = new Professor(
        'Carlos',
        'Teste Classes',
        'skype_do_carlos'
    );
    // Definir as disciplinas 
    
    $disciplina1 = new disciplina('HTML');
    $disciplina2 = new disciplina('PHP');
    $disciplina3 = new disciplina('MYSQL');
    // Atribuir um professor às disciplinas 
    
    $disciplina1->setProfessor($professor1);
    $disciplina2->setProfessor($professor1);

    // Não é atribuido um professor à disciplina1, é obtido um objeto 
//do tipo Professor 
    
    $professorDisciplina = $disciplina1->getProfessor();

    // Se o objeto não for nulo, existe um professor 
    
    if (!is_null($professorDisciplina)) {
        echo 'O professor da disciplina ' . $disciplina1->getNome();

        // Chamar um método da classe Pessoa que foi herdado pela classe 
//Professor 
    
        echo ' é o ' . $professorDisciplina->getNomeCompleto();

        // Por último chamar o método da mesma classe 
    
        echo ' e o contacto do Skype é ' . $professorDisciplina->getSkype();

    } else {
        echo 'A disciplina ' . $disciplina1->getNome() . ' ainda não tem um 
professor designado';
    }
    echo '<br />';

    // Fazer o mesmo para a disciplina3 
    
    $professorDisciplina = $disciplina3->getProfessor();

    if (!is_null($professorDisciplina)) {
        echo 'O professor da disciplina ' . $disciplina3->getNome();

        echo ' é o ' . $professorDisciplina->getNomeCompleto();

        echo ' e o contacto do Skype é ' . $professorDisciplina->getSkype();

    } else {
        echo 'A disciplina ' . $disciplina3->getNome() . ' não tem um professor 
designado';
    }
    ?>
</body>

</html>