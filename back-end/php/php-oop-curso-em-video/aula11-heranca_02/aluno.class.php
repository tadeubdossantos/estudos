<?php
require_once "pessoa.class.php";

class Aluno extends Pessoa{
    private $matricula;
    private $curso;
        
    public function pagarMensalidade(){
        echo "<p>Pagando Mensalidade do aluno ".$this->nome."</p>";
    }
    
    public function setMatricula($matr){
        $this->matricula = $matr;
    }
    
    public function setCurso($curso){
        $this->curso = $curso;
    }
    
    public function getMatricula(){
        return $this->matricula;
    }
    
    public function getCurso(){
        return $this->curso;
    }  
}

?>