<?php
require_once "animal.class.php";

class Peixe extends Animal{
    private $corEscama;
    
    public function alimentar(){
        echo "<p>Comendo Substâncias</p>";
    }
    
    public function emitirSom(){
        echo "<p>Peixe não emite som</p>";
    }
    
    public function locomover(){
        echo "<p>Nadando</p>";
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