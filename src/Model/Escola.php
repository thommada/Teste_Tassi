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

    //Getters e Setters
    // ID
    public function getId()
    { // getter ID
        return $this->id;
    }
    public function setId($id)
    { //setter id
        $this->id = $id;
    }
    // Nome da Escola
    public function getnome()
    { // getter nome da escola
        return $this->nome;
    }
    public function setNome($nome)
    { // setter nome da escola
        $this->nome = $nome;
    }
    // Endereço da Escola
    public function getEndereco()
    { // getter endereço
        return $this->endereco;
    }
    public function setEndereco($endereco)
    { // setter endereço
        $this->endereco = $endereco;
    }
    // Situação
    public function getSituacao()
    { // getter Situação
        return $this->situacao;
    }
    public function setSituacao($situacao)
    { // setter Situação
        $this->situacao = $situacao;
    }
}
