<?php

class Aluno
{
    private $id; // ID de Aluno
    private $nome; // Nome Completo do Aluno
    private $nascimento; // Data de Nascimento
    private $telefone; // Telefone 
    private $email; // E-mail
    private $genero; // Gênero

    // Funções
    public function save()
    { // salvar um aluno no Banco de Dados

    }
    public function update()
    { // atualizar um aluno no Banco de Dados

    }
    public function remove()
    { // remover um aluno do Banco de Dados

    }
    public function list()
    { // buscar/listar alunos do Banco de Dados

    }
    public function listTurmas()
    { // buscar/listar turmas que o aluno está matriculado

    }


    //Getters e Setters
    // ID
    public function getId()
    { // getter ID
        return $this->id;
    }
    public function setID($id)
    { // setter ID
        $this->id = $id;
    }
    // Nome do Aluno
    public function getNome()
    { // getter nome
        return $this->nome;
    }
    public function setNome($nome)
    { // setter nome
        $this->nome = $nome;
    }
    // Data de Nascimento
    public function getNascimento()
    { // getter nascimento
        return $this->nascimento;
    }
    public function setNascimento($nascimento)
    { // setter nascimento
        $this->nascimento = $nascimento;
    }
    // Telefone
    public function getTelefone()
    { // getter telefone
        return $this->telefone;
    }
    public function setTelefone($telefone)
    { // setter telefone
        $this->telefone = $telefone;
    }
    // E-mail
    public function getEmail()
    { // getter email
        return $this->email;
    }
    public function setEmail($email)
    { // setter email
        $this->email = $email;
    }
    // Gênero
    public function getGenero()
    { // getter gênero
        return $this->genero;
    }
    public function setGenero($genero)
    { // setter gênero
        $this->genero = $genero;
    }
}
