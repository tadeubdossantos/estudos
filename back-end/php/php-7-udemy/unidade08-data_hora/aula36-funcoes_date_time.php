<?php
 
    //Datas podem ser aplicadas para sites de comércio eletrônico que calcula quantos dias ser entregue uma mercadoria
    //Como também podem ser usado para controle de tráfego aéreo em lidar com fusos horários de diferentes regiões

    //Data do Servidor
    echo date("d/m/Y");
    
    echo "<br/>";

    //Data e Hora do Servidor
    echo date("d/m/Y H:i:s");

    echo "<br/>";

    //Quantidade em Segundos desde de o ano de 1970 (Timestamp / Marco Zero de Tempo do Sistema Unix)
    echo time();

    echo "<br/>";

    //Informa dia e horário a partir do Timestamp informado
    echo date("d/m/Y H:i:s", 1545000000);

    echo "<br/>";

    //Obtém o Timestamp do dia 11 de setembro de 2011 (Após converter string em time)
    $st = strtotime("2001-09-11");      //Expressão
    //Retorna a data formatada a partir do Timestamp anterior
    echo date("l, d/m/Y", $st);

    echo "<br/>";
    
    //Obtém o Timestamp do dia de hoje (Após converter string em time)
    $st = strtotime("now");     //Expressão
    //Retorna a data formatada a partir do Timestamp anterior
    echo date("l, d/m/Y", $st);

    echo "<br/>";

    //Obtém o Timestamp do dia de hoje c/ acrescimdo de mais um dia (Após converter string em time)
    $st = strtotime("+1 day");      //Expressão
    //Retorna a data formatada a partir do Timestamp anterior
    echo date("l, d/m/Y", $st);

    echo "<br/>";

    //Obtém o Timestamp do dia da semantual atual c/ acrescimdo de mais uma semana (Após converter string em time)
    $st = strtotime("+1 week");     //Expressão
    //Retorna a data formatada a partir do Timestamp anterior
    echo date("l, d/m/Y", $st);

    echo "<br/>";

?>


    
    