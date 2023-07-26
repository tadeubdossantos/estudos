<?php
require_once "animal.class.php";

class Reptil extends Animal{
    private $corEscama;
    
    public function alimentar(){
        echo "<p>Comendo Vegetais</p>";
    }
    
    public function emitirSom(){
        echo "<p>Som do Réptil</p>";
    }
    
    public function locomover(){
        echo "<p>Rastejando</p>";
    }
    
    public function soltarBolha(){
        echo "<p>Soltar uma Bolha</p>";
    }
    
    function setCorEscama($corEscama){
        $this->corPelo = $corPelo;
    }
    
    function getCorEscama(){
        return $this->corEscama;
    }
}

?>