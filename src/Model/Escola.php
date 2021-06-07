<?php

class Escola
{
    private $id; // ID da Escola
    private $nome; // Nome da Escola
    private $endereco; // Endereço da Escola
    private $situacao; // Situação da Escola

    // Funções
    public function save()
    { // salvar uma escola no Banco de Dados

    }
    public function update()
    { // atualizar uma escola no Banco de Dados

    }
    public function remove()
    { // remover uma escola do Banco de Dados

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
    public function getId()
    { // getter ID
        return $this->id;
    }
    public function setId($id)
    { // setter ID
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
