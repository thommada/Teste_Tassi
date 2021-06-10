<?php

class Aluno
{
    private $id; // ID de Aluno
    private $nome; // Nome Completo do Aluno
    private $nascimento; // Data de Nascimento (year-month-day)
    private $telefone; // Telefone 
    private $email; // E-mail
    private $genero; // Gênero

    //Getters e Setters
    // ID
    public function getId():int
    { // getter ID
        return $this->id;
    }
    // Nome do Aluno
    public function getNome():string
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
    { // setter nascimento (YYYY-MM-DD)
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
