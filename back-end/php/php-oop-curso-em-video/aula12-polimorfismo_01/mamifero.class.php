<?php

require_once "animal.class.php";

class Mamifero extends Animal{
    private $corPelo;
    
    public function alimentar(){
        echo "<p>Alimentar</p>";
    }
    
    public function emitirSom(){
        echo "<p>Som de Mamífero</p>";
    }
    
    public function locomover(){
        echo "<p>Correndo</p>";
    }
    
    function setCorPelo($corPelo){
        $this->corPelo = $corPelo;
    }
    
    function getCorPelo(){
        return $this->corPelo;
    }
}

?>