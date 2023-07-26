<?php

class Funcionario extends Pessoa{
    private $setor;
    private $trabalhando;
        
    public function mudarTrabalho($setor){
        $this->setor = $setor;
        echo "<p>O Setor novo é ".$this->setor."</p>";
    }
    
    public function setSetor($setor){
        $this->matr = $setor;
    }
    
    public function setTrabalhando($trabalhando){
        $this->trabalhando = $trabalhando;
    }
    
    public function getSetor(){
        return $this->setor;
    }
    
    public function getTrabalhando(){
        return $this->trabalhando;
    }  
}

?>