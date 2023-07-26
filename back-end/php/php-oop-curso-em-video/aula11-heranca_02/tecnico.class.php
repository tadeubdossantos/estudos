<?php
require_once "aluno.class.php";

class Tecnico extends Aluno{
           
    private $registroProfissional;
    
     public function praticar(){
        echo "<p>O ténico ".$this->nome." esta praticando...</p>";
    }
    
    
}

?>