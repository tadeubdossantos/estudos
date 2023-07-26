<?php
    require "caneta.class.php";
    
    /*INSTACIAMENTO 
        - Gera um objeto a partir de uma classe
        - Instânciamento um objeto a partir de um classe
    */
    $c1 = new Caneta;
    $c1->cor        = "Azul";
    //$c1->ponta      = 0.5;        atributo privado
    //$c1->tampada    = false;      atributo protegido
    
     //ESTADO DO OBJETO
    $c1->rabiscar();
    //$c1->tampar();                método privado
    
    print_r($c1);
        
?>