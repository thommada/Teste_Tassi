<?php

class Escola
{
    private $id;
    private $nome;
    private $endereco;
    private $situacao;

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
    public function listAluno()
    { // buscar/listar alunos daquela escola do Banco de Dados

    }
    public function countAlunos()
    { // contar alunos daquela escola do Banco de Dados

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
