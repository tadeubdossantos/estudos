<?php
require_once "lutador.class.php";

class luta{
    
    //Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
        
    //Métodos Públicos
    public function marcarLuta($l1,$l2){
        if (($l1->getCategoria() == $l2->getCategoria()) && ($l1 != $l2)){
            $this->aprovada     = true;
            $this->desafiado    = $l1;
            $this->desafiante   = $l2;
        }
        else{
            $this->aprovada     = false;
            $this->desafiado    = null;
            $this->desafiante   = null;
            
            echo "<p>Luta não possível !</p>";
        }
    }
    
    public function lutar(){
        if ($this->aprovada == true){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            
            switch($vencedor){
                case 0: // Empate
                    echo "<p>Empate !</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                break;
                case 1: // Desafiado Vence
                    echo "<p>".$this->desafiado->getNome()." venceu a luta !</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                break;
                case 2: // Desafiante Vence
                    echo "<p>".$this->desafiante->getNome()." venceu a luta !</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
                break;
                    
                    
            }
        }
    }
    
    //Métodos Especiais
    public function setDesafiado($desafiante){
        $this->desafiante = desafiante;
    }
    
    public function setDesafiante($desafiado){
        $this->desafiado = $desafiado;
    }
    
    public function setRounds($rounds){
        $this->rounds = $rounds;
    }
    
    public function setAprovado($aprovado){
        $this->aprovado = $aprovado;
    }
    
    public function getDesafiado(){
        return $this->desafiado;
    }
    
    public function getDesafiante(){
        return $this->desafiante;
    }
    
    public function getRounds(){
        return $this->rounds;
    }    
    
    public function getAprovado(){
        return $this->aprovado;
    }
  
}

?>