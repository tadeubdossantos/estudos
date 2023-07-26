<?php


class Aluno extends Pessoa{
    private $matr;
    private $curso;
        
    public function cancelarMatr(){
        echo "<p>Matricula Cancelada!</p>";
    }
    
    public function setMatr($matr){
        $this->matr = $matr;
    }
    
    public function setCurso($curso){
        $this->curso = $curso;
    }
    
    public function getMtr(){
        return $this->mtr;
    }
    
    public function getCurso(){
        return $this->curso;
    }  
}

?>