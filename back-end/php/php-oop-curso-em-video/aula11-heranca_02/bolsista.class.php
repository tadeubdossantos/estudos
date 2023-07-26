<?php
require_once "aluno.class.php";

class Bolsista extends Aluno{
    private $bolsa;
   
        
    public function renovarBolsa(){
        echo "<p>Bolsa Renovada!</p>";
    }
    
     public function pagarMensalidade(){
        echo "<p>Pagando com desconto, pois ".$this->nome." é bolsista</p>";
    }
    
    public function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }
    
    public function getBolsa(){
        return $this->bolsa;
    }    
    
}

?>