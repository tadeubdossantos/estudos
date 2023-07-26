<?php

class Carro{
    
    //PROPRIEDADES / ATRIBUTOS
    var $marca;
    var $nome;
    var $modelo;
    var $motor;
    var $cor;
    var $nivelCombustivel;
    var $ligado;
     
    //ESTADOS / MÉTODOS
    function fabricar($marca, $nome, $modelo, $motor, $cor){
        $this->marca            = $marca;
        $this->$nome            = $nome;
        $this->modelo           = $modelo;
        $this->motor            = $motor;
        $this->nivelCombustivel = 100;
        $this->ligado           = false;
    }
    
    function ligarMotor(){
        $this->nivelCombustivel = $this->nivelCombustivel - 5;
        $this->ligado = true;
        echo "Motor Ligado! \n";
    }
    
    function desligarMotor(){
        $this->ligado = false;
        echo "Motor Desligado! \n";
    }
    
    function viajar($km){
        if ($km > 0) {
            
        }
    }
    

    //ESTADO DO OBJETO
    
}
    
    



    /*INSTACIAMENTO 
        - Gera um objeto a partir de uma classe
        - Instânciamento um objeto a partir de um classe
    */
?>