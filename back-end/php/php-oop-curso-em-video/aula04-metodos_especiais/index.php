<?php
    require "caneta.class.php";
    
    /*INSTACIAMENTO 
        - Gera um objeto a partir de uma classe
        - Instânciamento um objeto a partir de um classe
    */
    
    $c1 = new Caneta();
    $c1->setModelo("Vermelho");
    $c1->setPonta(0.5);
    print_r($c1);
    
    
    $c2 = new Caneta();
    print_r($c2);    
    
    
?>