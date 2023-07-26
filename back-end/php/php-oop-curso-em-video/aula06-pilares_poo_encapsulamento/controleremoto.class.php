<?php
require_once "controlador.class.php";

class controleremoto implements controlador{
    
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;
    
    //Métodos Especiais
    function __construct(){
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    
    //SETTERS E GETTERS
    private function setVolume($volume){
        $this->volume = $volume;
    }
    
    private function setLigado($ligado){
        $this->ligado =  $ligado;
    }
    
    private function setTocando($tocando){
        $this->tocando = $tocando;
    }
    
    private function getVolume(){
        return $this->volume;
    }
    
    private function getLigado(){
        return $this->ligado;
    }
     
    private function getTocando(){
        return $this->tocando;
    }
    
    //Outros Métodos
    
    public function ligar(){
        $this->setLigado(true);
    }
        
    public function desligar(){
        $this->setLigado(false);
    }
    
    public function abrirMenu(){
        echo "<p> ----------- Menu -----------</p>";
        echo "<p>Está Ligado?".($this->getLigado()?"SIM":"NÃO")."</p>";
        echo "<p>Esta Tocando?".($this->getTocando()?"SIM":"NÃO")."</p>";
        echo "<p>Volume:".$this->getVolume()." = ";
        for ($i=0; $i<=$this->getVolume(); $i++){
            echo "|";
        }
        echo "</p>";
    }
    public function fecharMenu(){
        echo "<p>Fechando Menu....</p>";
    }
    
    public function maisVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        }
        else{
            echo "<p>Está Desligado!</p>";
        }
    }
    
    public function menosVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        }
        else{
            echo "<p>Está Desligado!</p>";
        }
    }
    
    public function ligarMudo(){
        if ($this->getLigado()){
            if ($this->getVolume > 0 ){
                $this->setVolume(0);
                echo "<p>Volume está mudo!</p>";
            }
            else{
                echo "<p>Não é possível pois o aparelho está desligado!</p>";
            }
            
        }
        else{
            echo "<p>Não é possível deixar mudo pois está desligado!</p>";
        }
            
    }
    
    public function desligarMudo(){
        if ($this->getLigado()){
            if ($this->getVolume == 0 ){
                $this->setVolume(50);
                echo "<p>Volume mudo está desativado!</p>";
            }
            else{
                echo "<p>Não é possível pois o aparelho está desligado!</p>";
            }
            
        }
        else{
            echo "<p>Não é possível desativar o mudo pois o aparelho está desligado!</p>";
        }
            
    }
    
    public function play(){
        if ($this->getLigado()){
            if (!$this->getTocando()){
                echo "<p>Agora está tocando!</p>";
                $this->setTocando(true);                
            }
            else{
                echo "<p>A função play já está ativa!</p>";
            }
        }
        else{
            echo "<p>Não é possível dar play pois o aparelho está desligado!</p>";
        }
    }
    
    public function pause(){
        if ($this->getLigado()){
            if ($this->getTocando()){
                echo "<p>Agora está mudo!</p>";
                $this->getTocando(false);
            }
            else{
                echo "<p>A função pause já está ativa!</p>";
            }
        }
        else{
            echo "<p>Não é possível dar pause pois o aparelho está desligado!</p>";
        }
    }
}

?>