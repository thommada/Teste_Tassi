<?php

class Turma
{
    private $id; // ID da turma
    private $ano; // Ano da Turma
    private $nivel; // Nível de Ensino da Turma
    private $serie; // Série da Turma
    private $turno; // Turno da Turma

    // Funções
    public function save()
    { // salvar uma turma no Banco de Dados

    }
    public function update()
    { // atualizar uma turma no Banco de Dados

    }
    public function remove()
    { // remover uma turma do Banco de Dados

    }
    public function list()
    { // buscar/listar turmas do Banco de Dados

    }
    public function listAlunos()
    { // buscar/listar alunos daquela turma do Banco de Dados

    }
    public function countAlunos()
    { // contar alunos daquela escola do Banco de Dados

    }


    //Getters e Setters
    //ID
    public function getId():int
    { // getter id
        return $this->id;
    }
    public function setId($id)
    { // setter id
        $this->id = $id;
    }
    //Ano
    public function getAno():int
    { // getter Ano
        return $this->ano;
    }
    public function setAno($ano)
    { // setter Ano
        $this->ano = $ano;
    }
    //Nível de Ensino
    public function getNivel():string
    { // getter Nível de Ensino
        return $this->nivel;
    }
    public function setNivel($nivel)
    { // setter Nível de Ensino
        $this->nivel = $nivel;
    }
    //Série
    public function getSerie():string
    { // getter Série
        return $this->serie;
    }
    public function setSerie($serie)
    { // setter Série
        $this->serie = $serie;
    }
    //Turno
    public function getTurno():string
    { // getter Turno
        return $this->turno;
    }
    public function setTurno($turno)
    { // setter turno
        $this->turno = $turno;
    }
}
