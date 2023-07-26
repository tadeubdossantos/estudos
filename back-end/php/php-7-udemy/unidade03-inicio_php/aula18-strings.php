<?php

    //VARIÁVEIS DE STRINGS
    $nome  = "Tadeu";       //Aspas Duplas
    $nome2 = 'Bispo';       //Aspas Simples
    
    //INTERPOÇÃO DE VARIÁVEIS
    echo "ABC $nome";       //Em aspas Duplas ocorre a Concatenação da Variável
    echo "<br/>";
    echo 'ABC $nome';      //Em aspas Simples não corre a Concatenação da Variável
    echo "<br/>";

    //FUNÇÕES DE STRINGS ---------------------------------------------
    $nome = "Tadeu Bispo";
    echo $nome;
    echo "<br/>";

    $nome = strtoupper($nome);      //Texto em Maiúsculo
    echo $nome;
    echo "<br/>";

    $nome = strtolower($nome);      //Texto em Minúsculo
    echo $nome;
    echo "<br/>";

    $nome = ucfirst($nome);      //Maiúsculo somente a primeira letra da primeira palavra de uma frase
    echo $nome;
    echo "<br/>";
 
    $nome = ucwords($nome);      //Maiúsculo a primeira letra de cada palavra de uma frase
    echo $nome;
    echo "<br/>";

    $qtd = strlen($nome);       //Retorna a quantidade de caracteres
    echo $qtd;
    echo "<br/>";

    //SUBSTITUIÇÃO DE UM CARACTER POR OUTRO
    $empresa = "Hcode";
    $empresa = str_replace("o","0", $empresa);  //Substituir o caracter "0" da variável "$empresa" por "0"
    $empresa = str_replace("e","3", $empresa);  //Substituir o caracter "e" da variável "$empresa" por "3"
    echo $empresa;
    echo "<br/>"; 

    //ENCONTRAR POSIÇÃO DE UMA DETERMINADA PALAVRA
    $frase = "A vida é bela com você!";
    $palavra = "bela";                     //Palavra a ser pesquisa dentro da frase
    $posicao = strpos($frase,$palavra);    //Busca a posição da ocorrência de "bela" na frase
    var_dump($posicao);
    echo "<br/>";

    //RETORNAR CARACTERES DE UMA FRASE (Usando a variável do exemplo anterior ainda)
    $parte_frase = substr($frase, 0, $posicao);     //Retorna todos os caracteres antes da palavra "bela"
    echo $parte_frase;
    echo "<br/>";

    $parte_frase = substr($frase, $posicao + strlen($palavra), strlen($frase)); //Retorna todos os caracteres após a palavra "bela"
    echo $parte_frase;
    echo "<br/>";
    

?>
    
    