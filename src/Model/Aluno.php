<?php

class Aluno{
    private $id; // ID de Aluno
    private $nome;
    private $nascimento;
    private $telefone;
    private $email;
    private $genero;

    // Funções
    public function save(){ // salvar um aluno no Banco de Dados

    }

    public function update(){ // atualizar um aluno no Banco de Dados

    }
    public function remove(){ // remover um aluno do Banco de Dados

    }
    public function list(){ // buscar/listar alunos do Banco de Dados

    }


    //Getters e Setters
    public function getId(){ // getter ID
        return $this->id;
    }
    public function setID($id){ // setter ID
        $this->id = $id;
    }

    public function getNome(){ // getter nome
        return $this->nome;
    }
    public function setNome($nome){ // setter nome
        $this->nome = $nome;
    }

    public function getNascimento(){ // getter nascimento
        return $this->nascimento;
    }
    public function setNascimento($nascimento){ // setter nascimento
        $this->nascimento = $nascimento;
    }

    public function getTelefone(){ // getter telefone
        return $this->telefone;
    }
    public function setTelefone($telefone){ // setter telefone
        $this->telefone = $telefone;
    }

    public function getEmail(){ // getter email
        return $this->email;
    }
    public function setEmail($email){ // setter email
        $this->email = $email;
    }

    public function getGenero(){ // getter gênero
        return $this->genero;
    }
    public function setGenero($genero){ // setter gênero
        $this->genero = $genero;
    }



}
