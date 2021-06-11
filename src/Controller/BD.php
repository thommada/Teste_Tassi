<?php
class BD_teste
{
    private $database = "db_teste"; // nome do banco
    private $host = "localhost"; // nome do host
    private $user = "root"; // usuario do banco
    private $senha_user = ""; // senha do usuario
    private $conn;

    private $tables = array('aluno' => '.tb_aluno', 'escola' => '.tb_escola', 'turma' => '.tb_turma', 'alunoturma' => '.tb_alunoturma'); // nomes das tabelas com indice

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
            "INSERT INTO " . $this->database . $this->tables['escola'] .
                " (nome, endereco, situacao) 
            VALUES (
                '" . $escola->getNome() . "', 
                '" . $escola->getEndereco() . "', 
                '" . $escola->getSituacao() . "')"
        );

        $stmt->execute();

        $id = $this->conn->lastInsertId();

        return $id;
    }
    public function updateEscola($escola) //atualizar Escola no Banco de Dados
    {
        $stmt = $this->conn->prepare(
            "UPDATE " . $this->database . $this->tables['escola'] .
                " SET 
            nome = '" . $escola->getNome() . "', 
            endereco = '" . $escola->getEndereco() . "', 
            situacao = '" . $escola->getSituacao() . "'
            WHERE idEscola = " . $escola->getId()
        );

        $stmt->execute();
    }
    public function removeEscola($idEscola) //deleta Escola do Banco de Dados
    {
        $stmt = $this->conn->prepare(
            "DELETE FROM " . $this->database . $this->tables['escola'] .
                " WHERE idEscola = '$idEscola'"
        );
        $stmt->execute();
    }
    public function searchEscola($busca, $atr) //Pesquisa 'busca' no Banco na coluna 'atr' 
    {
        $stmt = $this->conn->prepare(
            "SELECT * FROM " . $this->database . $this->tables['escola'] .
                " WHERE $atr LIKE '%$busca%'"
        );
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function searchExactlyEscola($busca, $atr) //Pesquisa 'busca' no Banco na coluna 'atr' 
    {
        $stmt = $this->conn->prepare(
            "SELECT * FROM " . $this->database . $this->tables['escola'] .
                " WHERE $atr = '$busca'"
        );
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function listEscola() //Lista todas as escolas 
    {
        $stmt = $this->conn->prepare(
            "SELECT * FROM db_teste.tb_escola ORDER BY nome"
        );
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        var_dump($results);
        return $results;
    }
    public function listTurmasEscola($idEscola) //lista todas as turmas vinculadas àquela escola
    {
        $stmt = $this->conn->prepare(
            "SELECT idTurma FROM ".$this->database . $this->tables['turma'].
            " WHERE idEscola = ".$idEscola
        );
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;

    }
    //Funções Aluno
    public function saveAluno($aluno) //adicionar Aluno no Banco de Dados
    {
        $stmt = $this->conn->prepare(
            "INSERT INTO " . $this->database . $this->tables['aluno'] .
                " (nome, email, telefone, nascimento, genero) 
            VALUES (
                '" . $aluno->getNome() . "', 
                '" . $aluno->getEmail() . "', 
                '" . $aluno->getTelefone() . "', 
                '" . $aluno->getNascimento() . "', 
                '" . $aluno->getGenero() . "')"
        );

        $stmt->execute();

        $id = $this->conn->lastInsertId();

        return $id;
    }
    public function updateAluno($aluno) //atualizar Aluno no Banco de Dados
    {
        $stmt = $this->conn->prepare(
            "UPDATE " . $this->database . $this->tables['aluno'] .
                " SET 
            nome = '" . $aluno->getNome() . "', 
            email = '" . $aluno->getEmail() . "', 
            telefone = '" . $aluno->getTelefone() . "', 
            nascimento = '" . $aluno->getNascimento() . "', 
            genero = '" . $aluno->getGenero() . "'
            WHERE idAluno = " . $aluno->getId()
        );

        $stmt->execute();
    }
    public function removeAluno($idAluno) //deleta Aluno do Banco de Dados
    {
        $stmt = $this->conn->prepare(
            "DELETE FROM " . $this->database . $this->tables['aluno'] .
                " WHERE idAluno = '$idAluno'"
        );
        $stmt->execute();
    }
    public function searchAluno($busca, $atr) //Pesquisa 'busca' no Banco na coluna 'atr' 
    {
        $stmt = $this->conn->prepare(
            "SELECT * FROM " . $this->database . $this->tables['aluno'] .
                " WHERE $atr LIKE '%$busca%'"
        );
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function searchExactlyAluno($busca, $atr) //Pesquisa  exatamente 'busca' no Banco na coluna 'atr' 
    {
        $stmt = $this->conn->prepare(
            "SELECT * FROM " . $this->database . $this->tables['aluno'] .
                " WHERE $atr = '$busca'"
        );
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    //Funções Turma
    public function saveTurma($turma) //adicionar Turma no Banco de Dados
    {
        $stmt = $this->conn->prepare(
            "INSERT INTO " . $this->database . $this->tables['turma'] .
                " (ano, nivel, serie, turno, idEscola) 
            VALUES (
                '" . $turma->getAno() . "', 
                '" . $turma->getNivel() . "', 
                '" . $turma->getSerie() . "', 
                '" . $turma->getTurno() . "', 
                '" . $turma->getEscola() . "')"
        );

        $stmt->execute();

        $id = $this->conn->lastInsertId();

        return $id;
    }
    public function updateTurma($turma) //atualizar Turma no Banco de Dados
    {
        $stmt = $this->conn->prepare(
            "UPDATE " . $this->database . $this->tables['turma'] .
                " SET 
                ano = '" . $turma->getAno() . "', 
                nivel = '" . $turma->getNivel() . "', 
                serie = '" . $turma->getSerie() . "', 
                turno = '" . $turma->getTurno() . "', 
                idEscola = '" . $turma->getEscola(). "'
                WHERE idTurma = " . $turma->getId()
        );
        $stmt->execute();
    }
    public function removeTurma($idTurma) //deleta Turma do Banco de Dados
    {
        $stmt = $this->conn->prepare(
            "DELETE FROM " . $this->database . $this->tables['turma'] .
                " WHERE idTurma = '$idTurma'"
        );
        $stmt->execute();
    }
    public function searchTurma($busca, $atr) //Pesquisa 'busca' no Banco na coluna 'atr' 
    {
        $stmt = $this->conn->prepare(
            "SELECT * FROM " . $this->database . $this->tables['turma'] .
                " WHERE $atr LIKE '%$busca%'"
        );
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function searchExactlyTurma($busca, $atr) //Pesquisa 'busca' no Banco na coluna 'atr' 
    {
        $stmt = $this->conn->prepare(
            "SELECT * FROM " . $this->database . $this->tables['turma'] .
                " WHERE $atr = '$busca'"
        );
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function searchAlunoTurma($idTurma)// busca linhas na tabela tb_alunoturma
    {
        $stmt = $this->conn->prepare(
            "SELECT idAluno, idAlunoTurma FROM ".$this->database . $this->tables['alunoturma'] .
            " WHERE idTurma = '$idTurma'"

        );
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;

    }
    public function saveAlunoTurma($idAluno, $idTurma)
    {
        $stmt = $this->conn->prepare(
            "INSERT INTO " . $this->database . $this->tables['alunoturma'] .
                " (idAluno, idTurma) 
            VALUES ($idAluno, $idTurma)"

        );
        $stmt->execute();

    }
    public function deleteSingleAlunoTurma($idAlunoTurma)//deleta uma unica linha da tabela tb_alunoturma pelo id
    {
        $stmt = $this->conn->prepare(
            "DELETE FROM " . $this->database . $this->tables['alunoturma'] .
                " WHERE idAlunoTurma = '$idAlunoTurma'"
        );
        $stmt->execute();

    }

    public function deleteAlunoTurma($id, $atr)// deleta linhas na tabela tb_alunoturma
    {
        $stmt = $this->conn->prepare(
            "DELETE FROM " . $this->database . $this->tables['alunoturma'] .
                " WHERE $atr = '$id'"
        );
        $stmt->execute();

    }
}
