<?php

    /*
        Variáveis pré-definidas que também são conhecidas como arrays super globais
        Possuem recursos internos, externas (entradas do cliente) do php e também do ambiente 
        São super globais por poderem ser acessadas em todo lugar do ambiente (escopo)
      
        URL é formada por partes chamada de URI (.org, www, .com, .br, http, https, dominio)
    */

    //Método GET (dados na url)
    $nome = (int) $_GET["a"];   //Conversão para número inteiro
    var_dump($nome);

    //Obter o endereço ip do visitante
    $ip = $_SERVER["REMOTE_ADDR"];
    echo $ip;
    echo "<br/>";
    
    //Obter a página acessada (Ex: pode ser aplicado para saber quais páginas foram acessadas pelos visitantes)
    $arquivo = $_SERVER["SCRIPT_NAME"];
    echo $arquivo;
    