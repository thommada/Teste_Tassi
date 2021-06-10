<?php
class BD_teste
{
    private $database = "bd_teste"; // nome do banco
    private $host = "localhost"; // nome do host
    private $user = "root";// usuario do banco
    private $senha_user = ""; // senha do usuario
    private $conn= new PDO("mysql:dbname=$this->database;host=$this->host", "$this->user", "$this->senha_user");
    
    private $tables = array('aluno'=>'tb_aluno','escola'=>'tb_escola', 'turma'=>'tb_turma', 'alunoturma'=>'tb_AlunoTurma'); // nomes das tabelas com indice

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
    public function listEscola($atr) //Lista todas as Escolas do Banco de Dados
    {
        $stmt = $this->conn->prepare(
            "SELECT * FROM ".$this->database.$this->tables['escola'].
            " ORDER BY $atr"
        );
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    



}
