<?php

    /*
        Espocpo de Variável = até onde a variável é enxergada. Ex: Variavel com Escopo Local, Variável de Sessão (Escopo Geral) e entre outros       
    */

    $nome = "Tadeu";    //Variável com escopo global

    function teste1(){
        echo $nome;     //Essa varíavel não tem escopo aqui (Erro!)
    }

    function teste2(){
        global $nome;   //Defino que essa variável tenha escopo aqui (palavra reservada: global)
        echo $nome;     //Essa varíavel passa a ter escopo
    }

    function teste3(){
        $nome = "Patricia";     //Variáve com escopo local
        echo $nome;
    }

    teste1();
    teste2();
    teste3();

    
    