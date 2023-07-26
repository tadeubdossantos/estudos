<?php
require_once "animal.class.php";

class Ave extends Animal{
    private $corPena;
    
    public function alimentar(){
        echo "<p>Comendo Frutas</p>";
    }
    
    public function emitirSom(){
        echo "<p>Som de Ave</p>";
    }
    
    public function locomover(){
        echo "<p>Voando</p>";
    }
    
    public function fazerNinho(){
        echo "<p>Construindo um Ninho</p>";
    }
    
    function setCorPena($corPena){
        $this->corPena = $corPena;
    }
    
    function getCorPena(){
        return $this->corPena;
    }
    
   
}

?>