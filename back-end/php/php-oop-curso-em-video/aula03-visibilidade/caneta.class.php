<?php

class Caneta{
    
    //PROPRIEDADES / ATRIBUTOS
    public      $modelo;
    public      $cor;
    private     $ponta;
    protected   $carga;
    protected   $tampada;
    
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