<?php


class Pessoa{
    private $nome;
    private $idade;
    private $sexo;
    
    function __construct($nome, $idade, $sexo){
        $this->nome     = $nome;
        $this->idade    = $idade;
        $this->sexo     = $sexo;
    }
    
    public function fazerAniversario(){
        $this->idade++;
    }
    
    private function setNome($nome){
        $this->nome = $nome;
    }
    
    private function setIdade($idade){
        $this->idade = $idade;
    }
    
    private function setSexo($sexo){
        $this->sexo = $sexo;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    private function getIdade(){
        return $this->idade;
    }
    
    private function getSexo(){
        return $this->sexo;
    }
}

?>