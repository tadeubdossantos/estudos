<?php

class Caneta{
    
    //PROPRIEDADES / ATRIBUTOS
    private     $modelo;
    private     $ponta;
       
    // CONSTRUTOR - Seguirá o comportamento previsto no construtor ao ocorrer a instanciação de uma classe 
   
    
    function __construct(){
        $this->modelo = "Branco";
        $this->ponta = 0.10;
    }
    
    
    /*  Métodos Acessores (Getters)
        É um meio de segurança para acessar dados privados
    */

    /*  Métodos Modificadores / Mutantes (Setters)
        É um meio de permitir a modificação de dados privados
    */
    
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    
    public function getModelo(){
        return $this->modelo;
    }
    
    public function setPonta($ponta){
        $this->ponta = $ponta;
    }
    
    public function getPonta(){
        return $this->ponta;
    }
    
    //ESTADOS / MÉTODOS
    
    public function rabiscar(){
        if ($this->tampada == true){
            echo "<p>Eu não posso rabiscar...</p>";
        }
        else{            
            echo "<p>Estou rabiscando...</p>";
        }
    }
    
    private function tampar(){
        $this->tampada = true;
    }
    
    private function destampar(){
        $this->tampada = false;
    }   
}
    
    
    /*INSTACIAMENTO 
        - Gera um objeto a partir de uma classe
        - Instânciamento um objeto a partir de um classe
    */
?>