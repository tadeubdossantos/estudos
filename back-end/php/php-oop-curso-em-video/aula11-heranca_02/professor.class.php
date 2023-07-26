<?php
require_once "pessoa.class.php";

class Professor extends Pessoa{
    private $especialidade;
    private $salario;
        
    public function receberAumento($aumento){
        $this->salario += $aumento;
        echo "<p>Salario passou a ser R$ ".$this->salario."</p>";
    }
    
    public function setEspecialidade($especialidade){
        $this->especialidade = $especialidade;
    }
    
    public function setSalario($salario){
        $this->salario = $salario;
    }
    
    public function getEspecialidade(){
        return $this->especialidade;
    }
    
    public function getSalario(){
        return $this->salario;
    }  
}

?>