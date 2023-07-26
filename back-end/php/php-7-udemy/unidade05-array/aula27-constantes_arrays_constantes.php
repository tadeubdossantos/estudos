<?php
    //Variável é o local em que poderá varia de valor
    //Constante é o local que não mudará de valor (Ex: idioma de um site, diretórios padrões, endereço ip e etc)

    //Definição de consante
    define("SERVIDOR","127.0.0.1");         //Nome em maísculo é uma boa prática
    echo SERVIDOR;
    
    echo "<br/>";

    //Uso de um array constante
    define("BANCO_DE_DADOS", [              //Passando como parametro o "true" para a constante se case sensitive
        '127.0.0.1',
        'root',
        'password',
        'test'        
    ], true);
    print_r(BANCO_DE_DADOS);
    
     echo "<br/>";

    //Constante nativa do PHP
    echo PHP_VERSION;
?>




    
    