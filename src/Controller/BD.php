<?php
class BD_teste
{
    private $database = "db_teste"; // nome do banco
    private $host = "localhost"; // nome do host
    private $user = "root";// usuario do banco
    private $senha_user = ""; // senha do usuario
    private $conn;
    
    private $tables = array('aluno'=>'.tb_aluno','escola'=>'.tb_escola', 'turma'=>'.tb_turma', 'alunoturma'=>'.tb_AlunoTurma'); // nomes das tabelas com indice

    public function getDatabase() //get nome do Banco
    {
        return $this->database;
    }
    public function getConn() //get conexão
    {
        return $this->conn;
    }
    public function getTable($table) // get nome das tabelas
    {
        return $this->tables[$table];
    }

    //funções CRUD

    public function __construct()
    {
        $this->conn = new PDO("mysql:dbname=$this->database;host=$this->host", "$this->user", "$this->senha_user");
    }

    //Funções Escola
    public function saveEscola($escola) //adicionar Escola no Banco de Dados
    {
        $stmt = $this->conn->prepare(
            "INSERT INTO ".$this->database.$this->tables['escola']." (nome, endereco, situacao) 
            VALUES ('$escola->nome', '$escola->endereco', '$escola->situacao')");

        $stmt->execute();

        $id = $this->conn->lastInsertId();

        return $id;
    }
    public function updateEscola($escola) //atualizar Escola no Banco de Dados
    {
        $stmt = $this->conn->prepare(
            "UPDATE ".$this->database.$this->tables['escola'].
            " SET nome = '$escola->nome', endereco = '$escola->endereco', situacao = '$escola->situacao'
            WHERE idEscola = $escola->id");

        $stmt->execute();
    }
    public function removeEscola($escola) //deleta Escola do Banco de Dados
    {
        $stmt = $this->conn->prepare(
            "DELETE FROM ".$this->database.$this->tables['escola'].
            " WHERE idEscola = '$escola->id'"
        );
        $stmt->execute();

    }
    public function searchEscola($busca, $atr) //Pesquisa 'busca' no Banco na coluna 'atr' 
    {
        $stmt = $this->conn->prepare(
            "SELECT * FROM ".$this->database.$this->tables['escola'].
            " WHERE $atr LIKE '%$busca%'"
        );
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function searchExactlyEscola($busca, $atr) //Pesquisa 'busca' no Banco na coluna 'atr' 
    {
        $stmt = $this->conn->prepare(
            "SELECT * FROM ".$this->database.$this->tables['escola'].
            " WHERE $atr = '$busca'"
        );
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    //Funções Aluno
    public function saveAluno($aluno) //adicionar Aluno no Banco de Dados
    {
    
    }
    public function updateAluno($aluno) //atualizar Aluno no Banco de Dados
    {
        
    }
    public function removeAluno($aluno) //deleta Aluno do Banco de Dados
    {

    }
    public function searchAluno($busca, $atr) //Pesquisa 'busca' no Banco na coluna 'atr' 
    {
        $stmt = $this->conn->prepare(
            "SELECT * FROM ".$this->database.$this->tables['aluno'].
            " WHERE $atr LIKE '%$busca%'"
        );
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function searchExactlyAluno($busca, $atr) //Pesquisa  exatamente 'busca' no Banco na coluna 'atr' 
    {
        $stmt = $this->conn->prepare(
            "SELECT * FROM ".$this->database.$this->tables['aluno'].
            " WHERE $atr = '$busca'"
        );
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    //Funções Turma
    public function saveTurma($turma) //adicionar Turma no Banco de Dados
    {
    
    }
    public function updateTurma($turma) //atualizar Turma no Banco de Dados
    {
        
    }
    public function removeTurma($turma) //deleta Turma do Banco de Dados
    {

    }
    public function searchTurma($busca, $atr) //Pesquisa 'busca' no Banco na coluna 'atr' 
    {
        $stmt = $this->conn->prepare(
            "SELECT * FROM ".$this->database.$this->tables['turma'].
            " WHERE $atr LIKE '%$busca%'"
        );
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function searchExactlyTurma($busca, $atr) //Pesquisa 'busca' no Banco na coluna 'atr' 
    {
        $stmt = $this->conn->prepare(
            "SELECT * FROM ".$this->database.$this->tables['turma'].
            " WHERE $atr = '$busca'"
        );
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

}
