<?php
    //Variável Local - Somente funcionam nas páignas que foram criados ou se este arquivo vier com uma inclusão dentro de um outro arquivo
    //Variável de Sessão - Se assemelham às super globais, ou seja, são enxergadas por toda a página enquanto o usuário acessa a página
    
    //Uso de sessão
    session_start();    //Por padrão o php ñ está c/ a sessão ativa, portanto temos q/ ativar na página, mas tem c/ configurar no servidor.
    $_SESSION["nome"] = "Tadeu";    //Criando uma sessão e já inicializando-a

    //Destruir Variável de Sessão
    $_SESSION["profissao"] = "programador";     //Criando uma sessão e já inicializando-a
    //session_unset($_SESSION["profissao"]);    //Comando que limpa a constante mas não está funcionando
    
?>


    
    