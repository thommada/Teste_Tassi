<?php

class Turma
{
    private $id; // ID da turma
    private $ano; // Ano da Turma
    private $nivel; // Nível de Ensino da Turma
    private $serie; // Série da Turma
    private $turno; // Turno da Turma
    private $escola; // Escola da turma

    // Funções
    public function __construct($ano, $nivel, $serie, $turno, $escola) //construtor do modelo de Turma
    {
        if (($ano != NULL) && 
            ($nivel != NULL) && 
            ($serie != NULL) && 
            ($turno != NULL) && 
            ($escola != NULL))
        {
            $this->setAno($ano);
            $this->setNivel($nivel);
            $this->setSerie($serie);
            $this->setTurno($turno);
            $this->setEscola($escola);

            return true;
        }
        return false;
        
    }
    //Getters e Setters
    //ID
    public function getId()
    { // getter id
        return $this->id;
    }
    public function setId($id)
    { // setter id
        $this->id = $id;
    }
    //Ano
    public function getAno()
    { // getter Ano
        return $this->ano;
    }
    public function setAno($ano)
    { // setter Ano
        $this->ano = $ano;
    }
    //Nível de Ensino
    public function getNivel()
    { // getter Nível de Ensino
        return $this->nivel;
    }
    public function setNivel($nivel)
    { // setter Nível de Ensino
        $this->nivel = $nivel;
    }
    //Série
    public function getSerie()
    { // getter Série
        return $this->serie;
    }
    public function setSerie($serie)
    { // setter Série
        $this->serie = $serie;
    }
    //Turno
    public function getTurno()
    { // getter Turno
        return $this->turno;
    }
    public function setTurno($turno)
    { // setter turno
        $this->turno = $turno;
    }
    public function getEscola()
    { // getter Escola
        return $this->escola;
    }
    public function setEscola($escola)
    { // setter escola
        $this->escola = $escola;
    }
}
