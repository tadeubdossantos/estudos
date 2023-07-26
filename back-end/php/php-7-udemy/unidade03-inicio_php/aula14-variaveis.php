<?php

    // Comentário de Linha Simples
    
    /* 
        Comentário de Bloco     
    */

    /* É uma linguagem Fracamente Tipada / Não sou obrigado a informar o tipo de variável */
    /* Espaço de memória que vai guardar uma determinada informação que pode variável (sofrer alteração) */
    $nome = "Tadeu Bispo dos Santos";

    //echo $nome;

    //Informa o tipo de variável, quantidade de caracteres e também o conteúdo
    var_dump($nome);

    //Sugestão de criação de variáveis autoexplicativas  
    $cidade = "Presidente Prudente";
    $anoNascimento = 1989;
    
    echo "<br/>";

    // Variavéis são diferentes em Case Sensitive, diferentes se minusculo ou maiúsculo //
    $carro = "Gol";
    $Carro = "Palio";
    echo $carro;
    echo "<br/>";
    echo $Carro;
    
    //Inclusão de números nos nomes das variáveis somente no meio e no fim
    $t1este = "teste 1";
    $teste2 = "teste 2";
    
    //Caracteres especiais com exceção do underline "_"
    $_teste = "teste aprovado!";

    //Não podemos usar nomes reservadores para variáveis. Ex: $this
    
    //Destruir uma variável
    $empresa = "setecom";
    echo "<br/>";
    echo $empresa;
    unset($empresa);    //Elimina os dados da variável
    echo $empresa;      //Acusa erro, pois não tem nada armazenado
    
    //Conferir se uma variável foi definida
    $pessoa = "maria";
    echo "</br>";
    if (isset($pessoa)){  //Verifica se variável foi definida
        echo "Variável foi definida!";
    }
    echo "<br/>";    
    if (!isset($empresa)){
        echo "Variável não foi defnida!";
    }

    //Concatenacao
    $nome       = "Tadeu";
    $sobrenome  = "Bispo";
    $nomeCompleto = $nome." ".$sobrenome;

    //---------- 8 TIPOS DE DADOS PRIMITIVOS ----------//
    
    //Tipos Básicos de Dados (String, Númerico, Booleano)
    $empresa    = "setecom";
    $site       = "www.setecom.net";
    $ano        = 1990;
    $salario    = 5600.80;
    $bloqueado  = true;

    //Tipos Compostos de Dados (Array e Objetos)
    $frutas = array("Abacaxi", "Manga", "Melancia", "Laranja");
    echo "<br/>";
    echo $frutas[1];
    echo "<br/>";
    $dataAtual = new DateTime();
    var_dump($dataAtual);

    //Tipos Especiais de Dados
    $arquivo = fopen("teste.php","r"); //Arquivos (Resource)
    var_dump($arquivo);    
    $vazio = "";    //Variável Vazia: Foi iniciado mas não tem informação (espaço vazio reservado na memoria)
    $nulo = null;   //Variável Nula: Ausência de Valor (Quando destroi a variável)

?>