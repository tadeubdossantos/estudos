<?php

class Caneta{
    
    //PROPRIEDADES / ATRIBUTOS
    var  $modelo;
    var  $cor;
    var  $carga;
    var  $ponta;
    var  $tampada;
    
    //ESTADOS / MÉTODOS
    function rabiscar(){
        if ($this->tampada == true){
            echo "Eu não posso rabiscar...";
        }
        else{            
            echo "Estou rabiscando...";
        }
    }
    
    function tampar(){
        $this->tampada = true;
    }
    
    function destampar(){
        $this->tampada = false;
    }
    

    //ESTADO DO OBJETO
    
}
    
    



    /*INSTACIAMENTO 
        - Gera um objeto a partir de uma classe
        - Instânciamento um objeto a partir de um classe
    */
?>