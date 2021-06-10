<?php

class Escola
{
    private $id; // ID da Escola
    private $nome; // Nome da Escola
    private $endereco; // Endereço da Escola
    private $situacao; // Situação da Escola

    // Funções
    public function __construct($nome, $endereco, $situacao) //construtor
    {
        if (($nome != NULL) && ($situacao != NULL)) {
            $this->setNome($nome);
            $this->setEndereco($endereco);
            $this->setSituacao($situacao);
            return true;
        }
        return false;
    }
    public function update($nome, $endereco, $situacao)
    {
        if (($nome != NULL) && ($situacao != NULL)) {
            $this->setNome($nome);
            $this->setEndereco($endereco);
            $this->setSituacao($situacao);
            return true;
        }
        return false;
    }
    public function remove()
    {
    }
    public function list()
    { // buscar/listar escolas do Banco de Dados

    }
    public function listAlunos()
    { // buscar/listar alunos daquela escola do Banco de Dados

    }
    public function countAlunos()
    { // contar alunos daquela escola do Banco de Dados

    }
    public function listTurmas()
    { // buscar/listar turmas daquela escola do Banco de Dados

    }

    //Getters e Setters
    // ID
    public function getId(): int
    { // getter ID
        return $this->id;
    }
    // Nome da Escola
    public function getnome(): string
    { // getter nome da escola
        return $this->nome;
    }
    public function setNome($nome)
    { // setter nome da escola
        $this->nome = $nome;
    }
    // Endereço da Escola
    public function getEndereco(): string
    { // getter endereço
        return $this->endereco;
    }
    public function setEndereco($endereco)
    { // setter endereço
        $this->endereco = $endereco;
    }
    // Situação
    public function getSituacao(): string
    { // getter Situação
        return $this->situacao;
    }
    public function setSituacao($situacao)
    { // setter Situação
        $this->situacao = $situacao;
    }
}
